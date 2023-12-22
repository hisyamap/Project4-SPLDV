<?php
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>

<head>
    <title>Sistem Persamaan Linear Dua Variabel</title>
</head>

<body>
    <header>
        <div id="announce-text" class="text-white">
            Matematika itu mudah
        </div>
        <nav class="navbar navbar-expand-sm" id="navbar">
            <div class="container">
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="btn btn-primary me-2" href="index.php" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="apersepsi.php">Apersepsi</a>
                        </li>
                    </ul>
                        <a class="navbar-brand" href="index.php"><h1 class="website-name">SPLDV</h1></a>
                        <a class="navbar-brand-desc" href="index.php"><h5 class="website-name-desc">Sistem Persamaan Linear Dua Variabel</h5></a>
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a
                                class="btn btn-primary me-2 dropdown-toggle"
                                href="#"
                                id="dropdownId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Materi</a
                            >
                            <div
                                class="dropdown-menu"
                                aria-labelledby="dropdownId"
                            >
                                <a class="dropdown-item" href="materi1.php"
                                    >Definisi, Bentuk, dan Karakteristik SPLDV</a
                                >
                                <a class="dropdown-item" href="materi2.php"
                                    >Metode - Metode SPLDV</a
                                >
                            </div>
                        </li>
                        <li class="nav-item me-auto">
                            <a class="btn btn-primary " href="contohsoal.php" aria-current="page">Contoh Soal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="website-contents-1">
            <div class="container">
                <div class="pemantik">
                    <h3>CONTOH SOAL</h3>
                </div>
            </div>
        </div>
        <div id="website-contents-2">
            <div class="container">
                <div class="pemantik">
                    <p>
                        <ol>
                            <li class="mb-2">Dengan metode eliminasi, tentukanlah himpunan penyelesaian sistem persamaan 2x + 3y = 6 dan x - y = 3</li>
                        <p>
                            <button
                                class="btn btn-primary"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#soal1"
                                aria-expanded="false"
                                aria-controls="soal1"
                            >
                                Lihat Pembahasan :
                            </button>
                        </p>
                        <div class="collapse " id="soal1">
                            <div class="card card-body bahas-card">
                                <p>
                                    <b>Langkah 1 : Eliminasi variabel y</b><br>
                                    Untuk mengeliminasi variabel y, koefisien y harus sama, sehingga persamaan 2x + 3y = 6 dikalikan 1 dan persamaan x - y = 3 dikalikan tiga. Jadi:<br>
                                    2x + 3y = 6 | x 1| =>  2x + 3y = 6 … (persamaan 1)<br>
                                    x - y = 3 | x 3 | => 3x - 3y = 9 … (persamaan 2)<br>
                                    Kemudian jumlahkan persamaan 1 dan 2 sehingga menjadi :<br>
                                    5x = 15<br>
                                    x = 15/5<br>
                                    x = 3<br> 
                                    <b>Langkah 2 : Eliminasi variabel x</b><br>
                                    Seperti pada langkah 1, untuk mengeliminasi variabel x, koefisien x harus sama, sehingga persamaan 2x + 3y = 6 dikalikan 1 dan persamaan x - y = 3 dikalikan 2. Jadi:<br>
                                    2x + 3y = 6 | x 1| ->  2x + 3y = 6 … (1)<br>
                                    x - y = 3 | x 2 |     ->  2x - 2y = 6 … (2)<br>
                                    ______________________________+<br>
                                    5y = 0 <br>
                                    y = 0/5 <br>
                                    y = 0 <br>
                                    Maka, himpunan penyelesaiannya adalah {(3,0)}
                                </p>
                            </div>
                        </div>
                        <li class="soal">Diketahui harga 5 kg apel dan 3 kg jeruk adalah Rp79.000,00 sedangkan harga 3 kg apel dan 2 kg jeruk adalah Rp49.000,00. Maka, harga 1 kg apel adalah …</li>
                        <p>
                            <button
                                class="btn btn-primary"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#soal2"
                                aria-expanded="false"
                                aria-controls="soal2"
                            >
                                Lihat Pembahasan :
                            </button>
                        </p>
                        <div class="collapse" id="soal2">
                            <div class="card card-body bahas-card">
                                <p>
                                    <b>Langkah 1: Membuat model matematika dari permasalahan</b><br>
                                    Misalkan:<br>
                                    Harga 1 kg apel = x<br>
                                    Harga 1 kg jeruk = y<br>
                                    Model matematika:<br>
                                    5x + 3y = 79.000 … (1)<br>
                                    3x + 2y = 49.000 … (2)<br>
                                    Ditanyakan: harga 1 kg apel (x) = … ?<br>
                                    <b>Langkah 2: Eliminasi persamaan (1) dan (2) </b><br>
                                    Karena yang ditanyakan adalah x, maka yang harus dieliminasi adalah variabel y. Sehingga, variabel y pada persamaan (1) dan (2) harus sama nilainya.<br> 
                                    5x + 3y = 79.000 | x 2 | -> 10x + 6y = 158.000 … (1)<br>
                                    3x + 2y = 49.000 | x 3 | ->   9x + 6y = 147.000 … (2)<br>
                                    ________________________________________-<br>
                                    x = 11.000<br>
                                    Diperoleh x = 11.000, maka harga 1 kg apel adalah Rp11.000,00
                                </p>
                            </div>
                        </div>
                        <li class="soal">Dengan metode substitusi, tentukan tentukanlah himpunan penyelesaian sistem persamaan 5x + 2y = -4 dan x - 3y = 6</li>
                        <p>
                            <button
                                class="btn btn-primary"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#soal3"
                                aria-expanded="false"
                                aria-controls="soal3"
                            >
                                Lihat Pembahasan :
                            </button>
                        </p>
                        <div class="collapse" id="soal3">
                            <div class="card card-body bahas-card">
                                <p>
                                    <b>Langkah 1 : Substitusi variabel x</b><br>
                                        Untuk mensubstitusi variabel x, terlebih dahulu kita menyatakan variabel x dalam variabel y. Pilih salah satu dari 2 persamaan tersebut.<br> 
                                        Misal kita pilih persamaan (1) maka<br>
                                        <img src="https://latex.codecogs.com/svg.image?&space;5x&plus;2y=-4&space;" title=" 5x+2y=-4 " /><br>
                                        <img src="https://latex.codecogs.com/svg.image?&space;5x=-2y-4&space;" title=" 5x=-2y-4 " /><br>
                                        <img src="https://latex.codecogs.com/svg.image?x=\frac{-2y-4}{5}" title="x=\frac{-2y-4}{5}" /><br>
                                        Kemudian kita substitusi nilai variabel x pada persamaan (2)<br>
                                        <img src="https://latex.codecogs.com/svg.image?x-3y=6" title="x-3y=6" /><br>
                                        <img src="https://latex.codecogs.com/svg.image?\frac{-2y-4}{5}-3y=6" title="\frac{-2y-4}{5}-3y=6" /><br>
                                        <img src="https://latex.codecogs.com/svg.image?-2y-4-15y=30" title="-2y-4-15y=30" /><br>
                                        <img src="https://latex.codecogs.com/svg.image?-17y=34" title="-17y=34" /><br>
                                        <img src="https://latex.codecogs.com/svg.image?y=-2" title="y=-2" /> ... (persamaan 3)<br>
                                        <b>Langkah 2 : Substitusi variabel y</b><br>
                                        Untuk mensubstitusi variabel y, kita dapat menggunakan hasil dari langkah 1 (persamaan 3) yaitu . Pilih salah satu 2 persamaan tersebut.<br>
                                        Misalkan kita pilih persamaan (2)<br>
                                        x - 3y = 6 <br>
                                        x - 3(-2) = 6 <br>
                                        x + 6 = 6 <br>
                                        x = 0<br>
                                        <b>Maka, himpunan penyelesaiannya adalah {(0,-2)}</b>
                                </p>
                            </div>
                        </div>
                        <li class="soal">Ali mempunyai uang sebesar Rp 17.000. Uang tersebut akan dihabiskan untuk membeli 7 buah peralatan sekolah. Ia membeli penggaris dengan harga Rp 3.000/penggaris dan pulpen dengan harga 2.000/pulpen. Berapa banyak penggaris dan banyak pulpen yang dibeli Dimas?</li>
                        <p>
                            <button
                                class="btn btn-primary"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#soal4"
                                aria-expanded="false"
                                aria-controls="soal4"
                            >
                                Lihat Pembahasan :
                            </button>
                        </p>
                        <div class="collapse" id="soal4">
                            <div class="card card-body bahas-card">
                                <p>
                                    <b>Langkah 1: Membuat model matematika dari permasalahan</b><br>
                                        Misalkan:<br>
                                        Banyaknya penggaris = x<br>
                                        Banyaknya pulpen = y<br>
                                        Model matematika:<br>
                                        x + y = 7<br>
                                        3000x + 2000y = 17.000<br>
                                        Ditanyakan:<br>
                                        Banyaknya penggaris (x) dan banyaknya pulpen (y) ?<br>
                                    <b>Langkah 2 : Substitusi variabel x</b><br>
                                        Untuk mensubstitusi variabel x, terlebih dahulu kita menyatakan variabel x dalam variabel y. Pilih salah satu dari 2 persamaan tersebut. <br>
                                        x + y = 7 ... (1)<br>
                                        3000x + 2000y = 17.000 ... (2)<br>
                                        Misal kita pilih persamaan (1) maka<br>
                                        x + y = 7<br>
                                        x = -y + 7<br>
                                        Kemudian kita substitusi nilai variabel x pada persamaan (2)<br>
                                        3000x + 2000y = 17.000<br>
                                        3000(-y + 7) + 2000y = 17.000<br>
                                        -3000y + 21000 + 2000y = 17.000<br>
                                        -1000y = -4.000<br>
                                        y = 4 ... (3)<br>
                                    <b>Langkah 3 : Substitusi variabel y</b><br>
                                        Untuk mensubstitusi variabel y, kita dapat menggunakan hasil dari langkah 1 (persamaan 3) yaitu . Pilih salah satu 2 persamaan tersebut.<br>
                                        Misalkan kita pilih persamaan (1)<br>
                                        x + y = 7<br>
                                        x + 4 = 7<br>
                                        x = 3<br>
                                        Diperoleh x = 3 dan y = 4 maka banyaknya penggaris adalah 3 buah dan banyaknya pulpen adalah 4 buah
                                </p>
                            </div>
                        </div>
                        <li class="soal">Carilah nilai x dan y dari sistem persamaan berikut dengan menggunakan metode gabungan: <br>
                            x + 2y = 4<br>
                            x + y = 3</li>
                        <p>
                            <button
                                class="btn btn-primary"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#soal5"
                                aria-expanded="false"
                                aria-controls="soal5"
                            >
                                Lihat Pembahasan :
                            </button>
                        </p>
                        <div class="collapse" id="soal5">
                            <div class="card card-body bahas-card">
                                <p>
                                    <b>1. Tahap eliminasi yang akan mengeliminasi x</b><br>
                                        x + 2y = 4 <br>
                                        x + y = 3  <br>
                                        ---------------- - <br>
                                        y = 1 <br>
                                        <b>2. Tahap subtitusi yang akan mensubtitusikan y kedalam salah satu persamaan, yaitu</b><br> 
                                        Dengan mensubstitusikan y = 1 ke persamaan 2, maka diperoleh <br>
                                        x + 1 = 3 <br>
                                        x = 3 – 1 = 2 <br>
                                        <b>Sehingga, diperoleh nilai x = 2 dan nilai y = 1 </b>
                                </p>
                            </div>
                        </div>
                        <li class="soal">Umur Sifa 7 tahun lebih tua dari umur Nira. Jumlah umur mereka adalah 43 tahun, berapa umur Sifa dan Nira?</li>
                        <p>
                            <button
                                class="btn btn-primary"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#soal6"
                                aria-expanded="false"
                                aria-controls="soal6"
                            >
                                Lihat Pembahasan :
                            </button>
                        </p>
                        <div class="collapse" id="soal6">
                            <div class="card card-body bahas-card">
                                <p>
                                    Misalkan:<br>
                                    Umur Sifa = x tahun<br>
                                    Umur Nira = y tahun<br>
                                    Sehingga, diperoleh sistem persamaan:<br>
                                    x = 7 + y <=> x - y = 7...(i)<br>
                                    x + y = 43...(ii)<br>
                                    Dengan menggunakan metode gabungan diperoleh :<br> 
                                    <b>1. Tahap eliminasi yang akan mengeliminasi x</b><br>
                                    x - y = 7<br>
                                    x + y = 43<br>
                                    ------------ -<br>
                                    -2y = -36<br>
                                    y = 18<br>
                                    <b>2. Tahap subtitusi yang akan mensubtitusikan y kedalam salah satu persamaan, yaitu</b><br>
                                    Dengan mensubstitusikan y = 18 ke persamaan 2, maka diperoleh<br>
                                    x + y = 43<br>
                                    x = 43 - y = 43 - 18 = 25<br>
                                    Sehingga, diperoleh nilai x = 25 dan nilai y  = 18 <br>
                                    Jadi, umur Sifa 25 tahun dan umur Nira 18 tahun 
                                </p>
                            </div>
                        </div>
                        </ol>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="website-footer">
            <div class="container">
                <div class="footer-text">
                    <h4>Blog - Blog Terkait</h4>
                </div>
                <div class="card-group footer-card-group">
                    <div class="card mb-4 me-5">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img
                                    class="card-img blog-image"
                                    src="https://phet.colorado.edu/images/phet-logo-trademarked.png"
                                    alt="Phet Colorado"
                                />
                            </div>
                            <div class="card-body col-md-4 blog-title">
                                <a href="https://phet.colorado.edu/in/simulations/equality-explorer-two-variables" target="_blank" class="stretched-link">Equality Explorer: Two Variables</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img
                                    class="card-img blog-image"
                                    src="image/GeoGebra-logo.png"
                                    alt="GeoGebra"
                                />
                            </div>
                            <div class="card-body col-md-4 blog-title">
                                <a href="https://www.geogebra.org/graphing?lang=en" target="_blank" class="stretched-link">Graphing Calculator</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-group footer-card-group">
                    <div class="card me-5">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img
                                    class="card-img blog-image"
                                    src="image/Mathigon-logo.png"
                                    alt="Mathigon"
                                />
                            </div>
                            <div class="card-body col-md-4 blog-title">
                                <a href="https://mathigon.org/task/simultaneous-equations" target="_blank" class="stretched-link">Simultaneous Equations</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img
                                    class="card-img blog-image"
                                    src="https://www.wolframalpha.com/_next/static/images/wolfram-alpha-logo_6XLh1tbc.svg"
                                    alt="WolframAlpha"
                                />
                            </div>
                            <div class="card-body col-md-4 blog-title">
                                <a href=" https://www.wolframalpha.com/examples/mathematics/algebra/equation-solving" target="_blank" class="stretched-link">Equation Solving</a>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="pt-5 pb-3 d-flex justify-content-evenly">
                <a href="logout.php" rel="noopener noreferrer">
                    <button class="button-logout" type="button">
                    Logout
                    </button></a>
                </div>
            </div>
        </div>
    </footer>
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