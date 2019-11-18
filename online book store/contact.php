<?php
 session_start(); 
  $title = "Contact";
  require_once "./template/header.php";
?>

    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			
			<form class="form-horizontal">
				<div class="container">
			  	<fieldset>
				    <legend class="text-white">Contact</legend>
				    <p class="lead"><font color="white">we’d love to hear from you! Complete the form to send me an email.</font></p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label"><font color="white">Name</font></label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputName" placeholder="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label"><font color="white">Email</font></label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label"><font color="white">Textarea</font></label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea"></textarea>
				        	<span class="help-block"><font color="white">A longer block of help text that breaks onto a new line and may extend beyond one line.</font></span>
				        </div>
				      	</div>
				    
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="submit" class="btn btn-primary">Submit</button>
				        	<button type="reset" class="btn btn-info">Cancel</button>
				      	</div>
				    </div>
				</div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
 <?php
  require_once "./template/footer.php";
?>