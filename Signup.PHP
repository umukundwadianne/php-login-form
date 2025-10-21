<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create your own account</h1>
    <form action="" method="post">

<label for="username">Username</label> 
<input type="text" name="username" ><br>
<label for="email">UserEmail</label>
<input type="email" name="email" ><br>
<label for="pw">Password</label>
<input type="password" name="pw" ><br>
<button type="submit" name="submit">SUBMIT</button>


    </form>
    <?php
    
include "dbconnection.php";





    if (isset($_POST['submit'])) {
    //echo "Button clicked";

$username=$_POST['username'];
$email=$_POST['email'];
$pw=$_POST['pw'];

 //echo $username."<br>",$email."<br>",$pw;

 $sql="INSERT INTO signup (username,email,pw) VALUES ('$username','$email','$pw')";

$query="mysqli-query($conn,$sql)";

    }
    
    ?>
</body>
</html>
