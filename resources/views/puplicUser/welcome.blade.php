@extends('puplicUser.layout.master')
@section('title')
   home
@endsection
@section('css')

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<section class="probootstrap-slider flexslider">
    <ul class="slides">
       <li style="background-image: url(img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Welcome Design Queen</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                  <br>
                  <br>
                  <div class="box">
                    <form name="search">
                        <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
                    </form>
                    <i class="fas fa-search"></i>
                </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(img/slider_2.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">Our fabric will build your trust in us.</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                  <br>
                  <br>
                  <div class="box">
                    <form name="search">
                        <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
                    </form>
                    <i class="fas fa-search"></i>
                </div>
                </div>
              </div>
            </div>
          </div>

        </li>
        <li style="background-image: url(img/slider_3.jpg);" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <div class="probootstrap-slider-text text-center">
                    {{-- <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p> --}}
                    <h1 class="probootstrap-heading probootstrap-animate">Enjoy Luxury Experience</h1>
                    <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                    <br>
                    <br>
                    <div class="box">
                        <form name="search">
                            <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
                        </form>
                        <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
    </ul>
  </section>


   <!-- Gatigory section starts  -->
  <section>
    <h2>We can style it for <span>you</span></h2>
    <br>
    <div class="container1">

        <div class="card">
            <a href="#">
                <div class="cardImage Pic1"></div>
              <p>Designers</p>
            </a>
        </div>
            
        <div class="card">
            <a href="#">
                <div class="cardImage Pic2"></div>
                <p>Designs</p>
            </a>
        </div>
        
        <div class="card">
            <a href="#">
                <div class="cardImage Pic3"></div>
                <p>Customize</p>
            </a>
        </div>
        <div class="card">
            <a href="#">
                <div class="cardImage Pic3"></div>
                <p>Customize</p>
            </a>
        </div>
    </div>
</section>
<!-- Gatigory section ends -->
<!-- packages section starts  -->

<section class="packages" id="packages">

  <div class="center-text">
    <h2>Our Trending <span>products</span></h2>
   </div>

    <div class="box-container">

        <div class="box">
            <img src="img/img_product/pro10.jpg" alt="">
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="./boking.html" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/img_product/pro5.jpg" alt="">
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="./boking.html" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/img_product/pro9.jpg" alt="">
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="./boking.html" class="btn">book now</a>
            </div>
        </div>
    </div>

</section>
<br>
<!-- packages section ends -->

  
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

  <div class="center-text">
    <h2>The most<span> famous designers</span></h2>
   </div>

    <div class="box-container">

        <div class="box">
            <img src="{{ ('img/d1.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ ('img/d2.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
      
       
        <div class="box">
            <img src="{{ ('img/d5.jpg') }}" alt="">
            <div class="content">
                <h3>amazing places</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <br>
        <div class="box">
          <img src="{{ ('img/d4.jpg') }}" alt="">
          <div class="content">
              <h3>amazing places</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
              <a href="#" class="btn">see more</a>
          </div>
      </div>
      <div class="box">
        <img src="{{ ('img/d3.jpg') }}" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    

    </div>

</section>
<br>
<!-- gallery section ends -->






@endsection

