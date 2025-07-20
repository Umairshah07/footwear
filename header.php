<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foot-Wear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
      .footwear i {
        color: #5d6d7e;
      } 
      .footwear {
        margin-top: 20px;
        font-size: 30px;
        font-weight: bold;
         font-family: monospace;
      }

      .search1 {
        margin-top: 30px;
        margin-left: 250px;
      }

      .search-box {
        display: flex;
        align-items: center;
        width: 350px;
        border: 1px solid #ddd;
        border-radius: 50px;
        overflow: hidden;
        background-color: #fff;
      }

      .search-box input {
        flex: 1;
        border: none;
        padding: 10px 20px;
        outline: none;
        font-size: 14px;
        border-radius: 50px 0 0 50px;
      }

      .search-box input:focus {
        border: none;
        outline: none;
      }

      .search-box button {
        background-color: #5d6d7e;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 0px;
        cursor: pointer;
      }

      .search-box button:hover {
        background-color: #5d6d7e;
        transition: 0.3s;
      }

      .search-box button i {
        color: white;
      }

      .anker {
        text-decoration: none;
        color: #000;
        font-weight: 500;
        transition: 0.3s;
        margin-top: 50px;
         font-family: monospace;
      }

      .anker:hover {
        color: #5d6d7e;
        transition: 0.3s;
      }

      .anker i {
        color: #5d6d7e;
      }

      .cart1 {
        color: #000;
        transition: 0.3s;
         font-family: monospace;
      }

      .cart1 i {
        color: #5d6d7e;
        margin-right: 5px;
      }

      .cart1:hover {
        color: #5d6d7e;
      }

      .container-fluid {
        background-color: #5d6d7e;
      }

      .banner-text {
        transition: opacity 0.5s ease-in-out;
         font-family: sans-serif;
      }

      .carousel-caption {
        position: absolute;
        bottom: 20%;
        left: 50%;
        transform: translate(-50%, 50%);
        opacity: 0;
        transition: all 0.8s ease-in-out;
       font-family: monospace;
        text-align: center;
      }

      .carousel-item.active .carousel-caption {
        transform: translate(-50%, 0%);
        opacity: 1;
      }

      .carousel-item img {
        height: 70vh;
        object-fit: cover;
        margin-top: 0;
      }

      .carousel-caption h2,
      .carousel-caption h5,
      .carousel-caption h3,
      .carousel-caption p {
        color: #fff;
      }

      .carousel-caption .btn {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        font-weight: bold;
        font-family: sans-serif;
        border-radius: 25px;
        border: none;
        margin-top: 10px;
        transition: all 0.3s ease-in-out;
      }

      .carousel-caption .btn:hover {
        background-color: #fff;
        color: #000;
      }

      .carousel-indicators {
        bottom: 20px;
      }

      .carousel-indicators [data-bs-target] {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: gray;
        opacity: 1;
      }

      .carousel-indicators .active {
        background-color: #5d6d7e;
      }
    </style>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-3 footwear">
          <a href="#" class="text-decoration-none text-secondary"><i class="fas fa-socks"></i> Footwear</a>
        </div>
        <div class="col-md-6 search1">
          <div class="search-box">
            <input type="search" name="search" placeholder="Search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-0">
      <div class="row">
        <div class="col-md-10 d-flex gap-5">
          <a href="#" class="anker"><i class="fas fa-home"></i> Home |</a> 
          <a href="#" class="anker"><i class="fas fa-user-shield"></i> Hello |</a>
          <a href="#" class="anker"><i class='fa-solid fa-lock'></i> Login |</a>
          <a href="#" class="anker"><i class="fa-solid fa-user-tie"></i> Admin |</a>
          <a href="#" class="anker"><i class="fas fa-phone"></i> Contact </a>
        </div>
        <div class="col-md-2 mt-5">
          <a href="#" class="cart1 text-decoration-none">
            <i class="fa-solid fa-cart-shopping"></i>Cart(0)
          </a>
        </div>
      </div>
    </div>

    <div class="text-white text-center py-3" style="background-color: #5d6d7e;">
      <h5 id="saleText" class="banner-text m-0">OUR BIGGEST SALE YET 50% OFF ALL SUMMER SHOES</h5>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption text-center">
            <h2 style="font-size: 70px;"><strong>NEW</strong></h2>
            <h5 style="font-size: 20px;">ARRIVAL</h5>
            <h3 style="font-size: 30px;">UP TO <strong>30%</strong> OFF</h3>
            <p style="font-size: 15px; color: #616161;"> NEW STYLISH SHOES FOR MEN</p>
            <a href="#" class="btn">SHOP COLLECTION</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption text-center ">
            <h1 style="font-size: 50px;"><strong >HUGE</strong></h1>
            <h2>SALE</h2>
            <h2 style="font-size: 50px;"> <strong style="color: #616161; font-size: 50px;">50%</strong> OFF</h2>
            <p class="fs-5 " style="color: darkgrey;">BIG SANDALS SALE</p>
            <a href="#" class="btn">SHOP COLLECTION</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption text-center">
            <h2 style="font-size: 70px;"><strong>MENS</strong></h2>
            <h5 style="font-size: 20px;">SHOES COLLECTION</h5>
            <h3 style="font-size: 35px;">UP TO <strong>40%</strong> OFF</h3>
            <p style="font-size: 20px; color: darkgrey;">NEW TRENDING SHOES</p>
            <a href="#" class="btn">SHOP COLLECTION</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const saleTexts = [
        "OUR BIGGEST SALE YET 50% OFF ALL SUMMER SHOES",
        "25% OFF (ALMOST) EVERYTHING: USE CODE: SUMMER SALES",
         "USE CODE: SUMMER SALES BUY 1 GET 1 FREE",
        
      ];
      let index = 0;
      const saleTextEl = document.getElementById("saleText");

      setInterval(() => {
        index = (index + 1) % saleTexts.length;
        saleTextEl.style.opacity = 0;
        setTimeout(() => {
          saleTextEl.textContent = saleTexts[index];
          saleTextEl.style.opacity = 1;
        }, 500);
      }, 3000);
    </script>
  </body>
</html>
