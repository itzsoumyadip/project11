<?php
	// the shopping cart needs sessions, to start one
	/*
		Array of session(
			cart => array (
				book_isbn (get from $_GET['book_isbn']) => number of books
			),
			items => 0,
			total_price => '0.00'
		)
	*/
	session_start();
	require_once "./functions/database_functions.php";
	// print out header here
	$title = "Checking out";
	require "./template/header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
	<table class="table">
		<tr>
			<th>Item</th>
			<th>Price</th>
	    	<th>Quantity</th>
	    	<th>Total</th>
	    </tr>
	    	<?php
			    foreach($_SESSION['cart'] as $isbn => $qty){
					$conn = db_connect();
					$book = mysqli_fetch_assoc(getBookByIsbn($conn, $isbn));
			?>
		<tr>
			<td><?php echo $book['book_title'] . " by " . $book['book_author']; ?></td>
			<td><?php echo "<i class=\"fa fa-inr\"></i>" . $book['book_price']; ?></td>
			<td><?php echo $qty; ?></td>
			<td><?php echo "<i class=\"fa fa-inr\"></i>" . $qty * $book['book_price']; ?></td>
		</tr>
		<?php } ?>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th><?php echo $_SESSION['total_items']; ?></th>
			<th><?php echo "<i class=\"fa fa-inr\"></i>" . $_SESSION['total_price']; ?></th>
		</tr>
	</table>
	<form method="post" action="purchase.php" class="form-horizontal">
		<?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
			<p class="text-danger">All fields have to be filled</p>
			<?php } ?>
		<div class="form-group">
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="col-md-4" class="form-control">
			</div>
		</div>
		                     <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-face zmdi-hc-lg mdc-text-light-blue "></i></label>
                                <input type="text" name="username" id="username" placeholder="User Name"/>
							</div>
				           <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email animated  bounce  zmdi-hc-lg mdc-text-light-blue"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
							</div>	
							<div class="form-group">
                                <label for="ph"><i class="zmdi zmdi-phone zmdi-hc-lg mdc-text-light-blue"></i></label>
                                <input type="tel" name="ph" id="ph" placeholder="Phone Number"/>
                            </div>  			
		<div class="form-group">
			<label for="address" class="control-label col-md-4">Address</label>
			<div class="col-md-4">
				<input type="text" name="address" class="col-md-4" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label for="city" class="control-label col-md-4">City</label>
			<div class="col-md-4">
				<input type="text" name="city" class="col-md-4" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="zip_code" class="control-label col-md-4">Zip Code</label>
			<div class="col-md-4">
				<input type="text" name="zip_code" class="col-md-4" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="control-label col-md-4">Country</label>
			<div class="col-md-4">
				<input type="text" name="country" class="col-md-4" class="form-control">
			</div>
		</div>
		                       <div class="form-group">
                                 <div class="gen">
                                    <input type="radio" name="gn" id="gen" value="Male"><i class="zmdi  zmdi-male zmdi-hc-lg mdc-text-light-blue"></i>MALE
                                     <input type="radio" name="gn" value="FeMale"><i class="zmdi  zmdi-female zmdi-hc-lg mdc-text-light-blue"></i>FEMALE
								 </div>
								 <div class="form-group">
                                <label for="pass">&nbsp<i class="zmdi zmdi-lock zmdi-hc-lg  mdc-text-red"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>

		<div class="form-group">
			<input type="submit" name="submit" value="Purchase" class="btn btn-primary">
		</div>
	</form>
	<p class="lead">Please press Purchase to confirm your purchase, or Continue Shopping to add or remove items.</p>
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>