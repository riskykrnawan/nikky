<?php
  require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="svg/icon.svg">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>NIKKY</title>
</head>
<body id="home">
  <div class="container-1-light pt-25px" id="main-content">
    <header>
      <nav class="">
        <div class="container p-relative pl-7 pr-10 top-25">
          <div id="logo">
            <a href="#" id="brand" class="text-upper brand">
              NIKKY<span class="text-red">.</span>
            </a>
          </div>
          <ul class="navbar-menu">
            <li>
              <a href="#home" class="text-upper">
                <span class="fs-3">
                  Home
                </span>
              </a>
            </li>
            <li>
              <a href="#gallery" class="text-upper">
                <span class="fs-3">
                  Gallery
                </span>
              </a>
            </li>
            <li>
              <a href="#about" class="text-upper">
                <span class="fs-3">
                  About
                </span>
              </a>
            </li>
            <li>
              <a href="#insight" class="text-upper">
                <span class="fs-3">
                  Insight
                </span>
              </a>
            </li>
            <li>
              <a href="#contact" class="text-upper">
                <span class="fs-3">
                  Contact
                </span>
              </a>
            </li>
            <li>
              <a href="/nikky/login.php" class="text-upper">
                <span class="fs-3">
                  LOGIN
                </span>
              </a>
            </li>
            <li class="cursor-pointer p-absolute right-5">
              <button class="button-mode my-btn-dark fs-2" id="mode-container">
                Day Mode <i class='bx bxs-sun fs-3 ml-7px p-relative top-3px mt-0 pt-0' id="mode"></i>
              </button>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    
    <section class="parent m-5 pb-50px" id="main-content">
      <div class="grid-1">
        <main class="mb-0">
          <div class="main-text">
            <h6 class="text-upper font-1 m-0 ls-1 text-red pb-20px">Up to 20% Discount for 1<sup>st</sup> Consultation </h6>
            <h1 class="header-1 m-0">Girl's Fashion Consultant</h1>
            <p class=" font-1 mt-10px mb-0 fs-2 lh-2 pt-10px">Consectetur adipisicing elit.Similique dolorem delectus soluta id expedita!</p>
            <p class=" font-1 mb-0 fs-2 lh-2">Similique dolorem delectus soluta id expedita!. elit. Pariatur dolorum ea beatae repellate</p>
            <p class=" font-1  mb-0 fs-2 lh-2">Pariatur dolorum ea beatae repellat vel hic, omnis expedita ullam molestias itaque!</p>
            <p class=" font-1 mt-0 mb-25px fs-2 lh-2">sit adipisicing elit. Sint, perferendis.</p>
            <div>
              <a href="#" class="my-btn-dark text-upper">
                Explore Now <i class='bx bx-right-arrow-alt fs-2 p-relative top-3px mt-0 pt-0'></i>
              </a>
            </div>
          </div>
        </main>
      </div>
      <div class="grid-2 pb-25px mt-25px">
        <div class='flex-container'>
          <div class="text-center flex-item-1">
            <img src="svg/trusted.svg" width="45px" alt="" class="">
            <h1 class="fs-4 m-0 text-bold pt-10px">100%</h1>
            <p class="fs-2 pt-10px">Trusted</p>
          </div>
          <div class="text-center flex-item-1">
            <img src="svg/trophy.svg" width="45px" alt="" class="">
            <h1 class="fs-4 m-0 text-bold pt-10px">100+</h1>
            <p class="fs-2 pt-10px">Achievement</p>
          </div>
          <div class="text-center flex-item-1">
            <img src="svg/love.svg" width="45px" alt="" class="">
            <h1 class="fs-4 m-0 text-bold pt-10px">100%</h1>
            <p class="fs-2 pt-10px">Satisfaction</p>
          </div>
        </div>
      </div>
    </section>
    
    <h3 class="fs-4 item-center text-600">
      Trusted by:
    </h3>
    
    <div class='flex-container gap-35 item-center'>
      <div class="">
        <img src="svg/logo (2).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (3).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (4).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (5).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (6).svg" width="100px" alt="" srcset="">
      </div>
    </div>
    <div class='flex-container gap-35 item-center'>
      <div class="">
        <img src="svg/logo (7).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (8).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (9).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (10).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (12).svg" width="100px" alt="" srcset="">
      </div>
    </div>
    <div class='flex-container gap-35 item-center'>
      <div class="">
        <img src="svg/logo (13).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (14).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (15).svg" width="100px" alt="" srcset="">
      </div>
      <div class="">
        <img src="svg/logo (16).svg" width="100px" alt="" srcset="">
      </div>
      </div>
    </div>

  </div>
  <div class="mt-0 pt-100px container-2-light gallery" id="gallery">
    <div class="p-relative left-10 ">
      <h1 class="header-1 mb-25px">Gallery</h1>
      <p class="fs-2 mb-100px font-1 text-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit reprehenderit architecto quas sunt deserunt quo accusamus fuga ratione a libero.</p>
    </div>
    <div class='flex-container gap-35 item-center'>
      <div class="">
        <img src="img/img1.jpg" height="550px" alt="">
        <div>
          <a href="#" class="my-btn-dark text-upper">
            Hijab Model<i class='bx bx-right-arrow-alt fs-2 p-relative top-3px mt-0 pt-0'></i>
          </a>
        </div>
      </div>
      <div class="">
        <img src="img/img2.jpg" height="550px" alt="">
        <div>
          <a href="#" class="my-btn-dark text-upper">
            Western Model <i class='bx bx-right-arrow-alt fs-2 p-relative top-3px mt-0 pt-0'></i>
          </a>
        </div>
      </div>
      <div class="">
        <img src="img/img3.jpg" height="550px" alt="">
        <div>
          <a href="#" class="my-btn-dark text-upper">
            Asian Model <i class='bx bx-right-arrow-alt fs-2 p-relative top-3px mt-0 pt-0'></i>
          </a>
        </div>
      </div>
    </div>
  </div>  

  <div class="container-2-light pb-100px pt-100px about" id="about">
    <div class="parent">
      <div class="grid-3 item-end">
        <img src="img/about-me-img.jpg" class="mt-100px p-relative left-15 top--5" height="400px" alt="">
        <img src="img/about-me-img-2.jpg" class="mt-100px front custom-photo-1" height="450px" alt="">
      </div>
      <div class="grid-4 p-3">
        <h2 class="font-1">OUR STORY</h2>
        
        <h2 class="header-1 pt-25px">It's all about what they love the most...</h2>
        <p class="font-1 lh-1 pt-25px pr-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsa deserunt natus nostrum voluptatibus temporibus accusantium. Sint fugiat dolore, aspernatur incidunt laboriosam reiciendis, eos, voluptas odio natus nisi quam! Quasi commodi laudantium distinctio architecto assumenda deserunt id ipsum odit, quaerat vero hic, nesciunt corporis repellat exercitationem recusandae dolores, iure soluta.
        </p>
        <p class="font-1 lh-1 pt-25px pr-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quibusdam, mollitia corporis sunt in sequi magnam ex molestias nisi recusandae, nostrum, repellendus culpa iste quos eveniet ab assumenda. Perspiciatis quasi assumenda aliquid ex quia voluptates et quam tempora deserunt natus?
        </p>
        <div>
          <a href="#" class="mt-25px my-btn-dark text-upper">
            See More <i class='bx bx-right-arrow-alt fs-2 p-relative top-3px mt-0 pt-0'></i>
          </a>
        </div>
      </div>
      </div>
  </div>
  <div class="mt-0 pb-100px pt-150px container-2-light" id="insight">
    <div class="p-relative left-10">
      <h1 class="header-1 mb-50px text-500">An inside look to our inspirational collections...</h1>
    </div>
    <div class='flex-container gap-35 item-center'>
      <div class="">
        <img class="" src="img/collection1.jpg" height="550px" alt="">
      </div>
      <div class="">
        <img class="" src="img/collection2.jpg" height="550px" alt="">
      </div>
      <div class="">
        <img class="" src="img/collection3.jpg" height="550px" alt="">
      </div>
      <div class="">
        <img class="" src="img/collection4.jpg" height="550px" alt="">
      </div>
    </div>
  </div>  
  <div class="container-2-light pb-100px" id="contact">
    <div class="parent">
      <div class="grid-3 item-end">
        <img src="img/risky.jpg" class="mt-100px p-relative left-15 top--5" width="220px" height="290px" alt="">
        <img src="img/risky.jpg" class="mt-100px front" width="250px" height="340px" alt="">
      </div>
      <div class="grid-4 p-3">
        <h2 class="font-1">Our Contact</h2>
        
        <h2 class="header-1 pt-25px">About Me</h2>
        <p class="font-1 lh-1 pt-25px pr-3">
          Nama: Risky Kurniawan
          <br>
          Kelas: Informatika A 2020
          <br>
          Posttest: 2
          <br>
          NIM: 2009106050
          <br>
          Angkatan: 2020
        </p>
        <p class="font-1 lh-1 pt-25px pr-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quibusdam, mollitia corporis sunt in sequi magnam ex molestias nisi recusandae, nostrum, repellendus culpa iste quos eveniet ab assumenda. Perspiciatis quasi assumenda aliquid ex quia voluptates et quam tempora deserunt natus?
        </p>
        <div>
          <a href="#" class="mt-25px my-btn-dark text-upper">
            See More <i class='bx bx-right-arrow-alt fs-2 p-relative top-3px mt-0 pt-0'></i>
          </a>
        </div>
      </div>
      </div>
  </div>
  <footer class="footer">
    <div class="mb-15px" id="logo-dark-footer">
      <a href="#" id="brand" class="text-upper brand text-white">
        NIKKY<span class="text-red">.</span>
      </a>
    </div>
    <div class="mt-25px pt-25px">
      <p>
        NIKKY Store
      </p>
      <p>
        Jl. Cipto Mangunkusumo No.50, Harapan Baru,
      </p>
      <p>
        Kec. Samarinda Seberang, Kota Samarinda
      </p>
      <p>
        Kalimantan Timur 75121
      </p>
    </div>
    <hr>
    <p>Copyright &copy 2022 All Rights Reserved by Risky Kurniawan</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>
