<?php  
session_start();

$message='';    

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'examoo';
$db= mysqli_connect($host,$username,$password,$db_name);



if(isset($_POST['Submit']))
{
    
	$name = $_POST["name"];
	$email = $_POST["email"];
        $contact = $_POST["contact"];
        $password = $_POST["password"];

                
	$_SESSION["name"] = $name;
	$_SESSION["email"] = $email;
	$_SESSION["password"] = $password;
        $_SESSION["contact"] = $contact;
        

$query = "INSERT INTO login
         (name,email,contact,password)     
            VALUES
         ('$name','$email','$contact','$password')";
    

$success = $db->query($query);



if($success)
{
    header("Location:mainpage.php");
    $_SESSION["id"] = $id;
}
        
else
{
    $error_message = $db->error;
    $done =  "<p>An error occured : $error_message </p>";
}
   
}   

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Signin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="signin.css">
    </head>
    <body>



<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
      <img src="code00.png" id="logo">
        <div class="btn-group btn-group-lg">
            <a href="login.php"><button type="button" class="btn btn-primary">Login</button></a>
        </div>
  </div>
</nav>            

<br><br><br><br>

<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Create an Account</h1>
            <p class="font-italic text-muted mb-0">Create your account and learn new programming langugaes to enhance your coding skills .</p>
            
        </div>

        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="index.php" method="post">
                <div class="row">

                    
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="name" placeholder="Your Good Name" class="form-control bg-white border-left-0 border-md" required="">
                    </div>

                   
                    
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" placeholder="Email Address" name="email" class="form-control bg-white border-left-0 border-md" required="">
                    </div>

                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        <input id="lastName" type="text" name="contact" placeholder="What's App Number" class="form-control bg-white border-left-0 border-md" required="">
                    </div>


                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" placeholder="Password" name='password' class="form-control bg-white border-left-0 border-md" required="">
                    </div>

                    
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-linkedin text-muted" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input id="password" type="text" placeholder="Linkedln Profile" name='password' class="form-control bg-white border-left-0 border-md" required="">
                    </div>


                 
                    <div class="form-group col-lg-12 mx-auto mb-0">
                    </div>
                	
                    <button type="submit" name="Submit" class="submit btn btn-primary btn-block py-2">Sign Up</button>
                    
                </div>
            </form>
		
        </div>
    </div>
</div>


    
    </body>
</html>

