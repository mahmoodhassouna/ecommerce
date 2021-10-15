<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>MY MM STORE</title>

    <!-- Bootstrap core CSS -->
    <link href="/store/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/store/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/store/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="/store/assets/css/owl.css">
    <style>
.dropbtn {
  background-color:#232323;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #232323;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #232323;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: red;}
</style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ url("home") }}"><h2>MY MM <em>STORE</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="{{ url("home") }}">الرئيسية
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url("our") }}">منتجاتنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("about") }}">عن الموقع</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("contact/create") }}">تواصل معنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("admin") }}">لوحة التحكم</a>
              </li>
              <li class="nav-item">
                @if(auth()->check())
                <form method="post" action="/logout">
                  @csrf            
                  <button class="btn btn-block btn-primary btn-lg">log out</button>
            </form>
                @else
                <a class="nav-link" href="{{ url("login") }}">تسجيل الدخول</a>
                @endif
              </li>
        
          
            </ul>
          </div>
        </div>
      </nav>
    </header>

   
    
        <section class="content">

@yield('content')

</section><!-- /.content -->
      

    
  


    <!-- Bootstrap core JavaScript -->
    <script src="/store/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/store/assets/js/custom.js"></script>
    <script src="/store/assets/js/owl.js"></script>
    <script src="/store/assets/js/slick.js"></script>
    <script src="/store/assets/js/isotope.js"></script>
    <script src="/store/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
