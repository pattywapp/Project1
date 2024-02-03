<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Website</title>
</head>
<body>
  
  <nav class="navbar">
    <h1 class="logo">Logo</h1>
    <ul class="nav-links">
      <li class="active"><a href="#"></a>Home</li>
      <li><a href="#"></a>Explore</li>
      <li><a href="#"></a>Places</li>
      <li><a href="#"></a>About</li>
      <li class="ctn"><a href="#"></a>Contact</li>
    </ul>
    <img src="img/menu-removebg-preview.png" alt="" class="menu-btn">
  </nav> 

  <header>
    <div class="header-content">
    <h2>Explore The Philippines</h2>
    <div class="line"></div>
    <h1>ADIOS MADAPAKERS</h1>
    <a href="#" class="ctn">Learn More</a>
    </div>
  </header>

  <!-- ==Events== -->


  <section class="events">
      <div class="title">
        <h1>Explore More</h1>
        <div class="line"></div>
      </div>

    <div class="row">
      <div class="col">
        <img src="img/mayon.jpeg" alt="">
        <h4>Places</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, voluptatibus? Alias ut dicta maiores culpa.</p>
        <a href="#" class="ctn">Learn More</a>
      </div>
      <div class="col">
        <img src="img/hills.jpeg" alt="">
        <h4>Places</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, voluptatibus? Alias ut dicta maiores culpa.</p>
        <a href="#" class="ctn">Learn More</a>
      </div>
    </div>
  </section>
  
  <script>
    const menuBtn = document.querySelector('.menu-btn')
    const navlinks = document.querySelector('.nav-links')

    menuBtn.addEventListener('click',()=>{
      navlinks.classList.toggle('mobile-menu')
    })
  </script>

</body>
</html>