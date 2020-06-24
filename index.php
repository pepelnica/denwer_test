<!DOCTYPE html>
<html>  
    <head>
        <title>
            PHP
        </title>
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <?php
                if ($_COOKIE['user'] == ''):
            ?>
            <div class="row">
                <div class="col">
                    <h2>Регистрация</h2>
                    <form action="check.php" method="post">
                        <input type="text" class="form_control" name="username" 
                               id="username" placeholder="Введите логин"><br>
                        <input type="text" class="form_control" name="password" 
                               id="password" placeholder="Введите пароль"><br>
                        <input type="text" class="form_control" name="mail" 
                               id="mail" placeholder="Введите эл. почту"><br>
                        <button class ="btn btn-succes" type="submit">
                            Зарегестрироваться</button>
                    </form>
                </div>
                <div class="col">
                    <h2>Авторизация</h2>
                    <form action="auth.php" method="post">
                        <input type="text" class="form_control" name="username" 
                               id="username" placeholder="Введите логин"><br>
                        <input type="text" class="form_control" name="password" 
                               id="password" placeholder="Введите пароль"><br>
                        <button class ="btn btn-succes" type="submit">
                            Авторизироваться</button>
                    </form>
                </div>
            <?php else: ?>
                <h2>Вы уже авторизированы! <?=$_COOKIE['user']?>. 
                    Чтобы выйти из аккаунта, нажмите 
                    <a href="exit.php">здесь</a>.</h2>
            <?php endif;?>
            </div>
        </div>    
    </body>
</html>