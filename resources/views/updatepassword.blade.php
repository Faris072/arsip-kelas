@if (!session()->get('ubah_password'))
<script>window.location = "/profil/edit";</script>//untuk cek apakah lewat halaman ini atau tidak ?>
@endif
<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
<div class="head d-flex">
    <button class="btn btn-default px-3 py-2" data-url='/profil/edit' id="close-editprofil"><i class="fas fa-times"></i></button>
    <h5 class="mt-3 ml-3"><b>Update Password</b></h5>
</div>
<br>
<br>

<div class="container">
    <form action="" id="form-edit-password">
        @csrf
        <label for="pass">Masukkan Password Baru: <span style="color:red">*</span></b></label>
        <input type="password" name="password" id="pass" class="form-control">
        <small class="text-muted">Password minimal 8 karakter</small>
        <br>
        <br>
        <label for="pass2">Konfirmasi Password Baru: <span style="color:red">*</span></b></label>
        <input type="password" name="password2" id="pass2" class="form-control">
        <small class="text-muted">Password minimal 8 karakter</small>
        <br>
        <br>
        <input type="submit" class="btn btn-info form-control" value="Submit">
    </form>
</div>

<script src="js/updatepassword.js"></script>
