@extends('puplicUser.layout.master')
@section('title')
about
@endsection
@section('css')

@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image:url(img/imgabout.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading probootstrap-animate">About Design Queen</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                </div>
              </div>
            </div>
          </div>
        </li>
    </ul>
  </section>

  {{--  --}}


 <section id="about" class="about">
  <div class="container" data-aos="fade-up">

    {{-- <div class="row position-relative"> --}}
    <div class="row ">


      <div class="col-lg-5 about-img"><img src="https://i.pinimg.com/736x/19/f9/c1/19f9c15401c4cd2df3f22437033f9be9--fashion-drawings-fashion-sketches.jpg" style="margin:10rem 0rem ;" width="450px" height="390px" alt=""> </div>

      <div class="col-lg-7" style="margin-top:7.25rem">
        {{-- <h2 class="text-center">Aqaba Fields Corner</h2> --}}
        <div class="our-story" >
          {{-- <h4>Est 1988</h4> --}}
          <h3>About Us</h3>
          <p>Website That Specializes In Fashion And Design.
            My Website Offers A Market Place For Jordanian Designers
            To Display Their Work And Keep Theirdesigns Up
            To Date Online , It Aims To Gatherthe Majority
            Of The Most Trendy Designs In One Place For Users
            To Shop Through Them By Category..</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>

          </ul>
          <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

          <div class="watch-video d-flex align-items-center position-relative">
            <i class="bi bi-play-circle"></i>
            <button style="border-radius: 20px solid blue"><a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a></button>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>




<!-- ======= Our Team Section ======= -->
<!-- end wection about us -->
<br>
<!-- section me -->
<section class="section2Results">
    
    <div class="result1">
        <div class="resultsCenter">
            <p class="paa">  Hey!<br>
                        Iam walaa obeidat<br>
               Iam  programer & unshakable <br> optimist dedicated to<br> helping you 
                        become the<br> person you most want to be.</p>
                        <img class="walaa" src="./img/walaa image.png" alt="">
        </div>
       
</section>
<!-- end section me -->

<section >
  <div class="container">
    <div class="row mb30">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
        <div class="center-text">
          <h2>Why Choose <span>Us</span>?</h2>
         </div>
        {{-- <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
        {{-- <p><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p> --}}
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img style="height: 50px !important; width: 50px !important;" src="img/Guaranteed Results.jpg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>One place to book </h3>
            <p>we offer multiple choices to book for different types of fields</p>
            {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img style="height: 50px !important; width: 50px !important;" src="img/workteam.jpg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>Work Team </h3>
            <p>Our website is easy to use with an easy to access user interface</p>
            {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img style="height: 50px !important; width: 50px !important;" src="img/free.jpg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>Without commissions</h3>
            <p>You can book hours through our website without any other costs such as commission</p>
            {{-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- End Our Team Section -->


@endsection



