<?php  
session_start();

$message='';    

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'examoo';
$db= mysqli_connect($host,$username,$password,$db_name);


if(isset($_POST['submit']))
{
    $email          =   $_POST["email"];
    $password    =   $_POST["password"];

    $query = "Select * from login where email='$email' and password='$password'";
    $rec = $db->query($query);
    $count = mysqli_num_rows($rec);
    
    if ($count>0)
    {
    header("Location:mainpage.php");
    $_SESSION["name"] = $name;
    }
    
    else
    {
        $message = "Access denied";
    }
}
?>



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container-fluid">
                    <img src="code00.png" id="logo">
                        <div class="btn-group btn-group-lg">
                            <a href="index.php"><button type="button" class="btn btn-primary">Signin</button></a>
			</div>
		</div>
	</nav>    

    <br><br>
<br>
<div class="container">
  <section id="content">
      <form action="login.php" method="post">
      <h1>Login</h1>
      <h5> </h5>
      <div>
        <input type="text" placeholder="Email Id" required="" id="username" name="email"/>
      </div>
      <div>
        <input type="password" placeholder="Password" required="" id="password" name="password"/>
      </div>
      <div>
        <input type="submit" name="submit" value="Let Me In" />
      </div>

    </form>
</div>

    
  
</body>

</html>