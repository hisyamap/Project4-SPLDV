<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $user = $_SESSION['nama'];

    // Tambahkan koneksi ke database dan query SQL
    include "koneksi.php";
    $query = "SELECT * FROM nilai WHERE user_name = '$email'";
    $result = $conn->query($query);

    // Tampilkan pesan selamat datang dan tabel jika query berhasil
echo '        <head>';
echo '        <title>Sistem Persamaan Linear Dua Variabel</title>';
echo '        </head>';

echo '        <body>';
echo '            <header>';
echo '                <div id="announce-text" class="text-white">';
echo '                    Matematika itu mudah';
echo '                </div>';
echo '                <nav class="navbar navbar-expand-sm" id="navbar">';
echo '                    <div class="container">';
echo '                        <div class="collapse navbar-collapse" id="collapsibleNavId">';
echo '                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">';
echo '                                <li class="nav-item">';
echo '                                    <a class="btn btn-primary me-2" href="index.php" aria-current="page">Home</a>';
echo '                                </li>';
echo '                                <li class="nav-item">';
echo '                                    <a class="btn btn-primary" href="apersepsi.php">Apersepsi</a>';
echo '                                </li>';
echo '                                <a class="navbar-brand" href="index.php"><h1 class="website-name">SPLDV</h1></a>';
echo '                            </ul>';
echo '                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">';
echo '                                <li class="nav-item dropdown">';
echo '                                    <a';
echo '                                        class="btn btn-primary me-2 dropdown-toggle"';
echo '                                        href="#"';
echo '                                        id="dropdownId"';
echo '                                        data-bs-toggle="dropdown"';
echo '                                        aria-haspopup="true"';
echo '                                        aria-expanded="false"';
echo '                                        >Materi</a';
echo '                                    >';
echo '                                    <div';
echo '                                        class="dropdown-menu"';
echo '                                        aria-labelledby="dropdownId"';
echo '                                    >';
echo '                                        <a class="dropdown-item" href="materi1.php"';
echo '                                            >Definisi, Bentuk, dan Karakteristik SPLDV</a';
echo '                                        >';
echo '                                        <a class="dropdown-item" href="materi2.php"';
echo '                                            >Metode - Metode SPLDV</a';
echo '                                        >';
echo '                                    </div>';
echo '                                </li>';
echo '                                <li class="nav-item me-auto">';
echo '                                    <a class="btn btn-primary " href="contohsoal.php" aria-current="page">Contoh Soal</a>';
echo '                                </li>';
echo '                            </ul>';
echo '                        </div>';
echo '                    </div>';
echo '                </nav>';
echo '            </header>';

