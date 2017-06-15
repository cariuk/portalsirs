<?php foreach ($datapelamar as $row){
    ?>
    <div class="row">
        <div class="col-lg-4 text-center">
            <img width="200px" src="<?=base_url('assets/careers/uploads/'.$row->id.'-'.$row->nama_depan.' '.$row->nama_belakang.'/'.str_replace(" ","_",$row->foto))?>">
            <br />
            <br />
            <br />
<!--            <button class="btn btn-lg btn-primary">Ganti Foto</button>-->
        </div>
        <div class="col-lg-8">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#profil">Profil Diri</a></li>
                            <li><a data-toggle="tab" href="#menu1">Berkas</a></li>
<!--                            <li><a data-toggle="tab" href="#menu2">Pengalaman Kerja</a></li>-->
                        </ul>
                        <div class="tab-content">
                            <div id="profil" class="tab-pane fade in active">
                                <div class="col-md-6 form-group">
                                    <label >Nama Depan:</label>
                                    <input value="<?=$row->nama_depan?>" type="text" class="form-control" readonly>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label >Nama Belakang:</label>
                                    <input value="<?=$row->nama_belakang?>" type="text" class="form-control" readonly>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label >Tempat Lahir:</label>
                                    <input value="<?=$row->tempat_lahir?>" type="text" class="form-control" readonly>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label >Tanggal Lahir:</label>
                                    <input value="<?=$row->tanggal_lahir?>" type="text" class="form-control" readonly>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label >Alamat:</label>
                                    <input value="<?=$row->alamat?>" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <hr />
                                <form id="upload">
                                    <div class="col-md-12 form-group">
                                        <label >Upload FILE PDF:</label>
                                        <input name="id" value="<?=$row->id?>-<?=$row->nama_depan?> <?=$row->nama_belakang?>" type="text" class="form-control hidden" readonly>
                                        <input name="berkas" type="file" class="form-control" accept=".pdf" required>
                                    </div>
                                    <div class="col-lg-8 text-danger">
                                        *Ket : BUAT DALAM SATU PDF : <br />
                                        CV, PENGALAMAN KERJA, KTP, IJAZAH, TRANSKRIP NILAI, BTCLS, dan SERTIFIKAT-SERTIFIKAT LAINNYA
                                        (SEUAIKAN DENGAN URUTANNYA)
                                    </div>
                                    <div class="col-md-4 form-group text-right">
                                        <button class="btn btn-warning">Kirim</button>
                                    </div>
                                    <br />
                                    <br />
                                    <div id="cek-berkas" class="col-md-12 text-success">
                                        <?php
                                            if ($row->berkas!=0){
                                                $prefix = base_url('assets/careers/uploads/'.$row->id.'-'.$row->nama_depan.' '.$row->nama_belakang.'/'.str_replace(" ","_",$row->file));
                                                echo "Berkas Anda Telah Terkirim, Untuk Memastikan Silahkan Mengklik URL Berikut : <a href='".$prefix."' target='_blank'>".$prefix."</a>";
                                            }
                                        ?>
                                    </div>
                                </form>
                                <script>
                                    $(document).ready(function(){
                                        $("#upload").validate({
                                            rules: {
                                                vali: "required"
                                            },submitHandler: function(form) {
                                                swal({
                                                        title: "Yakin Data Anda Sudah Lengkap dan Sesuai!",
                                                        //text: "You will not be able to recover this imaginary file!",
                                                        type: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#EF5350",
                                                        confirmButtonText: "Iya, Kirim!",
                                                        cancelButtonText: "Tidak",
                                                        closeOnCancel: false,
                                                    },
                                                    function(isConfirm){
                                                        if (isConfirm) {
                                                            var  $form = $(form);
                                                            formData = new FormData(),
                                                                params   = $form.serializeArray();
                                                            $.each(params, function(i, val) {
                                                                formData.append(val.name, val.value);
                                                            });
                                                            files    = $form.find('[name="berkas"]')[0].files
                                                            $.each(files, function(i, file) {
                                                                formData.append('berkas', file);
                                                            });
                                                            $.ajax({
                                                                url		        : "<?=base_url('careers/uploadberkas')?>",
                                                                type            : 'POST',
                                                                data            : formData,
                                                                cache           : true,
                                                                contentType     : false,
                                                                processData     : false,
                                                                enctype         : "multipart/form-data",
                                                                dataType        : "json",
                                                                success	: function(data){
                                                                    if (data.status==200){
                                                                        swal({
                                                                            title: "Sukses Mengirim!",
                                                                            text: data.message,
                                                                            confirmButtonColor: "#EF5350",
                                                                            type: "success"
                                                                        });
                                                                        $("#cek-berkas").html("Berkas Anda Telah Terkirim, Untuk Memastikan Silahkan Mengklik URL Berikut : <a href='"+data.UrlBerkas+"' target='_blank'>"+data.UrlBerkas+"</a>");
                                                                    }else{
                                                                        swal({
                                                                            title: "Gagal!",
                                                                            text: data.message,
                                                                            confirmButtonColor: "#EF5350",
                                                                            type: "error"
                                                                        });
                                                                    }
                                                                },
                                                                beforeSend: function () {
                                                                    $("#kirim").attr("disabled",true);
                                                                },
                                                                complete: function () {
                                                                    $("#kirim").attr("disabled",false);
                                                                },
                                                                error:function(xhr,thrownError,err){}
                                                            });
                                                        } else {
                                                            swal({
                                                                title: "Batal Menyimpan",
                                                                confirmButtonColor: "#2196F3",
                                                                type: "error"
                                                            });
                                                        }
                                                    });
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}?>
