<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личная страница</title>
  <link rel='stylesheet' href='css/index.css'>
  <link rel="stylesheet" href="css/header.css">
</head>
<body>
  <header>
    <div class="headerTop">
        <img class="logo" src="img/Frame28.png" alt="">
        
        <a href="{{'logo'}}" ><img class="exit"src="img/icons8-войти-302.png" alt=""></a>
        
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
  <div class="main">
    <div class="profile-info">
      <div class="profile-info-div">
      <img src="{{ asset('/storage/'.Auth::user()->avatar)}}" class="pimg-1">
      <hr class="green-line">
      <div class="profile-info-1">
        <img src="img/4.png">
        <img src="img/5.png">
      </div>
      <div class="profile-info-2">
      <img src="img/6.png">
      </div>
      <div class="profile-info-3">
        <p>день рождения:{{Auth::user()->birthday}}</p>
        
      </div>
      </div>
        <div class="button-settings">
        <img src="img/7.png"><p>Настройки</p>
        </div>
    </div>
    <div class="profile-post">
      <h1>{{Auth::user()->first_name;}} {{Auth::user()->lest_name}}</h1>
      <p>Привет мир!</p>
      <hr class="green-line-1">
      <div class="create-post">
        <div class="create-post-1">
        <img src="img/4.png"><a href="{{'create-post'}}">Cделать пост</a>
        </div>
      </div>
      <hr class="green-line-1">
      @foreach($posts as $post)
      @if(Auth::user()->id == $post-> user_id )
      <div class="poct">
        <div class="user-post" data-aos="fade-up">
          <div class="user-post-info-1">
            <img src="{{ asset('/storage/'.Auth::user()->avatar)}}" class="himg"><h1>{{Auth::user()->first_name;}} {{Auth::user()->lest_name}}</h1>
          </div>
          <hr class="green-line-2">
          <div class="post-img">
          <img src="{{ asset('/storage/'.$post->img)}}" class="post-img">
          </div>
          <hr class="green-line-2">
          <p class="user-post-p">{{$post->content}}</p>
          <hr class="green-line-2">
          <div class="user-post-like">
            <img src="img/9.png"><p>0</p>
          </div>
        </div>
      </div>
      @endif
      @endforeach
      
    </div>
    <div class="profile-media">
      <div class="media-example">
        <img src="img/10.png"><p>Желания</p>
      </div>
      <div class="media-example">
        <img src="img/10.png"><p>Фото</p>
      </div>
      <div class="media-example">
        <img src="img/10.png"><p>Видео</p>
      </div>
      <div class="media-example">
        <img src="img/11.png"><p>Посты</p>
      </div>
      <div class="media-example">
        <img src="img/12.png"><p>Друзья</p>
      </div>
    </div>
  </div>
</body>
</html>