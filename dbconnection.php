<?php
$servername='localhost';
$username='root';
$dbname='dianedatabase';
$pw='';


$conn="mysqli $servername,$username,$dbname,$pw";

if ($conn) {
   // echo "Connection Successfully";

header("Location:Signup.php");

}else {
    echo "Failed";
}



?>

