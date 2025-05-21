<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Landing Page - Start Bootstrap Theme</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
    type="text/css" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function validasi() {
            var name = document.getElementById("name").value.trim();
            var phone = document.getElementById("phoneNumber").value.trim();
            var email = document.getElementById("email").value.trim();
            var address = document.getElementById("address").value.trim();
            var date = document.getElementById("date").value.trim();

            // Validasi input tidak boleh kosong (kecuali comment)
            if (!name || !phone || !email || !address || !date) {
                swal("Oops...", "Please fill in all fields except Comments", "error");
                return false;
            }

            // Validasi email
            var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (!emailPattern.test(email)) {
                swal("Oops...", "Please enter a valid email address", "error");
                return false;
            }

            // Validasi phone number dimulai dengan angka 0
            if (!phone.startsWith("0")) {
                swal("Oops...", "Phone number must start with 0", "error");
                return false;
            }
            // Jika semua validasi benar → Tampilkan SweetAlert konfirmasi
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, Submit it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "Congrats!",
                        text: "Your form has been submitted.",
                        icon: "success"
                    }).then(() => {
                        document.getElementById("fromOrder").submit(); // Submit form secara manual
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "Your form doesn't submitted",
                        icon: "error"
                    });
                }
            });

            return false;
        }
    </script>
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <img class="navbar-brand row justify-content-center" src="{{ asset('img/assets/img/Logo_CheeseShop.png') }}" alt="">


    </div>
</nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-xl-6">
          <div class="text-center text-white">
            <!-- Page heading-->
            <h1 class="mb-5">The Cheese Shop</h1>
            <button type="button" class="btn btn-primary btn-lg"> <a href="https://cheeseshopnottingham.co.uk/shop/">Shop Now!</a></button>

          </div>
        </div>
      </div>
    </div>
  </header>

<!-- Image Showcases-->
<section class="showcase">
  <div class="container-fluid p-0">
    <div class="row g-0">
      <div class="col-lg-4 order-lg-2 text-white showcase-img"
        style="background-image: url({{ asset('img/assets/img/pilihan_british-cheeses.jpg') }})"></div>
      <div class="col-lg-8 order-lg-1 my-auto showcase-text">
        <h1>Welcome</h1>
        <br>
        <p class="lead mb-0">We are a Cheese Shop run by two brothers; Webb & Rob Freckingham, situated in the heart of Nottingham city centre. The shop was founded in 2004 and specialises in British cheeses*. We stock a variety of other products which shoppers can browse in store; sauces, beers, wine and spirits. We have a seating area for those wanting to grab a coffee, lunch with friends or just a peaceful place to enjoy an Artisan cheese board.
          <br><br>
          <b>Read more :</b>
          We have developed our range throughout the years and now stock a wide variety of; Cows, Sheep, Goats and Buffalo cheeses.  Being situated in Nottinghamshire gives us a fantastic opportunity to stock some of the finest blue stilton (the King of cheese) which is sourced locally from Colton Bassett Dairy and Cropwell Bishop Creameries.
          <br><br>
          <small>*All of our cheeses are cut by hand so a slight variation in weight can occur!</small>
          </p>
      </div>
    </div>
    </div>
  </div>
</section>

  <!-- Icons Grid-->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4"> <a href="//cheeseshopnottingham.co.uk/continental/">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/pilihan_continental-cheeses.jpg') }}" alt="..." />
            <br>
            <h3>Continental Cheeses</h3>
          </div>
        </a>
        </div>
        <div class="col-lg-4"><a href="https://cheeseshopnottingham.co.uk/british-cheeses/">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/pilihan_british-cheeses.jpg') }}" alt="..." />
            <br>
            <h3>British Cheeses</h3>
          </div>
        </a>
        </div>

        <div class="col-lg-4"><a href="https://cheeseshopnottingham.co.uk/accompaniments/">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/pilihan_accompaniments.jpeg') }}" alt="..." />
            <br>
            <h3>Accompaniments</h3>
          </div>
        </a>
        </div>
        <div class="col-lg-4"><a href="https://cheeseshopnottingham.co.uk/selection-boxes/
          ">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/pilihan_selection-boxes.jpg') }}" alt="..." />
            <br>
            <h3>Selection Boxes</h3>
          </div>
        </a>
        </div>
        <div class="col-lg-4"><a href="https://cheeseshopnottingham.co.uk/contact-us/">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/pilihan_contact-us.jpg') }}" alt="..." />
            <br>
            <h3>Contact Us</h3>
          </div>
        </a>
        </div>

      </div>
    </div>
  </section>

  <!-- PRODUCT-->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Some of Our Best Seller</h2>
      <div class="row mb-5">
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/product_colston.jpg') }}" alt="..." />
            <h4>COLSTON BASSETT BLUE STILTON HALF</h4>
            <h5>£7.50 – £110.00</h5>
            <div class="d-grid">
              <button class="btn btn-primary"><a href="https://cheeseshopnottingham.co.uk/product/colston-bassett-blue-stilton-half/">Selection Options</a></button>
          </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/product_the-mystery.jpg') }}" alt="..." />
            <h4>The mystery selection</h4>
            <h5>⭐⭐⭐⭐⭐</h5>
            <h5>£48.00</h5>
            <div class="d-grid">
              <button class="btn btn-primary"><a href="https://cheeseshopnottingham.co.uk/">Add to cart</a></button>
          </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/product_classic-artisan.jpg') }}" alt="..." />
            <h4>Classic Artisan Collection Box</h4>
            <h5>£48.95</h5>
            <div class="d-grid">
              <button class="btn btn-primary"><a href="https://cheeseshopnottingham.co.uk/">Add to cart</a></button>
          </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded mb-3" src="{{ asset('img/assets/img/product_sparkenhoe.jpg') }}" alt="..." />
            <h4>Sparkenhoe Red
              <br>
              Leicester</h4>
            <h5>£7.50 - £30.00</h5>

            <div class="d-grid">
              <button class="btn btn-primary"><a href="https://cheeseshopnottingham.co.uk/product/sparkenhoe-red-leicester/">Selection Options</a></button>
          </div>
          </div>
        </div>


      </div>
      <button type="button" class="btn btn-primary btn-lg"> <a href="https://cheeseshopnottingham.co.uk/shop/">Shop Now!</a></button>

    </div>
  </section>
  <!-- Call to Action-->
  <section class="call-to-action text-white text-center" id="signup">
    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="container my-3">
            <h2>GET IN TOUCH</h2>
            <p>Fill in the order form below to get your favorite cheese</p>
            <form id="formOrder" method="get" action="https://google.co.id" onsubmit="return validasi();">
                <div class="mb-3 mt-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNumber"
                        placeholder="Enter your phone number starting with the number 0" name="phoneNumber">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="address">Address :</label>
                    <input type="address" class="form-control" id="address" placeholder="Enter where to deliver"
                        name="address">
                </div>
                <div class="mb-3 mt-3">
                    <label for="date">Date :</label>
                    <input type="date" class="form-control" id="date" placeholder="Enter when to deliver" name="date">
                </div>
                <label for="orderType">Order Type : </label>
                <div class="container mt-3">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="wholesale" name="optradio" value="option1"
                            required>Wholesale
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="piece" name="optradio" value="option2">Piece
                        <label class="form-check-label" for="radio2"></label>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="comment">Comments:</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Order Now</button>


                </div>

            </form>
        </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
