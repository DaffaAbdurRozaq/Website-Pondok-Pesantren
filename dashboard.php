<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">

    <!-- Fontawesome -->
    

    <title>Hello, world!</title>
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
        </div>
      </nav>

      <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" href="dashboard.php"><i class="fa-solid fa-gauge mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="santri.php"><i class="fa-solid fa-users mr-2"></i> Daftar Santri</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="guru.php"><i class="fa-solid fa-chalkboard-user mr-2"></i> Daftar Guru</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="mata.php"><i class="fa-solid fa-book mr-2"></i> Mata Pelajaran</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="sesi.php"><i class="fa-solid fa-clock mr-2"></i> Sesi Pelajaran</a><hr class="bg-secondary">
                </li>
              </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fa-solid fa-gauge mr-2"></i> DASHBOARD</h3><hr>

            <div class="row text-white">
                <div class="card bg-info ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-users mr-2"></i>
                        </div>
                      <h5 class="card-title">Jumlah Santri</h5>
                      <div class="display-4">100</div>
                      
                    </div>
                  </div>
            </div>

            <div class="row text-white mt-2">
                <div class="card bg-success ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-chalkboard-user mr-2"></i>
                        </div>
                      <h5 class="card-title">Jumlah Guru</h5>
                      <div class="display-4">6</div>
                      
                    </div>
                  </div>
            </div>

            <div class="row text-white mt-2">
                <div class="card bg-danger ml-3" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-book mr-2"></i>
                        </div>
                      <h5 class="card-title">Jumlah Pelajaran</h5>
                      <div class="display-4">9</div>
                  
                    </div>
                </div>
            </div>

        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/235c85459f.js" crossorigin="anonymous"></script>
    <script src="admin.js"></script>

    <script>
        document.getElementById('sign-out-icon').addEventListener('click', function() {
                   // Redirect ke halaman logout.php saat ikon diklik
        window.location.href = 'logout.php';
});
</script>

  </body>
</html>