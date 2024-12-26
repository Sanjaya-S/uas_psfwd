<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="col-md">
        <div class="form-floating">
        <select class="form-select" id="floatingSelectGrid">
            <option selected>Freelancer</option>
            <option value="1">Client</option>
        </select>
        <label for="floatingSelectGrid">Login sebagai</label>
        </div>
    </div>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Masukkan Nama</span>
  <input type="text" class="form-control" placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Masukkan Email</span>
  <input type="text" class="form-control" placeholder="user@gmail.com" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>

<div class="text-center mt-4">
    <a href="" class="btn" style="background-color: #B1F0F7; color: #81BFDA;">Login</a>
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
