<?php
/**
 * @Author: sahapap
 * @Date:   2017-02-01 15:54:18
 * @Last Modified by:   sahapap
 * @Last Modified time: 2017-02-01 15:56:14
 */

/*if ($_POST['username'] == "root" && $_POST['pass'] == "123") {
    # code...
    echo "Complete";
}else{
    echo "error!!!";
}*/

$user = $_POST['username'];
$pass = $_POST['pass'];

if ( strcmp($user, "admin") == 0 || strcmp($pass, "1234")==0 ) {
    header("Location:HostAdmin.html");
}else if ( strcmp($user, "hospital") == 0 || strcmp($pass, "5555")==0 ) {
    header("Location:admin.html");
}

//echo $x; 
    


?>