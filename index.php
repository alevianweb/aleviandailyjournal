<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UEFA Champions League - Alevian</title>
    <link rel="icon" href="img/p1.png" width="300px">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


<!--nav begin-->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
        <a class="navbar-brand" href=""><img src="img/p1.png" alt="" width="10%">UEFA Champions League</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                <!-- Search Input Added Here -->
                <li class="nav-item">
                    <input type="text" id="searchInput" placeholder="Search articles..." onkeyup="searchArticles()" class="form-control me-2" style="width: 200px;">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#article">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#jadwal">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profil">Profil</a>
                </li>
            </ul>
            <button id="darkmode" class="btn btn-outline-light"><i class="bi bi-cloud-sun-fill h2 p-2 text-dark"></i></button>
            <button id="lightmode" class="btn btn-outline-light"><i class="bi bi-cloud-sun h2 p-2 text-dark"></i></button>
        </div>
    </div>
</nav>
<!--nav end-->

    <!--hero begin-->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start" >
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/p2.jpeg" class="img-fluid" width="900">
                <div>
                    <h1 class="fw-bold display-4">UCL</h1>
                    <h4 class="lead display-6">UEFA Champions League (UCL) adalah kompetisi sepak bola antar klub yang diadakan setiap tahun oleh Uni Sepak Bola Eropa (UEFA) untuk klub-klub elit dari liga-liga terbaik Eropa. Pertama kali dimulai pada tahun 1955 dengan nama European Champion Clubs' Cup atau European Cup.
                    </h4><br>
                    <h6>
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <!--hero end-->

    <!-- article begin -->
    <section id="article" class="text-center p-5">
    <div class="container">
        <h1 class="fw-bold display-4 pb-3">Article</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while($row = $hasil->fetch_assoc()){
        ?>
            <div class="col">
            <div class="card h-100">
                <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                    <?= $row["isi"]?>
                </p>
                </div>
                <div class="card-footer">
                <small class="text-body-secondary">
                    <?= $row["tanggal"]?>
                </small>
                </div>
            </div>
            </div>
            <?php
        }
        ?> 
        </div>
    </div>
    </section>
    <!-- article end -->
     
    <!--gallery begin-->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/cr7.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/kane.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/messi.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/lewa.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/dortmund.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/rodri.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>
    
    <hr>

    <section id="jadwal" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3 pt-5">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-4">
      
            <!-- Senin -->
            <div class="col mb-4">
              <div class="card bg-primary text-light">
                <div class="card-header">Senin</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <b>9.00-10.30</b>
                    <p>Basis Data <br>
                       Ruang H.3.4</p>
                  </li>
                  <li class="list-group-item">
                    <b>13.00-15.00</b>
                    <p>Dasar Pemrograman <br>
                       Ruang H.3.1</p>
                  </li>
                </ul>
              </div>
            </div>
      
            <!-- Selasa -->
            <div class="col mb-4">
              <div class="card bg-success text-light">
                <div class="card-header">Selasa</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <b>08.00-09.30</b>
                        <p>Pemrograman Berbasis Web<br>
                           Ruang D.2.J</p>
                      </li>
                      <li class="list-group-item">
                        <b>14.00-16.00</b>
                        <p>Basis Data <br>
                           Ruang D.3.M</p>
                      </li>
                </ul>
              </div>
            </div>
      
            <!-- Rabu -->
            <div class="col mb-4">
              <div class="card bg-danger text-light">
                <div class="card-header">Rabu</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <b>10.00-12.00</b>
                        <p>Pemrograman Berbasis Object <br>
                           Ruang D.2.A</p>
                    </li>
                    <li class="list-group-item">
                        <b>13.30-15.00</b>
                        <p>Pemrograman Sisi Server <br>
                           Ruang D.2.A</p>
                    </li>
                </ul>
              </div>
            </div>
      
            <!-- Kamis -->
            <div class="col mb-4">
              <div class="card bg-warning text-light">
                <div class="card-header">Kamis</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <b>08.00-10.00</b>
                        <p>Pengantar Teknologi Informasi <br>
                           Ruang D.3.N</p>
                    </li>
                    <li class="list-group-item">
                        <b>11.00-13.00</b>
                        <p>Rapat Koordinasi DOSCOM <br>
                           Ruang Rapat G.1</p>
                    </li>
                </ul>
              </div>
            </div>
            
            <!-- Jumat -->
            <div class="col-lg-3 offset-md-1 mb-4">
              <div class="card bg-info text-light">
                <div class="card-header">Jumat</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <b>09.00-11.00</b>
                        <p>Data Maining <br>
                           Ruang G.2.3</p>
                    </li>
                    <li class="list-group-item">
                        <b>13.00-15.00</b>
                        <p>Informasi Retrieval <br>
                           Ruang G.2.4</p>
                    </li>
                </ul>
              </div>
            </div>
      
            <!-- Sabtu -->
            <div class="col-lg-3 mb-4">
              <div class="card bg-secondary text-light">
                <div class="card-header">Sabtu</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <b>08.00-10.00</b>
                        <p>Bimbingan Karier <br>
                           Online</p>
                    </li>
                    <li class="list-group-item">
                        <b>10.30-12.00</b>
                        <p>Bimbingan Skripsi <br>
                           Online</p>
                    </li>
                </ul>
              </div>
            </div>
            <!-- Minggu -->
            <div class="col-lg-3 mb-4">
                <div class="card bg-dark text-light">
                  <div class="card-header">Minggu</div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p>Tidak Ada Jadwal</p>
                    </li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
      </section>            

      <hr>

    <section id="profil" class="text-center text-md-start p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 text-center">Profil Mahasiswa</h1>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="img/jamal.jpg" alt="Your Photo" class="img-fluid rounded-circle" width="200" border-radius="50%">
                </div>
                <div class="col-md-7 text-center text-dark p-5 bg-light" >
                    <h2>Firstanto Alevian Nugroho</h2>
                    <p>Mahasiswa Teknik Informatika</p>
                    <br>
                    <p><b>NIM</b> : A11.2023.15382</p>
                    <p><b>Program Studi</b> : Teknik Informatika</p>
                    <p><b>Email</b> : 111202315382@mhs.dinus.ac.id</p>
                    <p><b>Telepon</b> : +62 812 3456 7890</p>
                    <p><b>Alamat</b> : Brebes, Jawa Tengah</p>
                    <a href="https://dinus.ac.id" class=" text-decoration-none text-dark"> UNIVERSITAS DIAN NUSWANTORO</a>
                </div>
            </div>
        </div>
    </section>
    


    <script>
        function searchArticles() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const cards = document.querySelectorAll('.card');
        
            cards.forEach(card => {
                const title = card.querySelector('.card-title').textContent.toLowerCase();
                if (title.includes(filter)) {
                    card.style.display = ""; // Show card
                } else {
                    card.style.display = "none"; // Hide card
                }
            });
        }
        </script>

    <!--footer begin-->
    <footer class="text-center p-5">
        <div>
            <a href="https://www.instagram.com/championsleague"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href="https://x.com/championsleague"><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
            <a href="https://www.youtube.com/UEFA"><i class="bi bi-youtube h2 p-2 text-dark"></i></a>
            <a href="https://www.facebook.com/ChampionsLeague"><i class="bi bi-facebook h2 p-2 text-dark"></i></a>
        </div> <br>
        <div>Copyright - Firstanto Alevian Nugroho &copy; 2024</div>

    </footer>
    <!--footer end-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <script type="text/javascript">
        window.setTimeout("tampilWaktu()", 1000);

        function tampilWaktu() {
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;

            setTimeout("tampilWaktu()", 1000);
            document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML = 
            waktu.getHours() + 
            ":" +
            waktu.getMinutes() +
            ":" +
            waktu.getSeconds();
        }

    //mengganti dark mode
    document.getElementById("darkmode").onclick = function () {
        document.body.classList.add("bg-secondary", "text-light"); //add kelas mode gelap
        document.body.classList.remove("bg-white", "text-dark"); //hapus kelas mode terang

        const heroSection = document.getElementById("hero");
        heroSection.classList.add("bg-dark", "text-light"); 
        heroSection.classList.remove("bg-danger-subtle", "text-dark"); 

        const gallerySection = document.getElementById("gallery");
        gallerySection.classList.add("bg-dark", "text-light");
        gallerySection.classList.remove("bg-danger-subtle", "text-dark"); 

        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.style.backgroundColor = "black";
            card.style.color = "white";
        });  
        const jadwalSection = document.getElementById("jadwal");
        jadwalSection.classList.add("bg-dark", "text-light"); 
        jadwalSection.classList.remove("bg-danger-subtle", "text-dark"); 

        const profilSection = document.getElementById("profil");
        profilSection.classList.add("bg-dark", "text-light"); 
        profilSection.classList.remove("bg-danger-subtle", "text-dark");
    };

    //mengganti light mode 
    document.getElementById("lightmode").onclick = function () {
        document.body.classList.remove("bg-secondary", "text-light"); //hapus kelas mode gelap
        document.body.classList.add("bg-white", "text-dark"); //add kelas mode terang

        const heroSection = document.getElementById("hero");
        heroSection.classList.remove("bg-dark", "text-light"); // hapus hero section gelap
        heroSection.classList.add("bg-danger-subtle", "text-dark"); //add khero terang

        const gallerySection = document.getElementById("gallery");
        gallerySection.classList.remove("bg-dark", "text-light"); //hapus gallery gelap
        gallerySection.classList.add("bg-danger-subtle", "text-dark"); //add gallery terang

        const jadwalSection = document.getElementById("jadwal");
        jadwalSection.classList.remove("bg-dark", "text-light"); 
        jadwalSection.classList.add("bg-light", "text-dark");

        const profilSection = document.getElementById("profil");
        profilSection.classList.remove("bg-dark", "text-light");
        profilSection.classList.add("bg-danger-subtle", "text-dark");

        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.style.backgroundColor = "white";
            card.style.color = "black";
        });
    };

    </script>

</body>
</html>

