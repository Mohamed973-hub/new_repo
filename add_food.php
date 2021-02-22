<!DOCTYPE html>
<?php include('connection.php') ?>
<?php

	if( !empty($_POST['fd_desc'])): {

		//Process the image that is uploaded by the user
		$name=$_POST['fd_name'];
		$desc=$_POST['fd_desc'];
		$image=$_POST['fileUpload'];
		
		//storind the data in your database
		$sql="INSERT INTO food(food_name,food_description,Food_img) VALUES(?,?,?) ";

	$stmt= $con->prepare($sql);

	if($stmt->execute([$name,$desc,$image])):{

		$Message="The Product '".$name."' Has Been Added Successfully ^_-";

		echo '<script>alert("'.$Message.'")</script>';
		
		}

	
	
	
endif;

	
	}
endif;


?>
<html lang="en">

<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	
	<link rel="stylesheet" type="text/css" href="cssfile.css">
<!--===============================================================================================-->

      
  
    
</head>
<body>



<div class="limiter">

	<div id="navbar">

		<div id="activediv">
			<a class="navbarLinks" id="addlink" href="add_food.php">Add  Product</a>
		</div>

		<div class="divnotactive" >
			<a class="navbarLinks" id="updatelink" href="update.php">Update Product</a>
		</div>

		<div class="divnotactive" >
			<a class="navbarLinks" id="deletelink" href="delete.php">Delete Product</a>
		</div>

		<div class="divnotactive" >
			<a class="navbarLinks" id="feedlink" href="feedback.php">Feedback Rev</a>
		</div>

    </div>
		<div class="container-login100">
        
			<div class="wrap-login100">
                
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" ”>
					

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="fd_name" placeholder="Food Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div  class="wrap-input100 validate-input" >
						<textarea id="food-desc" type="text" name="fd_desc" placeholder="Food Description"></textarea>
						<span class="focus-input100"></span>
						
                    </div>
                
                    <label id="lb-upload-file" for="test">
                    <div id="new-upload-btn"  >
                        <span id='sp-filebtn'>Upload Image</span>
						<input id="filebtn"  type="file" name="fileUpload" >
						<span class="focus-input100">Upload Image </span>
						<span class="symbol-input100">
                        <i id='upload-icon' class="fa fa-upload" aria-hidden="true"></i>
						</span>
                    </div>
                    </label>
					
					<div class="container-login100-form-btn">
						<input id="submit" type="submit" name="submit" value="Insert"> 
							
						</input>
					</div>

					<div class="text-center p-t-0">
						<span class="txt1">
							Status
						</span>
						<a class="txt2" href="#">
							No File Uploaded
						</a>
					</div>
<br>
					<div id="CreateAccDiv">
						<a id="link-create-acc" href="signup.php">
							Back To Home Page 
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>