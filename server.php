
<?php include('db_connect.php');?>
<?php
session_start();
$error=array();
$username="";
$email="";
$password_1="";
$password_2="";
$category="";


if(isset($_POST['submit'])){
    $username= mysqli_real_escape_string($db, $_POST['username']);
    $email= mysqli_real_escape_string($db, $_POST['email']);
    $password_1= mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2= mysqli_real_escape_string($db, $_POST['password_2']);
    $category =mysqli_real_escape_string($db, $_POST['category']);

if($password_1==$password_2){
  $check_query="SELECT * FROM user WHERE username= '$username' or email= '$email' LIMIT 1";
   $results=mysqli_query($db,$check_query);
   $user= mysqli_fetch_assoc($results);
    if(($user)){
      if($user['username']==$username) {
       array_push($error,"username already exists");

     }
     if($user['email']==$email){
       array_push($error,"email already exits");
     }
    }
  if(count($error)==0){
     $password=md5($password_1);
    $query="INSERT INTO user (username,email,password,category) VALUES( '$username','$email','$password','$category')";
     $result=mysqli_query($db,$query);
     if(($result)){
      if($category =='Seller'){
     $_SESSION['username']=$username;
     header("location: Sindex.php");
   
     }
     elseif($category =='Buyer'){
     $_SESSION['username']=$username;
     header("location: bindex.php");
   
     }
   }
 }

}
 else{
  array_push($error,"passwords dont match");
 }
}
if(isset($_POST['login'])){
  $email= mysqli_real_escape_string($db, $_POST['login_email']);
  $password= mysqli_real_escape_string($db, $_POST['password']);
  $password=md5($password);
  $query="SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1 ";
  $result= mysqli_fetch_assoc(mysqli_query($db,$query));
  if($result){
    $query ="SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1";
    $result1= mysqli_fetch_assoc(mysqli_query($db,$query));
    if(($result1)){
    if($result1['category'] == 'Seller'){
    $_SESSION['username']=$result1['username'];
    header("location: Sindex.php");
    }
    elseif($result1['category'] == 'Buyer'){
    $_SESSION['username']=$result1['username'];
    header("location: bindex.php");
    }
   }
  }
  else{
  array_push($error,"Email or password does not  match");
  }


}

?>