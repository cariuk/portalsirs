<input type="text" class="form-control input-sm m-b-xs" id="filter"
       placeholder="Search in table">
<table class="footable table table-bordered" data-filter=#filter>
    <thead>
    <tr>
        <th>No</th>
        <th>Tanggal Operasi</th>
        <th>No RM</th>
        <th>Nama Pasien</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Nama Dokter</th>
        <th>Pra Bedah</th>
        <th>Waktu Mulai</th>
        <th>Waktu Selesai</th>
        <th>Pasca Bedah</th>
        <th>Nama Operasi</th>
        <th data-hide="all">Keterangan</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i=0;
    foreach ($dataoperasi as $row) {
        $i++;
        ?>
        <tr class="gradeX">
            <td><?php echo $i; ?></td>
            <td width="135px" class="text-center"><?php echo $row->TANGGAL; ?></td>
            <td width="80px" class="text-center"><?php echo $row->NORM; ?></td>
            <td><?php echo $row->NAMAPASIEN; ?></td>
            <td class="text-center">
            <?php
                $tanggallahir = explode("-",explode(" ",$row->UMUR)[0]);
                $harilahir=gregoriantojd($tanggallahir[1],$tanggallahir[2],$tanggallahir[0]);
                $harisekarang=gregoriantojd(date('m'),date('d'),date('Y'));
                echo floor(($harisekarang-$harilahir)/365);
            ?>
            </td>
            <td><?php echo $row->ALAMAT; ?></td>
            <td><?php echo $row->GELAR_DEPAN.". ".$row->NAMADOKTER.", ".$row->GELAR_BELAKANG; ?></td>
            <td><?php echo $row->PRA_BEDAH; ?></td>
            <td><?php echo $row->WAKTU_MULAI; ?></td>
            <td><?php echo $row->WAKTU_SELESAI; ?></td>
            <td><?php echo $row->PASCA_BEDAH; ?></td>
            <td><?php echo $row->NAMA_OPERASI; ?></td>
            <td width="600px">
                <textarea style="width: 600px; height: 200px;"><?php echo $row->LAPORAN_OPERASI; ?></textarea>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="11">
            <ul class="pagination pull-right"></ul>
        </td>
    </tr>
    </tfoot>
</table>
<script>
    $(document).ready(function () {
        $('.footable').footable();
    });
</script>