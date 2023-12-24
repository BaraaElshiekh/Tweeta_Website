<?php

$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['secondtname'];
$address=$_REQUEST['address'];


if(isset($_POST['btntest']))

{

    $host="localhost";
    $user="root";
    $password="";
    $db="tweetaaa";

    $conn = mysqli_connect($host,$user,$password,$db);


    $insert="insert into teetaaa values('$firstname','$secondname','$address')";

    mysqli_query($connm,$insert);

    if($conn)
    {
        echo("<h1> style='color;green;'>your Registration is Done!</h1>");
    }
    else
    {
        echo("<h1> style='color;blue;'>your Registration is Failed!</h1>");
    }


}





?>