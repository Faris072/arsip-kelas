<div class="paths p-3 bg-light">
    <a href="#" class="path" data-url="/home" onclick="klikhome();">Home</a> / <a href="#" class="path" data-url="/angkatan">Angkatan</a> / <a href="#" class="path" data-url="/ruangkelas">Ruang Kelas</a>
</div>
<br>
<span style="display: none;" id="linkCSS"><?php echo $css ?></span>
<div class="ruangkelas">
    <div class="settingkelas">
        <div class="items d-flex">
            @for ($i=0;$i<10;$i++)
            <div class="item m-3">
                <div class="image">
                    <img src="storage/default/konten.jpg" alt="" style="width:100%">
                </div>
                <div class="ket pt-3">
                    <center><p>Diam</p></center>
                </div>
            </div>
            @endfor
        </div>
        <div class="navslide">
            <center>
                <form>
                    <input type="radio" name="radio" checked="checked">
                    <input type="radio" name="radio">
                    <input type="radio" name="radio">
                </form>
            </center>
        </div>
    </div>
    <div class="kelas">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- js --}}
<script src="js/ruangkelas.js"></script>
