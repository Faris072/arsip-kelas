<br>
<span style="display: none;" id="linkCSS"><?php echo $css; ?></span>
<div class="head d-flex">
    <button class="btn btn-default px-3 py-2" data-url='/profil/edit' id="close-editprofil"><i class="fas fa-times"></i></button>
    <h5 class="mt-3 ml-3"><b>Ubah Password</b></h5>
</div>
<br>
<br>

<div class="container">
    <label for="pass">Masukkan Password Lama: <span style="color:red">*</span></b></label>
    <form class="form-inline" action="/profil/formupdate/password" method="post" id="form-edit-password">
        @csrf
        <input type="password" name="password" id="pass" style="width:50%;" class="form-control mr-4">
        <input type="submit" class="btn btn-info" value="Submit">
    </form>
    <small style="color:red;">{{ session()->get('masuk_editpassword') }}</small>
</div>

<script src="js/editpassword.js"></script>
