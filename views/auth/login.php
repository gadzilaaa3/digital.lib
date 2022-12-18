<?php 
if(isset($_SESSION['authFailed'])){
?>
<script> alert('Неверный логин или пароль!'); </script>
<?php
$_SESSION['authFailed'] = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Авторизация</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/style.css"  />
</head>
<body>    
    <div class="container forma">
        <div class="header flex-row strength">
            <div class="logo">            
                <img src="../../assets/images/logo_max.png" alt="">
            </div>
            <h2 class="text-left w-100 m-left-right header-label">Электронная библиотека</h2>
            <div id="backtomain" class="flex-row" onclick='window.open("http://kamtk.ru/", "_self")'>
                <img class="arrow-left" src="../../assets/images/Arrow-Left.svg">
            <h2 class="text-right m-left-left header-label" id="backtomain">Вернуться на главную страницу</h2>     
            </div>
        </div>
        <form class="body flex-column" action="login" method="POST">        
            <h1>Авторизация</h1>
            <div class = "input">
                <input type="text" name="email" id="name" placeholder="Email" required>
            </div>             
            <div class = "input">
                <input type="password" name="password" id="name" placeholder="Пароль" required>
            </div> 
            <div class="flex-row-main">
                <div class="flex-column justify-content-evenly flex-start">
                    <div class="flex-row icon">
                        <img src="../../assets/images/Key.svg">
                        <a id="a-forgotpass" href="">Забыли пароль?</a>
                    </div>
                    <div class="flex-row icon">
                        <img src="../../assets/images/mail.svg">
                        <a id="email" href="">Email преподавателей</a>
                    </div>
                </div>
                <div class="flex-row">
                    <div id="rectangle"></div>
                </div>
                <div class="flex-column">
                    <div class = "input-button">
                        <input type="submit" name="name" id="name" value="Авторизоваться"> 
                        <img src="../../assets/images/Arrow-Right.svg">
                    </div> 
                </div>
            </div>       
        </form>
    </div>
</body>
</html>