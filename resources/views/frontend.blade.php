<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Linktree</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
    background-image: url(https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExaDBuZ3ZhNGw2eG13ejl4ZnA4ZGJnN211bTFpbzlrNjQ5Mmp2M3hzZSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/U8wCBLhkjNknS/giphy.gif);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    }
    body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(107, 107, 107, 0.4);
    z-index: -1;
  }
    .profile-pic {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #fafafa;
      margin-bottom: 15px;
    }
    .link-btn {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
    <div class="text-center">
      <!-- Foto Profil -->
      <img src="{{ asset('img/profile.jpeg') }}" alt="Profile" class="profile-pic">

      <!-- Nama & Deskripsi -->
      <h3 class="mb-2" style="color: #fafafa">My Frontend Project</h3>
      <h6 class="mb-2" style="color: #fafafa">Bagas Rafi Dewantara | Kelas C | 5026231091</h6>
    </div>

    <!-- Link Buttons -->
    <div class="w-100" style="max-width: 600px;">
      <a href="{{ url('bootstrap1') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Bootstrap 1</h5></a>
      <a href="{{ url('bootstrap2') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Bootstrap 2</h5></a>
      <a href="{{ url('index') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>ETS</h5></a>
      <a href="{{ url('js1') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>JS 1</h5></a>
      <a href="{{ url('js2') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>JS 2</h5></a>
      <a href="{{ url('linktree') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Linktree</h5></a>
      <a href="{{ url('Pertemuan1') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Pertemuan 1</h5></a>
      <a href="{{ url('Pertemuan4layoting') }}" class="btn btn-light w-100 link-btn" target="_blank"><h5>Pertemuan 4 Layouting</h5></a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



