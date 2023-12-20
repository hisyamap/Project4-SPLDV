<?php
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>

<head>
    <title>Sistem Persamaan Linear Dua Variabel</title>
</head>

<?php
// Ambil hasil skor dari parameter query
$resultMessage = isset($_GET['resultMessage']) ? $_GET['resultMessage'] : '';
?>

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
                    <h3>KUIS</h3>
                </div>
            </div>
        </div>
        <div id="website-contents-4">
            <div class="container">
                <div class="pemantik2">
                    <p>
                        <div class="row justify-content-center g-4 border-black border-kuis" 
                        >
                            <div class="col">
                            <ol>
                                <form action="proses_kuis.php" id="quizForm" method="post">
                                    <div alt="soal1">
                                        <li>
                                            Nunik membeli 1 kg daging sapi dan 2 kg ayam potong dengan harga Rp94.000,00. Nanik membeli 3 kg ayam potong dan 2 kg daging sapi dengan harga Rp167.000,00. Jika harga 1 kg daging sapi dinyatakan dengan x dan 1 kg ayam dinyatakan dengan y, sistem persamaan linear dua variabel yang berkaitan dengan pernyataan di atas adalah....
                                        </li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q1" value="a" required>
                                            <label class="form-check-label">
                                                A. x + 2y = 94.000 dan 3x + 2y = 167.000
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q1" value="b" required>
                                            <label class="form-check-label">
                                                B. x + 2y = 94.000 dan 2x + 3y = 167.000
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q1" value="c" required>
                                            <label class="form-check-label">
                                                C. 2x + y = 94.000 dan 3x + 2y = 167.000
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q1" value="d" required>
                                            <label class="form-check-label">
                                                D. 2x + y = 94.000 dan 2x + 3y = 167.000
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <div alt="soal2">
                                        <li>
                                            Di dalam kandang terdapat kambing dan ayam sebanyak 13 ekor. Jika jumlah kaki hewan tersebut 32 ekor, maka jumlah kambing dan ayam masing-masing adalah....
                                        </li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q2" value="a" required>
                                            <label class="form-check-label">
                                                A. 3 dan 10
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q2" value="b" required>
                                            <label class="form-check-label">
                                                B. 4 dan 9
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q2" value="c" required>
                                            <label class="form-check-label">
                                                C. 5 dan 8
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q2" value="d" required>
                                            <label class="form-check-label">
                                                D. 10 dan 3
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </ol>
                            <div class="col">
                                <ol start="3">
                                    <div alt="soal3">
                                        <li>
                                            Gindi membeli 5 buah kue dan 3 buah roti seharga Rp 65.000, Oksa membeli 6 buah kue dan 2 buah roti seharga Rp 70.000. Jika Tika ingin membeli 3 buah roti dan 2 buah kue, maka berapa total belanjaan Tika?
                                        </li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q3" value="a" required>
                                            <label class="form-check-label">
                                                A. Rp 40.000
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q3" value="b" required>
                                            <label class="form-check-label">
                                                B. Rp 50.000
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q3" value="c" required>
                                            <label class="form-check-label">
                                                C. Rp 35.000
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="q3" value="d" required>
                                            <label class="form-check-label">
                                                D. Rp 55.000
                                            </label>
                                        </div>
                                    </div>
                                <div alt="soal4">
                                    <li>
                                        Tentukan penyelesaian dari persamaan -x + y = 1 dan 3x - 2y = 0. Jika a = 2x dan b = -5y, tentukan nilai dari 2a + b !
                                    </li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4" value="a" required>
                                        <label class="form-check-label">
                                            A. 5
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4" value="b" required>
                                        <label class="form-check-label">
                                            B. -7
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4" value="c" required>
                                        <label class="form-check-label">
                                            C. 7
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q4" value="d" required>
                                        <label class="form-check-label">
                                            D. 8
                                        </label>
                                    </div>
                                </div>
                                <div alt="soal5">
                                    <li>
                                        Berapakah nilai 6x + 2y jika x dan y merupakan penyelesaian dari sistem persamaan 3x + 3y = 3 dan 2x - 4y = 14…
                                    </li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5" value="a" required>
                                        <label class="form-check-label">
                                            A. -16
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5" value="b" required>
                                        <label class="form-check-label">
                                            B. -12
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5" value="c" required>
                                        <label class="form-check-label">
                                            C. 16
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="q5" value="d" required>
                                        <label class="form-check-label">
                                            D. 14
                                        </label>
                                    </div>
                                </div>
                                </ol>
                            </div>
                            <div class="pb-5 d-flex justify-content-evenly">
                                <input class="submit" type="submit" value="SUBMIT">
                            </div>
                        </div>
                                </form>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
            <div id="website-contents-3">
                <div class="container">
                    <div class="pemantik d-flex justify-content-center">
                        <table class="text-center" style="width: 50%;">
                            <tr class="table-kuis"> 
                                <th class="border-black border-2" style="width: 50%;">Time</th>
                                <th class="border-black border-2" style="width: 50%;">Score</th>
                            </tr>
                            <?php
                            if (isset($_SESSION['email'])) {
                                $email = $_SESSION['email'];
                                $user = $_SESSION['nama'];
                            
                                // Tambahkan koneksi ke database dan query SQL
                                include "koneksi.php";
                                $query = "SELECT * FROM nilai WHERE user_name = '$email'";
                                $result = $conn->query($query);

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr class='table-kuis'>  
                                            <td class='border-black border-2'>{$row['time']}</td>
                                            <td class='border-black border-2'>{$row['score']}</td> 
                                        </tr>";
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById("quizForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Mencegah formulir dikirim secara otomatis
        
                // Menampilkan alert dengan hasil
                var hasilKuis = confirm("Apakah Anda yakin ingin mengirim jawaban?");
                if (hasilKuis) {
                    // Jika pengguna mengonfirmasi, formulir dikirim
                    this.submit();
                } else {
                    // Jika pengguna membatalkan, tidak ada tindakan tambahan yang diambil
                }
            });
        </script>
        <?php if ($resultMessage): ?>
                <script>
                    alert("<?php echo $resultMessage; ?>");
                </script>
            <?php endif; ?>
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