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
                    <h4>Definisi SPLDV</h4>
                    <p>Sistem persamaan linear dua variabel atau dalam matematika biasa disingkat SPLDV merupakan suatu persamaan matematika yang terdiri atas dua persamaan linear (PLDV), yang masing-masing bervariabel dua, misalnya variabel x dan variabel y.</p>
                </div>
            </div>
        </div>
        <div id="website-contents-2">
            <div class="container">
                <div class="pemantik">
                    <h4>Bentuk Umum SPLDV</h4>
                    <p>
                    <h5 class="rumus">ax + by = c</h5>
                    </p>
                    <span>Keterangan :<br></span>
                    <span><b>a, b</b> merupakan koefisien<br></span>
                    <span><b>x, y</b> merupakan variabel<br></span>
                    <span><b>c</b> merupakan konstanta</span>
                </div>
            </div>
        </div>
        <div id="website-contents-3">
            <div class="container">
                <div class="pemantik">
                    <h4>Ciri - Ciri SPLDV</h4>
                    <p>
                        <ul>
                            <li>Terdiri dari 2 variabel</li>
                            <li>Kedua variabel pada SPLDV hanya memiliki derajat satu atau berpangkat satu</li>
                            <li>Menggunakan relasi tanda sama dengan (=)</li>
                            <li>Tidak terdapat perkalian variabel dalam setiap persamaannya</li>
                            <li>Dalam kehidupan sehari-hari SPLDV berfungsi  untuk menghitung keuntungan atau laba, mencari harga dasar atau harga pokok suatu barang, dan membandingkan harga barang</li>  
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        <div id="website-contents-4">
            <div class="container">
                <div class="pemantik">
                    <h4>Unsur - Unsur SPLDV</h4>
                    <p>
                        <ol>
                            <li>Variabel</li>
                            <p>Variabel yaitu pengubah atau pengganti suatu bilangan yang belum diketahui nilainya secara jelas. Variabel biasanya disimbolkan dengan huruf, seperti a, b, c, … x, y, z. Misalnya jika ada suatu bilangan yang dikalikan 2 kemudian dikurangi 9 dan hasilnya 3, maka bentuk persamaannya adalah 2x – 9 = 3. Maka, x merupakan variabel pada persamaan tersebut.</p>
                            <li>Koefisien</li>
                            <p>Koefisien yaitu bilangan yang menjelaskan banyaknya jumlah variabel yang sejenis. Koefisien terletak di depan variabel. Misalnya ada 2 buah pensil dan 4 buah spidol, jika ditulis dalam persamaan adalah 
                                Pensil = x , spidol = y
                                Jadi, persamaannya adalah 2x + 5y. Sehingga, karena x dan y adalah variabel, maka angka 2 dan 5 adalah koefisien.</p>
                            <li>Konstanta</li>
                            <p>Konstanta yaitu nilai bilangan yang konstan karena tidak diikuti oleh variabel di belakangnya. Misal persamaan 2x + 5y + 7. Konstanta dari persamaan tersebut adalah 7, karena tidak ada variabel apapun yang mengikuti 7.</p>
                            <li>Suku</li>
                            <p>Suku yaitu bagian-bagian dari suatu bentuk persamaan yang terdiri dari koefisien, variabel, dan konstanta. Misal ada persamaan 7x -y + 4, maka suku suku dari persamaan tersebut adalah  7x, -y, dan 4.</p>
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
                                <a href="https://phet.colorado.edu/in/simulations/equality-explorer-two-variables" class="stretched-link">Equality Explorer: Two Variables</a>
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
                                <a href="https://www.geogebra.org/graphing?lang=en" class="stretched-link">Graphing Calculator</a>
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
                                <a href="https://mathigon.org/task/simultaneous-equations" class="stretched-link">Simultaneous Equations</a>
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
                                <a href=" https://www.wolframalpha.com/examples/mathematics/algebra/equation-solving" class="stretched-link">Equation Solving</a>
                            </div>
                        </div>
                    </div>
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