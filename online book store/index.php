<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "template/header.php";
  require_once "functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);

  // if(!isset($_SESSION['USERNAME'])){
  // header('Location:registration.html'); 
  // }
?>
      <!-- Example row of columns -->
      
    
      <p class="lead text-center text-muted"><font size="6" color="black">Latest books</font></p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
        </div>

        <?php } ?>
      </div> <br>
      	<center><a href="#" class="btn btn-info"><font color="blue" class="lead text-center text-muted" > See more </font></a></center>
	<hr size="10" color="dark_blue">

	<p class="lead text-center text-muted"><font size="6" color="black">Best Sellers</font></p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <marquee><img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>"></marquee>
          </a>
        </div>

    
        <?php } ?>
    
      </div><br>
      	<center><a href="#" class="btn btn-info"><font color="blue" class="lead text-center text-muted"> See more </font></a></center>
      <hr size="10" color="dark_blue">

<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>