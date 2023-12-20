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
                        <a class="navbar-brand" href="index.php"><h1 class="website-name">SPLDV</h1></a>
                    </ul>
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
                    <h4>Metode Eliminasi</h4>
                    <p>Metode eliminasi adalah metode penyelesaian yang bertujuan untuk mengeliminasi/menghilangkan salah satu variabel, sehingga nilai variabel lainnya bisa diketahui.</p>
                    <span>Langkah- langkah Metode Eliminasi :</span>
                    <ol>
                        <li>Samakan salah satu koefisien dari variabel x atau y dari kedua persamaan dengan cara mengalikan konstanta yang sesuai.</li>
                        <li>Hilangkan variabel yang memiliki koefisien yang sama dengan cara menambahkan atau mengurangkan kedua persamaan.</li>
                        <li>Ulangi kedua langkah untuk mendapatkan variabel yang belum diketahui.</li>
                        <li>Lakukan hingga mendapatkan penyelesaian dari nilai x dan y.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div id="website-contents-2">
            <div class="container">
                <div class="pemantik">
                    <h4>Metode Substitusi</h4>
                    <p>Metode substitusi adalah metode penyelesaian dengan mengganti variabel dengan variabel lainnya pada suatu persamaan.</p>
                    <span>Langkah- langkah Metode Substitusi :</span>
                    <ol>
                        <li>Menyatakan salah satu variabel dengan variabel lainnya untuk menyamakan variabel dengan variabel lain.</li>
                        <li>Mensubstitusi persamaan yang telah dibuat (pada langkah 1) pada persamaan lainnya, sehingga mendapatkan nilai variabel yang dicari.</li>
                        <li>Substitusi nilai variabel yang telah ditemukan (pada langkah 2) pada salah satu persamaan, sehingga mendapatkan nilai variabel yang dicari.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div id="website-contents-3">
            <div class="container">
                <div class="pemantik">
                    <h4>Metode Gabungan (Eliminasi + Substitusi)</h4>
                    <p>Metode Eliminasi-Subtitusi merupakan metode yang melibatkan prosedur eliminasi dan prosedur subtitusi dalam menyelesaikan suatu sistem persamaan dua variabel.</p>
                    <span>Langkah- langkah Metode Gabungan :</span>
                    <ol>
                        <li>Dengan menggunakan metode eliminasi untuk menghilangkan salah satu variabel, misal dalam suatu persamaan tersebut terdapat variabel x dan y. Pada tahap pertama, akan menghilangkan salah satu diantara x dan y. Misal akan menghilangkan x sehingga diperoleh y.</li>
                        <li>Pada tahap kedua, akan mensubtitusikan y untuk memperoleh x. Yaitu dengan mensubtitusikan y kedalam salah satu persamaan, sehingga memperoleh nilai x.</li>
                    </ol>
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