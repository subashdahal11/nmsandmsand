<?php require_once('./includes/header.php');?>
<?php require_once('./includes/navbar.php');?>
<?php require_once('./includes/sidebar.php');?>



<section class="home" id="home">



<!--Slider of section images-->
<div id="slider">
  <div class="slide" style="background:dodgerBlue;">
    <img src="assets/images/1.jpg"" >
  </div>

  <div class="slide" style="background:coral;">
    <img src="assets/images/2.jpg"" >
  </div>

  <div class="slide" style="background:crimson;">
    <img src="https://wallpaperaccess.com/full/1154341.jpg" >
  </div>

  <div class="slide" style="background: #6edf10;">
    <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" >
  </div>

  <!--Controlling arrows-->
    <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
      </span>
    <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
    </span>
</div>
    <div id="dots-con">
      <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
    </div>
</div>

</section>

<center><h1>Top Sold Items</h1>  </center>


<div class="designSection"
           

</div>        
<div class="card-group">
  <div class="card">
  <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" class="card-img-top"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">
        This is a wider card with supporting text below as a natural lead-in to
        additional content. This content is a little bit longer.
      </p>
      <p class="card-text">
        <small class="text-muted">Last updated 3 mins ago</small>
      </p>
      <h3 class="mb-0 font-weight-semibold">$250.99</h3>

      <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>

<div>
   <i class="fa fa-star star"></i>
   <i class="fa fa-star star"></i>
</div>

<div class="text-muted mb-3">34 reviews</div>
    </div>
  </div>


  
  <div class="card">
<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" class="card-img-top"
      alt="Palm Springs Road" />  
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
      </p>
      <p class="card-text">
        <small class="text-muted">Last updated 3 mins ago</small>
      </p>
    </div>
  </div>
  <div class="card">
  <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" class="card-img-top"
      alt="Los Angeles Skyscrapers" />
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">
        This is a wider card with supporting text below as a natural lead-in to
        additional content. This card has even longer content than the first to show
        that equal height action.
      </p>
      <p class="card-text">
        <small class="text-muted">Last updated 3 mins ago</small>
      </p>
    </div>
  </div>
</div>

<br><br><br><br>
<div class="contentProductLists" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="display_conent">

        <div class="display">
            <img src="assets/images/1.jpg" alt="">
            <h3>fresh and organic</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="display">
            <img src="assets/images/2.jpg" alt="">
            <h3>free delivery</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="display">
            <img src="assets/images/3.jpg" alt="">
            <h3>easy payments</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<?php require_once('./includes/footer.php');?>
