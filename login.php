<?php
if ($_POST['username']=='BESHOY' and $_POST['password']=='258852'){
    header('location: index.html');
}else{
    header('location: error.html');
}

?>