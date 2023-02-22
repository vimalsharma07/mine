<?php

$con= mysqli_connect('localhost','root','','portfolio');

if($con==true){
    echo"DATAbase    added success fully";
}else{
    echo"   Not DATAbase success fully";
}

?>