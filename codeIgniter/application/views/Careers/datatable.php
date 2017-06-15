<input type="text" class="form-control input-sm m-b-xs" id="filter"
       placeholder="Search in table">
<table class="footable table table-bordered" data-page-size="5" data-filter=#filter>
    <thead>
    <tr>
        <th>No</th>
        <th>Melamar Pekerjaan</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Kontak</th>
        <th>Pengalaman</th>
        <th>Berkas</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=0;
    foreach ($datapelamar as $row) {
    $i++;
    ?>
    <tr class="gradeX">
        <td width="50px"><?= $i ?></td>
        <td width="50px"><?= $row->jenis_lowongan ?></td>
        <td width="100px" class="text-center">
            <img width="100px"
                 src="<?= base_url() ?>assets/careers/uploads/<?= $row->id . '-' . $row->nama_depan . ' ' . $row->nama_belakang . '/' . str_replace(" ","_",$row->foto) ?>"/>
        </td>
        <td width="150px">
            <?= $row->nama_depan ?>
            <?= $row->nama_belakang == "-" ? "" : $row->nama_belakang ?> <br /> <br />
            <?= $row->tempat_lahir . ",<br /> " . $row->tanggal_lahir ?>
        </td>
        <td width="150px">
            Email : <?= $row->email ?> <br/>
            Tlp : <?= $row->no_tlp ?></td>
        <td width="250px"><?= $row->pengalaman_kerja ?></td>
        <td>
            <?php if ($row->berkas != 0){ ?>
            <a href="<?= base_url('assets/careers/uploads/' . $row->id . '-' . $row->nama_depan . ' ' . $row->nama_belakang . '/'.str_replace(" ","_",$row->file)) ?>"
               target="_blank">Berkas.Pdf</a>
            <?php
            }else
                echo "<span class='text-danger'>Belum Ada Berkas</span>"
            ?>
        </td>
        <td>
            <?php
                if ($row->status!=2){
                ?>
                    <button id="<?=$row->id?>" class="btn btn-primary lolos">Lolos Berkas</button>
                <?php
                }
            ?>
        </td>
    </tr>
        <?php
    }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="8">
            <ul class="pagination pull-right"></ul>
        </td>
    </tr>
    </tfoot>
</table>
<script>
    $(document).ready(function () {
        $(".lolos").click(function () {
            var id = $(this).attr('id');
            console.log(id);
            $.ajax({
                url		        : "<?=base_url('careers/lolosberkas')?>",
                type            : 'POST',
                data            : 'id='+id,
                dataType        : "json",
                success	: function(data){
                   $("#"+id).hide();
                },
                beforeSend: function () {},
                complete: function () {},
                error:function(xhr,thrownError,err){}
            });
        });
    });
</script>