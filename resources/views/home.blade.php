@extends('homelayout')
@section('content')
    <div class=”header”>
         <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light  nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Institution</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="course">Course</a>
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
  <!--Carosual-->
  <!---->
    <div  class="" >
        <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="{{ asset('image/slider1.jpg') }}"  class="d-block w-100 carousel-container" alt="Students">
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="{{ asset('image/slider2.jpg') }}" class="d-block w-100 carousel-container " alt="Students">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/slider3.png') }}" class="d-block w-100 carousel-container" alt="Students">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

<!-- Section welcome-->
    <section id="welcome" >
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('image/quote.JPG') }}" class="quote_img" alt ="quote"></img>
            </div>
            <div class="col-md-6 welcome-para">
                <h1 class="welcome-text">Welcome to Something</h1><br>
                <h3 class="welcome-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
                <br>
                <h3 class="welcome-content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</h3>
            </div>
        </div>
    </section>

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



    
    
  
