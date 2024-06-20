<?php
session_start();
if(isset($_SESSION['username'])){
header('location:dashboard.php');
}else { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA  |  Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class ="bg-secondary">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4 m-auto mt-5 shadow p-3 bg-white">
    <form action="authentication.php" method="post">
                    <h3 class="text-center">Login System</h3>
                    <?php
                    if (isset($_SESSION['pesan'])){
                      ?>
                      <div class="alert alert-danger"><?= $_SESSION['pesan'];?></div>
                      <?php
                    }
                    ?>
                    <hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="text" class="form-control" name="username" placeholder="username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-key-fill"></i>
                        </span>
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <div class="text-center">
                    <small>Aplikasi Sistem Informasi Akuntansi |</small>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
session_destroy();
?>