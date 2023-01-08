<?php


 $con = mysqli_connect("localhost", "root", "", "uang");

// $username, $password, $database);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "";
// mysqli_close($conn);

function base_url($url = null) {
    $base_url = "http://localhost/uang";
    if($url != null) {
        return $base_url."/".$url;
    }
    else {
        return $base_url;
    }
}

?>