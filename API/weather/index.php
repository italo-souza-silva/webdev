<?php include("weatherApi.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
    
		<title>Weather webpage!</title>
  </head>
  <body>
		<div class="container">      
			<h1>What's The Weather?</h1>                
			<form>
				<fieldset class="form-group">
					<label for="city">Enter the name of a city.</label>
					<input type="text" class="form-control" name="city" id="city" placeholder="E.g: tokyo,jp | São Paulo,br">
				</fieldset>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
			<div class= "weatherMsg">
			<?php 
        if ($weather != "") {                  
          echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
				}else if ($error != "") {
					echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
				};
				
			?>
			</div>
		</div>
		


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>