echo '            <main>';
echo '                <div id="website-contents-1">';
echo '                    <div class="container greet-text">';
echo "                        <h4>Selamat Datang, $user</h4>";
echo '                        <h5>Silahkan memilih menu dibawah ini untuk melanjutkan</h5>';
echo '                    </div>';
echo '                </div>';
echo '                <div id="website-contents-2">';
echo '                    <div class="container menu-container">';
echo '                        <div class="card-group menu-card-group">';
echo '                            <div class="card mb-4 me-4 ms-4 menu-card">';
echo '                                <div class="menu-card-img">';
echo '                                    <i class="gg-cap"></i>';
echo '                                </div>';
echo '                                <div class="card-body">';
echo '                                    <a href="apersepsi.php" class="stretched-link menu-title">Apersepsi</a>';
echo '                                    <p class="card-text mt-2">Sebelum kita masuk ke materi, alangkah baiknya kita melakukan pemanasan terlebih dahulu dengan melihat pertanyaan berikut</p>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="card mb-4 me-4 menu-card">';
echo '                                <div class="menu-card-img">';
echo '                                    <i class="gg-file-document"></i>';
echo '                                </div>';
echo '                                <div class="card-body">';
echo '                                    <a href="materi1.php" class="stretched-link menu-title">Materi : Definisi, Bentuk Umum, dan Karakteristik SPLDV</a>';
echo '                                    <p class="card-text mt-2">Setelah melakukan pemanasan, kita akan mempelajari materi tentang Sistem Persamaan Linear Dua Variabel (SPLDV)</p>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="card mb-4 me-4 menu-card">';
echo '                                <div class="menu-card-img">';
echo '                                    <i class="gg-file-remove"></i>';
echo '                                </div>';
echo '                                <div class="card-body">';
echo '                                    <a href="materi2.php" class="stretched-link menu-title">Materi : Metode - Metode SPLDV</a>';
echo '                                    <p class="card-text mt-2">Kamu sudah mengetahui definisi dari SPLDV belum? Jika sudah, maka kita akan lanjut mempelajari metode-metode dalam penyelesaian SPLDV</p>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="card mb-4 me-4 menu-card">';
echo '                                <div class="menu-card-img">';
echo '                                    <i class="gg-math-divide"></i>';
echo '                                </div>';
echo '                                <div class="card-body">';
echo '                                    <a href="contohsoal.php" class="stretched-link menu-title">Contoh Soal</a>';
echo '                                    <p class="card-text mt-2">Apakah sudah paham materinya? Untuk mengasah pengetahuan kamu terhadap materi SPLDV, maka kita akan mempelajari contoh soal dari permasalahan SPLDV berikut</p>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';

echo '                        <div class="card-group menu-card-group">';
echo '                            <div class="card mb-4 me-4 ms-4 menu-card">';
echo '                                <div class="menu-card-img">';
echo '                                    <i class="gg-math-percent"></i>';
echo '                                </div>';
echo '                                <div class="card-body">';
echo '                                    <a href="latihansoal.php" class="stretched-link menu-title">Latihan Soal</a>';
echo '                                    <p class="card-text mt-2">Selanjutnya ada beberapa latihan soal tentang permasalahan SPLDV yang dapat kamu kerjakan, kerjakan dengan benar ya!</p>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="card mb-4 me-4 menu-card">';
echo '                                <div class="menu-card-img">';
echo '                                    <i class="gg-math-equal"></i>';
echo '                                </div>';
echo '                                <div class="card-body">';
echo '                                    <a href="kuis.php" class="stretched-link menu-title">Kuis</a>';
echo '                                    <p class="card-text mt-2">Nah setelah kamu mengerjakan latihan soal, kamu dapat mengerjakan kuis ini sebagai tambahan pemahaman terhadap materi SPLDV yang sudah kamu pelajari</p>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="card mb-4 me-4 menu-card">';
echo '                                <div class="menu-card-img">';
echo '                                    <i class="gg-album"></i>';
echo '                                </div>';
echo '                                <div class="card-body">';
echo '                                    <a href="sumberbelajar.php" class="stretched-link menu-title">Sumber Belajar</a>';
echo '                                    <p class="card-text mt-2">Ini adalah berbagai sumber pelajaran yang dapat menunjang kamu dalam mempelajari materi SPLDV</p>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="card mb-4 me-4 menu-card">';
echo '                                <div class="menu-card-img">';
echo '                                    <i class="gg-user-list"></i>';
echo '                                </div>';
echo '                                <div class="card-body">';
echo '                                    <a href="tentangkami.php" class="stretched-link menu-title">Tentang Kami</a>';
echo '                                    <p class="card-text mt-2">Untuk mengenal lebih lanjut tentang seluk beluk kami, silahkan klik menu ini</p>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
echo '                    </div>';
echo '                </div>';
echo '            </main>';

