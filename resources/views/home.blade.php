<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- star rating -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e591a82ba2.js" crossorigin="anonymous"></script>
    <title>SOBH</title>
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SOBH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" id="items-list">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Municipalities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Barcelona</a>
                    <a class="dropdown-item" href="#">Bulan</a>
                    <a class="dropdown-item" href="#">Bulusan</a>
                    <a class="dropdown-item" href="#">Casiguran</a>
                    <a class="dropdown-item" href="#">Castilla</a>
                    <a class="dropdown-item" href="#">Donsol</a>
                    <a class="dropdown-item" href="#">Gubat</a>
                    <a class="dropdown-item" href="#">Irosin</a>
                    <a class="dropdown-item" href="#">Juban</a>
                    <a class="dropdown-item" href="#">Magallanes</a>
                    <a class="dropdown-item" href="#">Matnog</a>
                    <a class="dropdown-item" href="#">Pilar</a>
                    <a class="dropdown-item" href="#">Prieto-Diaz</a>
                    <a class="dropdown-item" href="#">Sta. Magdallena</a>
                    <a class="dropdown-item" href="#">Sorsogon City</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div> -->
                </li>
                </ul>
                <!-- <form class="col-8 form-inline my-2 my-lg-0 " id="form-search">
                        <input class="col-10 form-control mr-sm-2 " id="form-search-input" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning my-2 my-sm-0 " type="submit">Search</button>
                </form> -->
                <form class="col-8 form-inline" id="form-search">
                        <input class="col-10 form-control" id="form-search-input" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto" id="items-list">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </li>
                </ul>
                </div>
        </nav>

         <section class="items-barter">
            <div class="container position-relative">
                <div class="row gy-5">
                    <div class="col-md-3">
                        <div class="box-item">
                            <div class="box-img">
                                <a href="#" >
                                    <img class="item_image" src="images/avatar.png" class="card-img" alt="image">
                                </a>
                            </div>
                            <div class="box-body">
                                <div class="item-det d-block">
                                    <h5>ProductName</h5>
                                    <div class="item-owner"><b><span>OwnerName</span></b><p>Municipality</p></div>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
     

        <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </body>
</html>

<style>
    .checked {
    color: orange;
    }
    *{
        font-family: Verdana;
    }
    ul{
        font-size:15px;
    }
    /* mobile */
    @media (max-width: 480px) {
            #form-search-input {

            }
    }
    @media (max-width: 865px) {
            #form-search-input {
            width:10%;
            }
    }
    @media (max-width: 1030px) {
        .navbar ul{
        font-size:10px;
        }
    }
    /* desktop */
    @media (min-width: 1031px) {
        .navbar ul{
        font-size:14px;
        }
    }
    
    .form-inline{
        margin-top:3px;
        margin-bottom:3px;
    }
    .form-inline input{
        margin-right:7px;
    }
    .btn{
        margin-top:5px;
        margin-bottom:5px;
    }


.items-barter{
  margin-top: 40px;
  margin-bottom: 20px;
  color:white;
}
.items-barter .box-item{
  background-color:rgb(60, 60, 60);
  border-radius: 25px;
  margin-bottom: 30px;
  box-shadow: 0 10px 20px rgb(0,0,0,0,19), 0 6px 6px rgb(0,0,0,0,23);
}

.items-barter .box-item:hover{
  box-shadow: 3px 5px 5px 0px rgba(99, 99, 99, 0.9);
  transform: scale(1.01);
}

.box-item .box-img .item_image{
  width: 100%;
  border-radius: 25px 25px 0 0;
  height: 200px;
}

.items-barter .box-item .box-body{
  padding: 5px 0px 10px 15px;
} 
</style>
