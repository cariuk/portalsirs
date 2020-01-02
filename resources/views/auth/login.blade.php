@extends('auth.index')
@section('content')
    <form id="formlogin" method="post" autocomplete="off">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel" >
                <div class="panel-body">
                    <div class="content-divider text-muted form-group"><span>Silahkan Masuk</span></div>
                    <div class="form-group has-feedback has-feedback-left">
                        {{csrf_field()}}
                        <input name="username" type="text" autocomplete="off" autocorrect="off" autocapitalize="off" class="form-control" placeholder="Nama Pengguna" required="required">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group has-feedback has-feedback-left">
                        <input name="password" type="password" class="form-control" placeholder="Kata Sandi" required="required">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>
                    <div class="form-group">
                         <button type="submit" class="btn btn-primary pull-right">Masuk <i class="icon-circle-right2 position-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /simple login form -->
    <script>
        $(document).ready(function(){
            $("#formlogin").validate({
                ignore: 'input[type=hidden], .select2-input', // ignore hidden fields
                focusInvalid: false,
                highlight: function(element) {
                    $(element).closest('.form-group>div').addClass('has-error');
                },
                unhighlight: function(element) {
                    $(element).closest('.form-group>div').removeClass('has-error');
                },
                //# Popover Error
                showErrors: function(errorMap, errorList) {
                    $.each(this.successList, function(index, value) {
                        $(value).parent().removeClass('has-error');
                        $(value).popover('hide');
                    });
                    $.each(errorList, function(index, value) {
                        $(value.element).parent().addClass('has-error');
                        $(value.element).popover('show');
                    });
                },
                validClass: "validation-valid-label",
                success: function(label) {
                    label.addClass("validation-valid-label").text("Success.")
                },
                submitHandler: function() {
                    $.ajax({
                        url		: "{{url('login')}}",
                        data	: $("#formlogin").serialize(),
                        type	:"POST",
                        dataType: "json",
                        success	: function(response){
                            if (response.status==200){
                                $.each(response.callback.action,function(index, val) {
                                    eval(val);
                                });
                            }
                        },
                        beforeSend: function () {
                            generalSpinner($("body"),true);
                        },
                        complete: function (xhr) {
                            generalSpinner($("body"),false);
                        },
                        error:function(xhr,thrownError,err){
                            generalSpinner($("body"),false);
                            generalNotify('', xhr.responseJSON.message, 'danger');
                        }
                    });
                }
            });
        });
    </script>
@endsection
