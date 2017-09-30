<form id="simpan" action="#" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label>Email</label>
                {{csrf_field()}}
                <input type="text" placeholder="eugene@kopyov.com" value="{{$akun==null?'':$akun->email}}" class="form-control" required>
                <span class="help-block">name@domain.com</span>
            </div>

            <div class="col-sm-6">
                <label>Nomor Handphone</label>
                <input type="text" placeholder="08999999999" value="{{$akun==null?'':$akun->nomor_tlp}}" class="form-control" required>
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label>Password</label>
                <input type="password" class="form-control" required>
            </div>

            <div class="col-sm-6">
                <label>Tulis Ulang Password</label>
                <input type="password" class="form-control" required>
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

    });
</script>
