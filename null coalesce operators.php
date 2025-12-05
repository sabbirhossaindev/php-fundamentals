<?php
$username = null;

$localIdUser = $username == null ? "Sabbir" : $username;

if($username != null){
    $localIdUser = $username;
}else{
    $username = "null";
}

echo "Good Morning $localIdUser";