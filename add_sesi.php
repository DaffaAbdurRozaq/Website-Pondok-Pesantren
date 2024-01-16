<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">

    <!-- Fontawesome -->

    <title>Tambah Sesi Pelajaran</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN |  <b>PONDOK PESANTREN</b></a>
    <form class="form-inline my-2 my-lg-0 ml-auto">

    </form>

    <div class="icon ml-4">
        <h5>
            <i class="fa-solid fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
            <i class="fa-solid fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
            <i id="sign-out-icon" class="fa-solid fa-right-from-bracket mr-3" data-toggle="tooltip" title="Sign Out"></i>
        </h5>
    </div>
</nav>

<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
            <!-- ... Other menu items ... -->
        </ul>
    </div>
    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fa-solid fa-clock mr-2"></i> TAMBAH SESI PELAJARAN</h3><hr>

        <form action="insert_sesi.php" method="post">
            <!-- Your form fields for adding a new session -->
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="jam_pelajaran">Jam Pelajaran:</label>
                <input type="time" class="form-control" id="jam_pelajaran" name="jam_pelajaran" required>
            </div>
            <div class="form-group">
                <label for="ruang_kelas">Ruang Kelas:</label>
                <input type="text" class="form-control" id="ruang_kelas" name="ruang_kelas" required>
            </div>
            <div class="form-group">
                <label for="mata_pelajaran_id_mapel">ID Mapel:</label>
                <input type="text" class="form-control" id="mata_pelajaran_id_mapel" name="mata_pelajaran_id_mapel" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Sesi</button>
        </form>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/235c85459f.js" crossorigin="anonymous"></script>
<script src="admin.js"></script>

</body>
</html>
