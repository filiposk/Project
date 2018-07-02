<?php include_once "config.php" ?>
<!doctype html>
<html>
<head>   
    <?php include_once "template/head.php" ?>
</head>

<body>
   <?php include_once "template/header.php" ?>
   <?php include_once "template/navigation.php" ?> 

    
    <div class="container" style="margin: auto; width: 50%; float: center;" >


		<form role="form">
			<h2>Registriraj se <small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Korisničko ime" tabindex="1">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Nadimak" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email adresa " tabindex="4">
			</div>
			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Lozinka " tabindex="5">
			</div>
			<div class="form-group">
				<input type="cpassword" name="cpassword" id="cpassword" class="form-control input-lg" placeholder="Ponovi lozinku" tabindex="6">
			</div>	
			
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-md-6"><input type="submit" value="Napravi moj račun" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Prijavi me</a></div>
			</div>
		</form>
</div>



   <?php include_once "template/footer.php" ?> 
   <?php include_once "template/scripts.php" ?> 
</body>



</html>