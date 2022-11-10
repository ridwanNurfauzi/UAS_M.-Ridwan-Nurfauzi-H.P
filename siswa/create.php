<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Membuat data Siswa</title>
    <style>
        .load-panel {
            animation: anim .8s;
            visibility: hidden;
        }

        .loading {
            width: 5.5em;
            height: 5.5em;
        }

        @keyframes anim {
            0% {
                visibility: visible;
                opacity: 1;
            }

            60% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
    </style>
    
</head>

<body>

    <!-- Loading panel -->
    <div class="bg-light position-fixed fixed-top w-100 h-100 d-flex justify-item-center justify-content-center load-panel">
        <div class="spinner-border text-primary align-self-center justify-self-center h4 loading" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- /Loading panel -->
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <center>
        <h2>Siswa</h2>
    </center>
    <!-- CARDs -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                Tambah Siswa
            </div>
            <div class="card-body">

                <form action="../siswa/proses.php" method="post">
                    <input type="hidden" name="aksi" value="create">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="exampleInputEmail1">NIS</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="nis">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="exampleInputEmail1">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="exampleInputEmail1">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="jenis_kelamin" id="lk" value="Laki-laki">
                                <label class="custom-control-label" for="lk">Laki-laki</label> 
                            </div>
                            <div class="custom-control custom-radio">
                                <input  class="custom-control-input" type="radio" name="jenis_kelamin" id="pr" value="Perempuan">
                                <label  class="custom-control-label" for="pr">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="exampleInputEmail1">Alamat</label>
                        <div class="col-sm-8">
                            <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="exampleInputEmail1">Jurusan</label>
                        <div class="col-sm-8">
                            <select name="jurusan" id="jurusan" class="form-control" required>
                                <option hidden>--Pilih Jurusan--</option>
                                <option value="RPL">RPL</option>
                                <option value="TKRO">TKRO</option>
                                <option value="TBSM">TBSM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="exampleInputEmail1">Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kelas">
                        </div>
                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>