<?php
echo "Hello World <br>";
//print("\n")
//echo "\n";
echo $_POST["Lname"] ;
echo " ";
echo $_POST["Sname"]."<br>";

$x = $_POST['Sid'];

//echo $x; 

if (strlen($x) == 13){
    echo $x;
}else{
    echo '<script>alert("error");</script>';
    sleep(5);
    echo'<script>window.location="./InputInformation.html";</script>';
 //   header('Location: ./InputInformation.html');
}


?>