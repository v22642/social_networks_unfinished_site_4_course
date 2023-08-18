<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Создание поста</title>
  <link rel='stylesheet' href='css/create-post.css'>
  <link rel="stylesheet" href="css/header.css">
</head>
<body>
  <header>
    <div class="headerTop">
        <img class="logo" src="img/Frame28.png" alt="">
        
        <a href="" ><img class="exit"src="img/icons8-войти-302.png" alt=""></a>
        
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
        
    </div>
</header>
<div class="y">

</div>
  <div class="create-post">
    <h1>Создать пост</h1>
    <img>
    <form method="POST" action="{{ route('create-post') }}" enctype="multipart/form-data" action="">
      @csrf
      <label class="label">
        
        <input placeholder="Что нового?" class="input" name="content">
        <hr class="green-line">
        <input type="file" name="img">
        <button class="button-send">Опубликовать</button>
      </label>
    </form>
  </div>
</body>
</html>