<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
</head>
<style>
   body {
    background-image: url(img/loginBack.png); 
    background-color: #F1CE8F;
    background-size: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    z-index: 1;

   }
   .welcomeBlock {
    width: 500px; /* Ширина элемента в пикселах */
    height: 500px;
    margin: auto; /* Выравниваем по центру */
    margin-top: 150px;
    background: #fff;
    border-radius: 15px 15px 15px 15px;
   }
   .text {
  width: 100%;
  display: block;
  margin-top: 100px;
  font-family: Arial;
  font-size: 20px;
  padding-top: 200px;
  text-align: center;
  color: #C3BCBC;
   }
   .login100-form-btn {
  justify-content: center;
  align-items: center;
  margin-top: 25px;
  margin-left: 120px;
  width: 50%;
  height: 45px;
  border-radius: 10px;
  background: #F38181;
  font-family: Arial;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  letter-spacing: 1px;
  -webkit-transition: all 0.3s;
    }
    .login100-form-btn:hover {
         background: #F8ADAD;
    }
    
input {
  outline: none;
  border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}
  </style>

    <div class="welcomeBlock">
    <span class="text">Добро пожаловать в сервис &shy; по изучению английского языка Family Language!</span>
    <form>
        <input type="button" class="login100-form-btn" value="Войти" onclick=" location.href='index.php'">
            </form>
    </div>


<?php
$link = @new mysqli('localhost', 'id12319296_root', '123456789', 'id12319296_english');
if (mysqli_connect_errno()) {
  echo "Подключение невозможно: ".mysqli_connect_error();
}
?>



</body>
</html>