echo '            <footer>';
echo '                <div id="website-footer">';
echo '                    <div class="container">';
echo '                        <div class="footer-text">';
echo '                            <h4>Blog - Blog Terkait</h4>';
echo '                        </div>';
echo '                        <div class="card-group footer-card-group">';
echo '                            <div class="card mb-4 me-5">';
echo '                                <div class="row g-0">';
echo '                                    <div class="col-md-3">';
echo '                                        <img';
echo '                                            class="card-img blog-image"';
echo '                                            src="https://phet.colorado.edu/images/phet-logo-trademarked.png"';
echo '                                            alt="Phet Colorado"';
echo '                                        />';
echo '                                    </div>';
echo '                                    <div class="card-body col-md-4 blog-title">';
echo '                                        <a href="https://phet.colorado.edu/in/simulations/equality-explorer-two-variables" target="_blank" class="stretched-link">Equality Explorer: Two Variables</a>';
echo '                                    </div>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="card mb-4">';
echo '                                <div class="row g-0">';
echo '                                    <div class="col-md-3">';
echo '                                        <img';
echo '                                            class="card-img blog-image"';
echo '                                            src="image/GeoGebra-logo.png"';
echo '                                            alt="GeoGebra"';
echo '                                        />';
echo '                                    </div>';
echo '                                    <div class="card-body col-md-4 blog-title">';
echo '                                        <a href="https://www.geogebra.org/graphing?lang=en" target="_blank" class="stretched-link">Graphing Calculator</a>';
echo '                                    </div>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
echo '                        <div class="card-group footer-card-group">';
echo '                            <div class="card me-5">';
echo '                                <div class="row g-0">';
echo '                                    <div class="col-md-3">';
echo '                                        <img';
echo '                                            class="card-img blog-image"';
echo '                                            src="image/Mathigon-logo.png"';
echo '                                            alt="Mathigon"';
echo '                                        />';
echo '                                    </div>';
echo '                                    <div class="card-body col-md-4 blog-title">';
echo '                                        <a href="https://mathigon.org/task/simultaneous-equations" target="_blank" class="stretched-link">Simultaneous Equations</a>';
echo '                                    </div>';
echo '                                </div>';
echo '                            </div>';
echo '                            <div class="card">';
echo '                                <div class="row g-0">';
echo '                                    <div class="col-md-3">';
echo '                                        <img';
echo '                                            class="card-img blog-image"';
echo '                                            src="https://www.wolframalpha.com/_next/static/images/wolfram-alpha-logo_6XLh1tbc.svg"';
echo '                                            alt="WolframAlpha"';
echo '                                        />';
echo '                                    </div>';
echo '                                    <div class="card-body col-md-4 blog-title">';
echo '                                        <a href=" https://www.wolframalpha.com/examples/mathematics/algebra/equation-solving" target="_blank" class="stretched-link">Equation Solving</a>';
echo '                                    </div>';
echo '                                </div>';
echo '                            </div>';
echo '                        </div>';
echo '                    <div class="pt-5 pb-3 d-flex justify-content-evenly">';
echo '                        <a href="logout.php" rel="noopener noreferrer">';
echo '                            <button class="button-logout" type="button">';
echo '                            Logout';
echo '                        </button></a>';
echo '                    </div>';
echo '                    </div>';
echo '                </div>';
echo '            </footer>';
echo '        </body>';

// Tutup koneksi ke database
    $conn->close();
} else {
    // Jika belum login, tampilkan form login
    echo "
<!doctype html>
<html lang='en'>
  <head>
  	<title>Sistem Persamaan Linear Dua Variabel</title>
  </head>
  <body class='regislogin'>
  <div id='content' class='p-4 p-md-5 pt-5 w-50 mx-auto'>
  <div class='text-center'>
    <h2 class='mb-5 mx-auto'>Login</h2>
  </div>
    <form action='login.php' method='post'>
        <div class='form-group mb-3'>
            <label for='exampleInputEmail1'><h5>Email address</h5></label>
            <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email' name='email'>
        </div>
        <div class='form-group mb-3'>
            <label for='exampleInputPassword1'><h5>Password</h5></label>
            <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password' name='password'>
        </div>
        <p>Belum punya akun? <a href='registrasi.php'>Daftar</a></p>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
    </div>
    </body></html>
    ";
}
?>

<ignore>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menu-logo.css">
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