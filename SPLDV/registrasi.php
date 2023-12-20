<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>
</head>
<body class="regislogin">
    <div id="content" class="p-4 p-md-5 pt-5 w-50 mx-auto">
        <div class="text-center">
            <h2 class="mb-5 mx-auto">Registrasi</h2>
        </div>
        <form action="proses_registrasi.php" method="post">
            <div class="form-group mb-3">
                <label for="exampleInputName"><h5>Nama</h5></label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter your name" name="nama" required>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputEmail"><h5>Email address</h5></label>
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword"><h5>Password</h5></label>
                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password" required>
            </div>
            <p>Sudah punya akun? <a href="index.php">Login</a></p>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</body>

<ignore>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:wght@500&family=Jost&display=swap" rel="stylesheet">
</ignore>
</html>

