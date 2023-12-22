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
                    <h3>LATIHAN SOAL</h3>
                </div>
            </div>
        </div>
        <div id="website-contents-2">
            <div class="container">
                <div class="pemantik">
                    <p>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 1</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Dengan metode eliminasi, tentukan himpunan penyelesaian dari sistem persamaan 2x - 5y = 2 dan x + 5y = 6!</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 2</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Gina membeli 5 buah snack dan 3 buah minuman seharga Rp 10.500. Sedangkan Anita membeli 6 buah snack dan 2 buah minuman seharga Rp 13.000. Jika Anggi ingin membeli 3 buah snack dan 2 buah minuman, maka berapa total belanjaan Anggi? Gunakan metode eliminasi!</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 3</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Dimas mempunyai uang sebesar Rp 21.000. Uang tersebut akan dihabiskan untuk membeli 10 buah peralatan sekolah. Ia membeli buku dengan harga Rp 3.000/buku dan pensil dengan harga 1.500/persil. Berapa banyak buku dan banyak pensil yang dibeli Dimas?</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 4</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Dengan metode substitusi, tentukan himpunan penyelesaian dari sistem persamaan <img src="https://latex.codecogs.com/svg.image?\frac{1}{3}x-y=4" title="\frac{1}{3}x-y=4" /> dan <img src="https://latex.codecogs.com/svg.image?-x&plus;\frac{1}{2}y=-7" title="-x+\frac{1}{2}y=-7" />!</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 5</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Atun membeli 1 piring biru dan 3 piring merah seharga Rp 20.000. Ulza membeli 7 piring biru dan 2 piring merah dengan harga Rp 45.000. Berapa harga satuan untuk masing-masing pita?</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 6</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Ayah menghabiskan uang sebesar Rp 205.000 untuk membeli 2 jenis buah dengan berat keseluruhan 7 kg. Jika harga 1 kg buah apel adalah Rp 40.000 dan harga 1 kg buah jeruk adalah 25.000, maka berapa kg buah jeruk yang dibeli ayah?</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 7</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Nilai p yang memenuhi persamaan 4p + 3q = 20 dan 2p - q = 3 adalah ...</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 8</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Nilai x dan y berturut-turut yang memenuhi persamaan x + 5y = 13 dan 2x - y = 4 adalah…</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2 mb-3">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 9</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Himpunan penyelesaian dari sistem persamaan 2x + 2y = 4 dan 3x + y = 6 adalah ...</p></li>
                            </ul>
                        </div>
                        <div class="card border-black border-2">
                            <div class="card-body card-sumber">
                                <h4 class="text-white mb-0">No. 10</h4>
                            </div>
                            <ul class="list-group list-group-flush card-sumber">
                                <li class="list-group-item pt-4"><p>Harga 8 buku tulis dan 6 pensil yaitu Rp.14.400,00 dan harga 6 buku tulis dan 5 pensil yaitu Rp. 11.200,00. Berapa harga 5 buku tulis dan 8 pensil …</p></li>
                            </ul>
                        </div>
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