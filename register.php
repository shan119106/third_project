<?php
include("home.php");
?>
<?php
include("server.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/register.css">
	<title></title>
</head>
<body>
	<div class="register_user">
		<nav>
			<form action="register.php" method="POST">
				<?php include('errors.php') ?>
            
            <input type="text"  id="username" name="username" class="register" placeholder="username" required><br>
          
            <input type="email"  id="email" name="email" class="register" placeholder="Email" required><br>
          
            <input type="password"  id="password-1" name="password_1" class="register" placeholder="Password"  pattern= "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title ="fill according to the given condition"required><br>
            <div class="password_details">
            	 <span id="letter" class="invalid">*A lowercase letter</span><br>
				  <span id="capital" class="invalid">*A capital (uppercase) letter</span><br>
				  <span id="number" class="invalid">*A number</span><br>
				  <span id="length" class="invalid">Minimum 8 characters</span>
            </div>
          
            <input type="password"  id="password-2" name="password_2" class="register" required placeholder="Confirm Password"><br>
            <input list="category" name="category" placeholder="Choose Role" required>
 		<datalist id="category">
	 <option value="Seller">
	 <option value="Buyer">
	 
   </datalist>
            <input type="submit" id="submit"  value="Register" name="submit">
			</form>
			
		</nav>
		<p>Already have an account?<a href="login.php" id="login">Sign In</a></p>
	</div>
	<script type="text/javascript">
		var myInput =document.getElementById("password-1");
		var letter =document.getElementById("letter");
		var capital =document.getElementById("capital");
		var number = document.getElementById("number");
		var length =document.getElementById("length");		
// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.querySelector(".password_details").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.querySelector(".password_details").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >=8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } 
  else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
	</script>
</body>
</html>