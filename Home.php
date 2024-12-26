<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #B1F0F7;">
    <div class="container">
        <a class="navbar-brand" href="Home.php" style="color: #F5F0CD;">Logo Png/nama aplikasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="Home.php" style="color: #F5F0CD;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="Pekerjaan.php" style="color: #F5F0CD;">Pekerjaan</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php" style="color: #F5F0CD;">About</a></li>
                <li class="nav-item"><a class="nav-link" href="LoginPage.php" style="color: #F5F0CD;">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 position-relative text-center" style="background-image: url('images/image.png'); background-size: cover; background-position: center; height: 400px;">
            <div class="overlay-text d-flex justify-content-center align-items-center" style="height: 100%;">
                <h1 class="text" style="color: #F5F0CD;">Taro Gambar disini kalo mau</h1>
            </div>
        </div>
    </div>
</div>


<div class="text-center mt-4">
    <p style="color: #F5F0CD;">deskripsi kalau perlu(bisa dihapus kalau g perlu)</p>
    <a href="LoginPage.php" class="btn" style="background-color: #B1F0F7; color: #81BFDA;">Buat Akun</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
    body {
        background-color: #81BFDA;
    }
    
    .overlay-text {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
    }
</style>


