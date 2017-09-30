<form id="simpan" action="#" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label>Email</label>
                {{csrf_field()}}
                <input name="email" type="text" placeholder="eugene@kopyov.com" value="{{$akun==null?'':$akun->email}}" class="form-control" required>
            </div>

            <div class="col-sm-6">
                <label>Nomor Handphone</label>
                <input name="nomor_tlp" type="text" value="{{$akun==null?'':$akun->nomor_tlp}}" class="form-control" required>
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label>Password</label>
                <input name="password" type="password" class="form-control" required>
            </div>

            <div class="col-sm-6">
                <label>Tulis Ulang Password</label>
                <input name="password_confirmation" type="password" class="form-control" required>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
        <button class="btn btn-primary"><i class="icon-check"></i> Simpan</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#simpan").validate({
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
                vali: "required",
            },
            messages: {
                custom: {
                    required: "This is a custom error message",
                },
                agree: "Please accept our policy"
            },
            submitHandler: function(form) {
                swal({
                        title: "Yakin Ingin Menyimpan!",
                        //text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#EF5350",
                        confirmButtonText: "Iya, Simpan!",
                        cancelButtonText: "Tidak",
                        closeOnCancel: false,
                    },
                    function(isConfirm){
                        if (isConfirm) {
                            var  $form = $("#createjasa");
                            formData = new FormData(),
                                params   = $form.serializeArray();
                            $.each(params, function(i, val) {
                                formData.append(val.name, val.value);
                            });

                            $.ajax({
                                url		        : form.action,
                                type            : 'POST',
                                data            : formData,
                                cache           : true,
                                contentType     : false,
                                processData     : false,
                                enctype         : "multipart/form-data",
                                dataType        : "json",
                                success	: function(data){
                                    if (data.diagnostic.status==200){
                                        $("#pencarian-pasien").addClass("animated zoomOutUp").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                                            $(this).addClass("hide");
                                            $("#pengimputan-jasa").removeClass("hide");
                                            $("#buat").addClass("hide");
                                            $("#selesai").removeClass("hide");
                                            $("#pengimputan-jasa").addClass("animated zoomIn");
                                            $("input[name=id]").val(data.response.id);
                                        });
                                    }else{
                                        swal({
                                            title: "Gagal!",
                                            text: obj.message?obj.message:"Tidak Dapat Membuat Jasa",
                                            confirmButtonColor: "#EF5350",
                                            type: "error"
                                        });
                                    }
                                },
                                beforeSend: function () {
                                },
                                complete: function () {

                                },
                                error:function(xhr,thrownError,err){
                                    $("#OrderCucian").attr("disabled",false);
                                    $("#errorcode").html(xhr.status);
                                    $("#err").html(err);
                                    $("#responseText").html(xhr.responseText);
                                    $("#ErrorModal").modal('show');
                                }
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
