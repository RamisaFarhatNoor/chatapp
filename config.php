<?php
$conn=mysqli_connect("localhost","root","","chatbox");
if(!$conn){
    echo "Conected".mysqli_connect_error();
}

?>