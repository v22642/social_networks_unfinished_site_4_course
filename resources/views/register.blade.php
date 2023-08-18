<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel='stylesheet' href='css/reg.css'>
  <link rel="stylesheet" href="css/header.css">
</head>
<body>
  <header>
    <div class="headerTop">
        <img class="logo" src="img/Frame28.png" alt="">
        
        <a href="{{'logo'}}"><img class="exit"src="img/icons8-войти-302.png" alt=""></a>
        
        <div class="hamburger-menu">
            <input class='exit'id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
        
            <ul class="menu__box">
                <li><a class="menu__item" href="{{'index'}}"><img class="img"src="img/Frame12.png" alt="">Лента</a></li>
                <li><a class="menu__item" href="{{'home'}}"><img class="img"src="img/icons8-пользователь-мужчина-в-кружке-502.png" alt="">Моя страница</a></li>
                <li><a class="menu__item" href="{{'messendher'}}"><img class="img"src="img/icons8-облако-диалога-с-точками-502.png" alt="">Мессенджер</a></li>
                <li><a class="menu__item" href="{{'friends'}}"><img class="img"src="img/icons8-мужчина-пользователь-302.png" alt="">Друзья</a></li>
                <li><a class="menu__item" href="{{'logo'}}"><img class="img"src="img/icons8-войти-302.png" alt="">Войти</a></li>
            </ul>
        </div>
        
    </div>
    <div class="headerLeft">
        <ul class="pc">
            <li><a href="{{'index'}}"><img class=""src="img/Frame12.png" alt=""></a></li>
            <li><a href="{{'home'}}"><img class=""src="img/icons8-пользователь-мужчина-в-кружке-502.png" alt=""></a></li>
            <li><a href="{{'messendher'}}"><img class=""src="img/icons8-облако-диалога-с-точками-502.png" alt=""></a></li>
            <li><a href="{{'friends'}}"><img class=""src="img/icons8-мужчина-пользователь-302.png" alt=""></a></li>
        </ul>
        
        
    </div>
</header>
<div class="y">

</div>
  <div class="block-reg">
    <div>
      <h2 class="text-h">Регистрация</h2>
      <hr class="green-line">
    </div>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" action="">
      @csrf
      <div>
        <h3 class="text">Имя</h3>
        <input class="input" name="first_name">
      </div>
      <div>
        <h3 class="text">Фамилия</h3>
        <input class="input" name="lest_name">
      </div>
      <div>
        <h3 class="text">Email</h3>
        <input class="input" name="email">
      </div>
      <div>
        <h3 class="text">Пароль</h3>
        <input type="password" class="input" name="password">
      </div>
      <div>
        <h3 class="text">Повторите пароль</h3>
        <input type="password" class="input" name="password_confirmation">
      </div>
      <div>
        <h3 class="text">Дата рождения</h3>
        <input type="text" class="input" name="birthday">
      </div>
      <div>
        <h3 class="text">Аватарка</h3>
        <input type="file" name="avatar">
      </div>
      <label>
        <input type="checkbox" value="yes" name="agreement"><p>Подтверждая эту информацию, я согласен c Privacy Policy  и Term of use</p>
      </label>
      <br>
      <button class="button-reg">Регистрация</button>
    </form>
    <p class="autoriz-text">У Вас уже есть аккаунт? <a href="#">Войдите!</a></p>
  </div>
</body>
</html>