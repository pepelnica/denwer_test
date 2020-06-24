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
                    <h2>�����������</h2>
                    <form action="check.php" method="post">
                        <input type="text" class="form_control" name="username" 
                               id="username" placeholder="������� �����"><br>
                        <input type="text" class="form_control" name="password" 
                               id="password" placeholder="������� ������"><br>
                        <input type="text" class="form_control" name="mail" 
                               id="mail" placeholder="������� ��. �����"><br>
                        <button class ="btn btn-succes" type="submit">
                            ������������������</button>
                    </form>
                </div>
                <div class="col">
                    <h2>�����������</h2>
                    <form action="auth.php" method="post">
                        <input type="text" class="form_control" name="username" 
                               id="username" placeholder="������� �����"><br>
                        <input type="text" class="form_control" name="password" 
                               id="password" placeholder="������� ������"><br>
                        <button class ="btn btn-succes" type="submit">
                            ����������������</button>
                    </form>
                </div>
            <?php else: ?>
                <h2>�� ��� ��������������! <?=$_COOKIE['user']?>. 
                    ����� ����� �� ��������, ������� 
                    <a href="exit.php">�����</a>.</h2>
            <?php endif;?>
            </div>
        </div>    
    </body>
</html>