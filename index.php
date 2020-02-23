<!DOCTYPE html>
<html lang="en">
<head>
  <title>Family Language</title>
  <meta charset="UTF-8">
  <link href="/css/main.css" rel="stylesheet" />

</head>
<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>

<body style="background-color: #fff;">

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="post">
          <span class="login100-form-title p-b-43">
            Вход
          </span>

          <div class="form-button">
          <span class="login-text">Эл. адрес</span>
          <div class="wrap-input100 validate-input">
            <input class="input100" name="user_mail" type="email">
          </div>

          <span class="login-text">Пароль</span>
          <div class="wrap-input100 validate-input">
            <input class="input100" name="user_pas" type="password">
          </div>

          </div>
         

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="login">
              Авторизоваться
            </button>
          </div>

          <span class="ili">Или</span>

          <div class="container-login100-form-btn">
              <form>
                  <input type="button" class="login100-form-btn" value="Зарегистрироваться" onclick=" location.href='reg.php'">
            </form>
            
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
    if(isset($_POST["login"])){
        if(!empty($_POST['user_mail']) && !empty($_POST['user_pas'])) {
            $email=htmlspecialchars($_POST['user_mail']);
            $pass=htmlspecialchars($_POST['user_pas']);
            $query =mysqli_query($link, "SELECT * FROM user WHERE user_mail='".$email."' AND user_pas='".$pass."'");
            $numrows=mysqli_num_rows($query);
            if($numrows!=0)
            {
                while($row=mysqli_fetch_assoc($query))
                {
                    $dbemail=$row['user_mail'];
                    $dbpass=$row['user_pas'];
                }
                if($email == $dbemail && $pass == $dbpass)
                {
                        echo ' <meta http-equiv="refresh" content="0;URL=main.php">';
                   
                }
            } else {
                echo "<script>
            document.getElementById('simple').innerHTML='Неправильный email или пароль';
        </script>"; 
            }
        } else {
            echo "<script>
            document.getElementById('simple').innerHTML='Заполните все поля';
        </script>";
        }
    }?>
    


</body>
</html>
