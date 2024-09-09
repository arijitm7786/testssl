<?php
$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod==="HEAD"){
    header("Content-Type: image/png");
}
else{
    header("Location: http://169.254.169.254/");
    header("Metadata: true")
}
