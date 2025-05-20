<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
    padding-bottom: 60px;
}

    .card {
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      /* Memungkinkan card-body mengambil semua ruang tersisa */
      padding: 5px;
    }

    .card-title {
      font-size: 10px;
      font-weight: bold;
      word-wrap: break-word;
      white-space: normal;
      overflow: hidden;
      text-overflow: clip;
    }

    .card-text {
      margin-top: auto;
      font-size: 8px;
      color: rgb(100, 100, 100);
    }

    .card-header {
      font-weight: bold;
      color: white;
      font-size: 8px;
      text-align: center;
      padding: 5px;
      height: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgb(37, 106, 255);
    }
    .card-img-top {
    width: 100%;  /* Lebar penuh sesuai card */
    height: 100px; /* Atur tinggi tetap untuk semua gambar */
    object-fit: cover; /* Pastikan gambar tidak melar atau gepeng */
}


    .footer-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background: white;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-around;
      padding: 5px 0;
      border-top: 2px solid #ddd;
    }

    .footer-nav a {
      text-decoration: none;
      color: #7fb1f3;
      font-size: 12px;
      text-align: center;
      flex: 1;
      padding: 8px 0;
    }
    .footer-nav a img {
    opacity: 0.5; /* Gambar pudar */
    transition: opacity 0.3s ease-in-out;
}

    .footer-nav a i {
      font-size: 20px;
      display: block;
      margin-bottom: 5px;
    }

    .footer-nav a.active {
      color: #007bff;
      font-weight: bold;
    }

    .footer-nav a.active i {
      color: #007bff;
    }
    .footer-nav a:hover {
    color: #007BFF;
}
.footer-nav a:hover img {
    opacity: 1;
}
  </style>


</head>

<body>
  <nav class="navbar navbar-expand-sm rounded">
    <!-- Brand/logo -->
    <a class="rounded-circle border border-dark p-1" href="#">
      <img src="{{ asset('img/materials/Logo CekDong 1.png') }}" alt="logo" style="width:50px;">
    </a>
  </nav>
  <nav class="navbar navbar-expand-md bg-light">
    <h2 class="text-dark">Equipment</h2>
  </nav>

  <div class="container pt-1">
    <p class="small">All list of goods, please tap the goods for start booking</p>
  </div>

