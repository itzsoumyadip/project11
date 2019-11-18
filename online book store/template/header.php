<?php 
//  session_start();
if(!isset($_SESSION['USERNAME'])){
    header('Location:registration.html'); 
    }
    $username=$_SESSION['USERNAME'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap/css/styles.css">
    <link rel="stylesheet" href="./bootstrap/css/owl.carousel.min.css">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    
   <style>
    
    .overlay {
        height: 0%;
        width: 100%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0, 0.9);
        overflow-y: hidden;
        transition: 0.8s;
        opacity: 0.8;
      }
      
      .overlay-content {
        position: relative;
        top: 25%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      
      .overlay a {
        padding: 8px;
        text-decoration: none;
        font-size: 36px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }
      
      .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
      }
      
      .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
      }

     .img-container{
        
        position: relative;
        top: 5px;
     }

      body{
        background-image: url(bootstrap/img/prettybook.gif);
        background-size: cover;
        background-attachment: fixed;
        animation: books_anim 65s linear infinite;
        background opacity: 0.8;
    }

    @keyframes books_anim{
        0%{background-position: 0 0;}
        100%{background-position: -2122px 0;}
    }

    </style>
  

</head>

<body>
   <div class="img-container">
      
     <a href="index.php"><img src="bootstrap/img/book-offer2.jpg" width=""></a> 
</div>
    <header class="sticky-top">
        <div class="header-top ">
        
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-2">
                          <button type="button" class="btn btn-outline-secondary" style="border-style:none;"  onclick="openNav()">
                                <i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
                            </button>
                            <div id="myNav" class="overlay">
                             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a  href="#">hello&nbsp<?php echo $username ?></a>
                                <a  href="./cart.php">your order</a>
                                <a  href="./logout.php">logout</a>
                            </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-10">
                        <div class="main-menu">
                            <div class="container">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <a class="navbar-brand" href="index.php"><img src="./bootstrap/img/logo1.png"
                                            alt="logo" height="95px" width="245px"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="navbar-item active">
                                                <a href="index.php" class="nav-link"><font color="white">Home</font></a>
                                            </li>
                                            <li class="navbar-item">
                                                <a href="books.php" class="nav-link"><font color="white">Books</font></a>
                                            </li>
                                            <li class="navbar-item">
                                                <a href="contact.php" class="nav-link"><font color="white">Contact</font></a>
                                            </li>
                                            <li class="navbar-item">
                                                <a href="publisher_list.php" class="nav-link"><font color="white">Publisher</font></a>
                                            </li>
                                            <li class="navbar-item">
                                                <a href="registration.html" class="nav-link"><font color="white">Login</font></a>
                                            </li>
                                            
                                        </ul>
                                        <div class="cart my-2 my-lg-0">
                                            <span>
                                            <a href="cart.php" class="nav-link"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></span>
                                            <!-- <span class="quntity">3</span> -->
                                        </div>
                                        <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search"
                                                placeholder="Search here..." aria-label="Search">
                                            <span class="fa fa-search"></span>
                                        </form>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    </header>


    <script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>

    <script src="./bootstrap/js/jquery-v341.js"></script>
    <script src="./bootstrap/popper.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="./bootstrap/js/owl.carousel.min.js"></script>
    <script src="./bootstrap/js/custom.js"></script>

</body>


     </html>

<!-- 
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CSE Bookstore</a>
        </div> -->

<!--/.navbar-collapse -->
<!-- <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right"> -->
<!-- link to publiser_list.php -->
<!-- <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li> -->
<!-- link to books.php -->
<!-- <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li> -->
<!-- link to contacts.php -->
<!-- <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li> -->
<!-- link to shopping cart -->
<!-- <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
            </ul>
        </div>
      </div>
    </nav>
      -->