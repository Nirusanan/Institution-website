@extends('courselayout')
@section('content')
    <!--Navbar-->
    <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light  nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Institution</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link  " aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="course">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs & Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!--Heading-->
<h1 class="heading">Pick a course to get started</h1>
<div class="cat">
  <button type="button" class="cat-btn-active" >.All categories</button>
  <button type="button" class="cat-btn-disabled"  >Web design</button>
  <button type="button" class="cat-btn-disabled" >Data science</button>
  <button type="button" class="cat-btn-disabled" >Cloud computing</button>
</div>

  <!--Course-->
  <div class="row">
    <div class="col-md-3 course">
      <div class="card border-light course-card">
  <img src="{{ asset('image/course2.jpg') }}"  class="card-img-top course-img" alt="course1">
  <div class="course-body">
    <p class="card-text">
      <h3 class="course-title">Fundamental web design</h3>
      <span class="fa fa-clock course-duration"> </span> <span class="course-duration-text"> 10 weeks</span>
      <h6 class="course-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h6>
      <hr class="solid">
      <div class="row">

        <div class="col-md-6">
          <h6 class="course-star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </h6>
        </div>

        <div class="col-md-6">
          <a href="#" class="course-entrol">Know details &rarr;</a>
        </div>
      </div>
    </p>
  </div>
</div>
    </div>
    <div class="col-md-3 course">
      <div class="card border-light course-card">
  <img src="{{ asset('image/course3.jpg') }}"  class="card-img-top course-img" alt="course1">
  <div class="course-body">
    <p class="card-text">
      <h3 class="course-title">PHP for web technologies</h3>
      <span class="fa fa-clock course-duration"> </span> <span class="course-duration-text"> 10 weeks</span>
      <h6 class="course-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h6>
      <hr class="solid">
      <div class="row">

        <div class="col-md-6">
          <h6 class="course-star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </h6>
        </div>

        <div class="col-md-6">
          <a href="#" class="course-entrol">Know details &rarr;</a>
        </div>
      </div>
    </p>
  </div>
</div>
    </div>
    <div class="col-md-3 course">
      <div class="card border-light course-card">
  <img src="{{ asset('image/course4.jpg') }}"  class="card-img-top course-img" alt="course1">
  <div class="course-body">
    <p class="card-text">
      <h3 class="course-title">Ethical hacking</h3>
      <span class="fa fa-clock course-duration"> </span> <span class="course-duration-text"> 10 weeks</span>
      <h6 class="course-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h6>
      <hr class="solid">
      <div class="row">

        <div class="col-md-6">
          <h6 class="course-star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </h6>
        </div>

        <div class="col-md-6">
          <a href="#" class="course-entrol">Know details &rarr;</a>
        </div>
      </div>
    </p>
  </div>
</div>
    </div>
    <div class="col-md-3 course">
      <div class="card border-light course-card">
  <img src="{{ asset('image/course5.jpg') }}"  class="card-img-top course-img" alt="course1">
  <div class="course-body">
    <p class="card-text">
      <h3 class="course-title">Mobile app development</h3>
      <span class="fa fa-clock course-duration"> </span> <span class="course-duration-text"> 10 weeks</span>
      <h6 class="course-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h6>
      <hr class="solid">
      <div class="row">

        <div class="col-md-6">
          <h6 class="course-star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </h6>
        </div>

        <div class="col-md-6">
          <a href="#" class="course-entrol">Know details &rarr;</a>
        </div>
      </div>
    </p>
  </div>
</div>
    </div>
    <div class="col-md-3 course">
      <div class="card border-light course-card">
  <img src="{{ asset('image/course1.jpg') }}"  class="card-img-top course-img" alt="course1">
  <div class="course-body">
    <p class="card-text">
      <h3 class="course-title">Fundamental web design</h3>
      <span class="fa fa-clock course-duration"> </span> <span class="course-duration-text"> 10 weeks</span>
      <h6 class="course-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h6>
      <hr class="solid">
      <div class="row">

        <div class="col-md-6">
          <h6 class="course-star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </h6>
        </div>

        <div class="col-md-6">
          <a href="#" class="course-entrol">Know details &rarr;</a>
        </div>
      </div>
    </p>
  </div>
</div>
    </div>

    <div class="col-md-3 course">
      <div class="card border-light course-card">
  <img src="{{ asset('image/course1.jpg') }}"  class="card-img-top course-img" alt="course1">
  <div class="course-body">
    <p class="card-text">
      <h3 class="course-title">Fundamental web design</h3>
      <span class="fa fa-clock course-duration"> </span> <span class="course-duration-text"> 10 weeks</span>
      <h6 class="course-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h6>
      <hr class="solid">
      <div class="row">

        <div class="col-md-6">
          <h6 class="course-star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </h6>
        </div>

        <div class="col-md-6">
          <a href="#" class="course-entrol">Know details &rarr;</a>
        </div>
      </div>
    </p>
  </div>
</div>
    </div>

    <div class="col-md-3 course">
      <div class="card  border-light course-card">
  <img src="{{ asset('image/course1.jpg') }}"  class="card-img-top course-img" alt="course1">
  <div class="course-body">
    <p class="card-text">
      <h3 class="course-title">Fundamental web design</h3>
      <span class="fa fa-clock course-duration"> </span> <span class="course-duration-text"> 10 weeks</span>
      <h6 class="course-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h6>
      <hr class="solid">
      <div class="row">

        <div class="col-md-6">
          <h6 class="course-star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </h6>
        </div>

        <div class="col-md-6">
          <a href="#" class="course-entrol">Know details &rarr;</a>
        </div>
      </div>
    </p>
  </div>
</div>
    </div>

    <div class="col-md-3 course">
      <div class="card border-light course-card">
  <img src="{{ asset('image/course1.jpg') }}"  class="card-img-top course-img" alt="course1">
  <div class="course-body">
    <p class="card-text">
      <h3 class="course-title">Fundamental web design</h3>
      <span class="fa fa-clock course-duration"> </span> <span class="course-duration-text"> 10 weeks</span>
      <h6 class="course-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h6>
      <hr class="solid">
      <div class="row">

        <div class="col-md-6">
          <h6 class="course-star">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </h6>
        </div>

        <div class="col-md-6">
          <a href="#" class="course-entrol">Know details &rarr;</a>
        </div>
      </div>
    </p>
  </div>
</div>
    </div>
  </div>
<center>
    <button type="button" class="btn btn-dark" >Browse all courses</button>
</center>
<br>

<!--footer-->
<footer class="footer">
   <div class="footer-container">
    <div class="footer-row">
      <div class="footer-col">
        <h4>  company</h4>
        <ul>
          <li><a href="#">about us</a></li>
          <li><a href="#">our services</a></li>
          <li><a href="#">privacy policy</a></li>
          <li><a href="#">affiliate program</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>  get help</h4>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">shipping</a></li>
          <li><a href="#">returns</a></li>
          <li><a href="#">order status</a></li>
          <li><a href="#">payment options</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>  online shop</h4>
        <ul>
          <li><a href="#">watch</a></li>
          <li><a href="#">bag</a></li>
          <li><a href="#">shoes</a></li>
          <li><a href="#">dress</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>  follow us</h4>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
   </div>
</footer>
    
@endsection 
 