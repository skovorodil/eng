<!DOCTYPE html>
<html lang="en">
<head>
  <title>Family Language - Регистрация</title>
  <meta charset="UTF-8">
    <link href="/css/main.css" rel="stylesheet" />
  <style>
   .logo {
    margin-top: 150px;
    margin-left: 110px;
    width: 698px;
    height: 500px;
   }
  </style>

</head>
<body style="background-color: #666666;">

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
    <form class="login100-form validate-form" method="post">
          <span class="login100-form-title p-b-43">
            Регистрация
          </span>
          <div class="form-button">
          <span class="login-text">Эл. адрес</span>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="email" type="email">
          </div>
          
      <span class="login-text">Имя</span>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="name">
          </div>

          <span class="login-text">Пароль</span>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="pass">
          </div>
          </div>

          <div class="container-login100-form-btn">
            <input type="submit" class="login100-form-btn" name="reg" id="reg" value="Зарегистрироваться">
            <span style="color:red; margin-top: 20px;" id="simple"></span>
          </div>
    </form>
        <div class="login100-more" style="background-image: url('img/loginBack.png');">
            <img class="logo" src="img/logo.png">
        </div>
      </div>
    </div>
  </div>
  
<?php
    $link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
    
    if(isset($_POST["reg"])){
        
        if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['pass'])) {
            $email=htmlspecialchars($_POST['email']);
            $name=htmlspecialchars($_POST['name']);
            $pass=htmlspecialchars($_POST['pass']);
            $query=mysqli_query($link, "SELECT * FROM user WHERE user_name='".$name."'");
            $numrows=mysqli_num_rows($query);
            if($numrows==0)
            {
                $sql="INSERT INTO user
                (user_name, user_mail, user_pas)
                VALUES('$name','$email', '$pass')";
                $result=mysqli_query($link,$sql);
                if($result){
                    echo '<meta http-equiv="refresh" content="0;URL=welcome.php">';
                } else {
                    echo  "Failed to insert data information!";
                }
            } else {
                echo "<script>
            document.getElementById('simple').innerHTML='Это имя пользователя уже используется, попробуйте другое';
        </script>";
            }
        } else {
            echo "<script>
            document.getElementById('simple').innerHTML='Заполните все поля';
        </script>";
        }
    }
    ?>  
  

</body>
</html>
