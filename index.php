<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Link Css -->
    <link rel="stylesheet" href="style.css">

    <title>My Portofolio | Muhamad Fahry Saputra</title>
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skill</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galery
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Photography</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Profil -->
    <section class="jumbotron text-center">
        <img src="image/My Foto.png" alt="my foto" width="200px" class="rounded-circle mb-3 img-thumbnail">
        <h1 class="display-4 fs-1 fw-bold mb-2">Muhamad Fahry Saputra</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p class="lead fs-4 fw-bold">Mahasiswa</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,160L40,154.7C80,149,160,139,240,117.3C320,96,400,64,480,74.7C560,85,640,139,720,154.7C800,171,880,149,960,160C1040,171,1120,213,1200,218.7C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Profil -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-around text-start">
                <div class="col-md-6">
                    <p>Hallo, Perkenalkan saya Muhamad Fahry Saputa. Saya seorang mahasiswa di salah satu Universitas di Kota Bogor, yaitu Universitas Pakuan dengan mengambil Jurusan Ilmu Komputer. Dengan kegiatan sehari-hari belajar membuat tampilan web maupun mobile kegiatan yang paling disukai dari saya adalah mendesain, biasa aplikasi yang digunakan adalah Figma, Adobe Ilustrator, Adobe Premier, dan Aplikasi desain lainnya. :)</p>
                </div>
                <div class="col-md-4">
                    <img src="image/My Foto.png" alt="my foto" width="300px" class="rounded shadow">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#4bec53" fill-opacity="1" d="M0,64L34.3,58.7C68.6,53,137,43,206,74.7C274.3,107,343,181,411,218.7C480,256,549,256,617,240C685.7,224,754,192,823,170.7C891.4,149,960,139,1029,160C1097.1,181,1166,235,1234,256C1302.9,277,1371,267,1406,261.3L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir About -->

    <!-- My Skill -->
    <section id="skill">
        <div class="container">
            <div class="row text-center">
                <div class="col mt-4 mb-4">
                    <h2>My Skill</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-6 mb-5">
                    <h3>Adobe Premier</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h3>Adobe Ilustrator</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h3>Figma</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h3>Web Programming</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h3>Mobile Programming</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,128L40,144C80,160,160,192,240,197.3C320,203,400,181,480,149.3C560,117,640,75,720,101.3C800,128,880,224,960,250.7C1040,277,1120,235,1200,218.7C1280,203,1360,213,1400,218.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir My Skill -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col mb-3">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#198754" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,117.3C384,139,480,149,576,133.3C672,117,768,75,864,48C960,21,1056,11,1152,21.3C1248,32,1344,64,1392,80L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Contant -->

    <!-- Footer -->
    <footer class="bg-success text-white text-center pb-3">
        <p>Create With <i class="bi bi-heart-fill text-danger"></i> By <a href="https://www.instagram.com/fahry_209/" class="text-white">Muhamad Fahry S</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>