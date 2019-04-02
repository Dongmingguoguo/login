<?php 
$host="localhost";
$user="root";
$password="Aa994410";
$db="demo";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Successful!";
    # code...
}

$sql = "SELECT `User`, `Pass` FROM `login` WHERE `User`='".$_POST['username']."' and `Pass`= '".$_POST['password']."'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result) ;
    header('Location: http://www.hao123.com');
    
} 

mysqli_close($conn); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form in HTML5 and CSS3</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="font-awesome.min.css">
</head>
<body>
    <div class="container">
        <img src="img/logo.png" alt="">
        <form action="login.php" method="POST" >
            <div>
                <input type="text" id="username" name="username" placeholder="Enter the User Name"/>
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="password">
            </div>
            <input type="submit" type="submit" value="Login" class="btn-login"/>
        </form>
    </div>

</body>
</html>