<!-- row 1 -->
  <div class="container mt-4 px-1">
    <div class="row no-gutters">
      <!-- Grid Item 1 -->
      <div class="col-3 px-1 ">
        <div class="card h-100 d-flex flex-column border-dark ">
          <div class="card-header">Mostly Borrowed</div>
          <img class="card-img-top" src="{{ asset('img/materials/1-1.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Lighting Set Sony</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 2 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <img class="card-img-top" src="{{ asset('img/materials/1-2.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Canon Lens EFS 18-135mm</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 3 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <img class="card-img-top" src="{{ asset('img/materials/1-3(1).png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Sony PXW-Z90T XDCAM camcorder</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 4 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header">Mostly Borrowed</div>
          <img class="card-img-top" src="{{ asset('img/materials/1-4.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Canon EOS 40000</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- row 2 -->
  <div class="container mt-2 px-1">
    <div class="row no-gutters">
      <!-- Grid Item 1 -->
      <div class="col-3 px-1 ">
        <div class="card h-100 d-flex flex-column border-dark ">
          <div class="card-header">Mostly Borrowed</div>
          <img class="card-img-top" src="{{ asset('img/materials/2-3.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">TaffSTUDIO Softbox Reflektor</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 2 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <img class="card-img-top" src="{{ asset('img/materials/2-3.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Inbex Lighting Studio Softbox</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 3 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <img class="card-img-top" src="{{ asset('img/materials/2-3.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Triopo LED 204 Video Lighting</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 4 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header">Mostly Borrowed</div>
          <img class="card-img-top" src="{{ asset('img/materials/2-3.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Godox H160-B Lighting Kit</h6>
            <p class="card-text">🔴 20 November 2024</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- row 3 -->
  <div class="container mt-2 px-1">
    <div class="row no-gutters">
      <!-- Grid Item 1 -->
      <div class="col-3 px-1 ">
        <div class="card h-100 d-flex flex-column border-dark ">
          <div class="card-header"></div>
          <div class="p-2">
            <img class="card-img-top" src="{{ asset('img/materials/3-3.png') }}" alt="Card image">
          </div>
          <div class="card-body flex-grow-1">
            <h6 class="card-title">F8 Reflek Lens 900 mm</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 2 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <div class="p-2">
            <img class="card-img-top" src="{{ asset('img/materials/3-3.png') }}" alt="Card image">
          </div>
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Sony FE 24-70MM F2.8 GM LENS</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 3 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <div class="p-2">
            <img class="card-img-top" src="{{ asset('img/materials/3-3.png') }}" alt="Card image">
          </div>
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Canon EFS 18-55mm</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 4 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header">Mostly Borrowed</div>
          <div class="p-2">
            <img class="card-img-top" src="{{ asset('img/materials/3-3.png') }}" alt="Card image">
          </div>
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Nikon AF 80-200mm f-2.8D</h6>
            <p class="card-text">🔴 20 November 2024</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- row 4 -->
  <div class="container mt-2 px-1">
    <div class="row no-gutters">
      <!-- Grid Item 1 -->
      <div class="col-3 px-1 ">
        <div class="card h-100 d-flex flex-column border-dark ">
          <div class="card-header"></div>
          <img class="card-img-top" src="{{ asset('img/materials/4-1.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">NIKON D7500</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 2 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <div class="">
            <img class="card-img-top img-fluid" src="{{ asset('img/materials/4-2.png') }}" alt="Card image">
          </div>
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Instax slim-go</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 3 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <img class="card-img-top img-fluid" src="{{ asset('img/materials/4-3.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Sony Zeiss</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 4 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <img class="card-img-top" src="{{ asset('img/materials/4-4.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Instax mini11</h6>
            <p class="card-text">🔴 19 November 2024</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- row 5 -->
  <div class="container mt-2 px-1">
    <div class="row no-gutters">
      <!-- Grid Item 1 -->
      <div class="col-3 px-1 ">
        <div class="card h-100 d-flex flex-column border-dark ">
          <div class="card-header">Mostly Borrowed</div>
          <img class="card-img-top" src="{{ asset('img/materials/6-1.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Canon EOS 80D</h6>
            <p class="card-text">🔴 20 November 2024</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 2 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header">Mostly Borrowed</div>
          <img class="card-img-top" src="{{ asset('img/materials/6-1.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Black Backdrop kit</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 3 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header"></div>
          <img class="card-img-top" src="{{ asset('img/materials/6-1.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Blue Backdrop kit</h6>
            <p class="card-text">🟢 Available</p>
          </div>
        </div>
      </div>

      <!-- Grid Item 4 -->
      <div class="col-3 px-1">
        <div class="card h-100 d-flex flex-column border-dark">
          <div class="card-header">Mostly Borrowed</div>
          <img class="card-img-top" src="{{ asset('img/materials/6-1.png') }}" alt="Card image">
          <div class="card-body flex-grow-1">
            <h6 class="card-title">White Backdrop kit Cloth 200x300cm</h6>
            <p class="card-text">🔴 20 November 2024</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- row 6 -->
  <div class="container mt-2 px-1">
    <div class="row no-gutters">
      <!-- Grid Item 1 -->
      <div class="col-3 px-1 ">
        <div class="card h-100 d-flex flex-column border-dark ">
          <div class="card-header">Mostly Borrowed</div>
          <div class="p-2">
          <img class="card-img-top" src="{{ asset('img/materials/6-1.png') }}" alt="Card image">
        </div>
          <div class="card-body flex-grow-1">
            <h6 class="card-title">Studio Accessories</h6>
            <p class="card-text">🔴 20 November 2024</p>
          </div>
        </div>
      </div>


        </div>
      </div>
    </div>
  </div>

  <div class="text-center my-2 mb-2">
    <button class="btn btn-light font-weight-bold border border-dark rounded-pill px-4" style="font-size: 10px;">
      Book Now!
    </button>
  </div>

  <div class="container text-right mb-5">
    <a href="https://wa.me/6285715667641" target="_blank">
      <img src="{{ asset('img/icon/icon-wa.png') }}" width="40" height="40" alt="WhatsApp Icon">
    </a>
  </div>




  <div class="footer fixed-bottom">
    <div class="footer-nav ">
      <a href="#"><i class="fas fa-user"></i>
        <img src="{{ asset('img/icon/icon-profile.png') }}" width="24" height="24" alt="Profile Icon">
        <br>Profile</a>
      <a href="#"><i class="fas fa-utensils"></i>
        <img src="{{ asset('img/icon/icon-menu.png') }}" width="24" height="24" alt="Menu Icon">
        <br>Menu</a>
      <a href="#"><i class="fas fa-history"></i>
        <img src="{{ asset('img/icon/icon-history.png') }}" width="24" height="24" alt="History Icon">
        <br>Riwayat</a>
      <a href="#"><i class="fas fa-box"></i>
        <img src="{{ asset('img/icon/icon-equip.png') }}" width="24" height="24" alt="Equipment Icon">
        <br>Equipment</a>
    </div>
  </div>

</body>

</html>
