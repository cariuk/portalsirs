<form id="formlamaran" action="#" method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="col-lg-8">
        <hr>
        <h5>Data Umum</h5>
        <hr>
        <input name="id_lowongan" value="<?=$id_lowongan?>" type="text" class="form-control hide">
        <div class="row">
            <div class="col-md-6 form-group">
                <label >Nama Depan:</label>
                <input name="nama_depan" type="text" class="form-control nama" required>
            </div>
            <div class="col-md-6 form-group">
                <label >Nama Belakang:</label>
                <input name="nama_belakang" type="text" class="form-control nama" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label>Tempat Lahir:</label>
                <input name="tempat_lahir" type="text" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
                <label >Tanggal Lahir:</label>
                <input name="tanggal_lahir" type="date" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label >Nomor Tlp:</label>
                <input name="no_tlp" type="text" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
                <label >Email:</label>
                <input name="email" type="email" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label >Alamat:</label>
                <input name="alamat" type="text" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <hr>
        <h5>Upload Gambar</h5>
        <hr>
        <div class="row">
            <div class="col-md-12 form-group">
                <label >Foto (JPG):</label>
                <input name="foto" type="file" class="form-control" accept=".jpg" required>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12 text-center">
                <img id="fotopegawai" class="img-rounded" width="220px" src="<?=base_url()?>assets/images/placeholder.jpg" />
            </div>
        </div>
    </div>
        <div class="col-lg-14">
            <div class="col-md-12 form-group">
                <label >Pengalaman Kerja:</label>
                <textarea name="pengalaman_kerja" class="form-control" required></textarea>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <button id="kirim" type="submit" class="btn btn-primary">Kirim Lamaran</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $('.nama').on('keypress', function (event) {
            var regex = new RegExp("^[a-zA-Z0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#fotopegawai').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("input[name=foto]").change(function () {
            readURL(this);
        });

        $("#formlamaran").validate({
            ignore: 'input[type=hidden], .select2-input', // ignore hidden fields
            errorClass: 'validation-error-label',
            successClass: 'validation-valid-label',
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },

            // Different components require proper error label placement
            errorPlacement: function(error, element) {

                // Styled checkboxes, radios, bootstrap switch
                if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container') ) {
                    if(element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                        error.appendTo( element.parent().parent().parent().parent() );
                    }
                    else {
                        error.appendTo( element.parent().parent().parent().parent().parent() );
                    }
                }

                // Unstyled checkboxes, radios
                else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                    error.appendTo( element.parent().parent().parent() );
                }

                // Input with icons
                else if (element.parents('div').hasClass('has-feedback')) {
                    error.appendTo( element.parent() );
                }

                // Inline checkboxes, radios
                else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo( element.parent().parent() );
                }

                // Input group, styled file input
                else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                    error.appendTo( element.parent().parent() );
                }else if (element.hasClass('select') || element.hasClass('select-search')){
                    error.appendTo(element.parent().parent());
                } else {
                    error.insertAfter(element);
                }
            },
            validClass: "validation-valid-label",
            success: function(label) {
                label.addClass("validation-valid-label").text("Success.")
            },
            rules: {
                vali: "required"
            },
            messages: {
                custom: {
                    required: "This is a custom error message",
                },
                agree: "Please accept our policy"
            },
            submitHandler: function(form) {
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
                            if ($form.find('[name="foto"]').length!=0){
                                files    = $form.find('[name="foto"]')[0].files
                                $.each(files, function(i, file) {
                                    formData.append('foto', file);
                                });
                            }
                            $.ajax({
                                url		        : "<?=base_url('careers/addlamaran')?>",
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
                                        $("#myModal").modal("hide");
                                        $("#myModal .modal-title").html("");
                                        $("#myModal .modal-body").html("");
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
    })
</script>