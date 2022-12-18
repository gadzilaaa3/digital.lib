<?php

/*
if(isset($_SESSION['user'])){
    echo "user в сессии";
} else {
    echo 'no';
}
*/
?>

<?php

if(isset($_POST['email'])){
    echo validate($_POST['email']);
}

?>

<form action="" method="POST">
    <input type="text" name="email">
    <input type="submit">
</form>