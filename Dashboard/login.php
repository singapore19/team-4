<?php
if($_GET["email"] == "admin"){
    header("Location: index.html");
}else{
    header("Location: voluteer.html");
}
?>