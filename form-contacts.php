<?php

session_start( session_name('php_for_beginners') );

$msg = $_SESSION['message'];

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Сайт портфолио</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

      <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="css/style.css">

      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
   
    <body>
    <div class="black-wraper" id="back"></div>
        <header><div class="content-wraper clearfix">
	<div class="vertical-center-left">
	<a class="logo" href="index.html">
		<img src="img/logo.png" alt="Loftblog">
                <img src="img/mobile-logo.png" alt="Loftblog" class="mobile-logo">
		<span class="logo-text">Сайт портфолио</span>
	</a>
	</div>
	<div class="vertical-center-right">
	<ul class="social-buttons">
		<li class="social-item-1">
			<a href="vk.com" class="vk">Vk</a>
		</li>
		<li class="social-item-2">
			<a href="twitter.com" class="tw">Twitter</a>
		</li>
		<li class="social-item-3">
			<a href="facebook.com" class="fc">Facebook</a>
		</li>
		<li class="social-item-4">
			<a href="git.com" class="git">git</a>
		</li>
	</ul>
	</div>
	            

</div>
      <div class="mobile-menu" id="mobile-menu-button">
	
</div> 
            <div class="mobile-menu-navigator" id="mobile-menu">
       <ul class="main-menu">
  <li class="menu-item-1 none"><a href="index.html" class="about-me">Обо мне</a></li>
  <li class="menu-item-2  none"><a href="portfolio.html" class="portfolio">Мои работы</a></li>
  <li class="menu-item-3 current"><a href="form-contacts.html" class="form-contacts ">Связаться со мной</a></li>
</ul>
     </div>
        </header>
     
        <section>
            <aside><div class="sidebar">
<ul class="main-menu">
	<li class="menu-item-1 none"><a href="index.php" class="about-me">Обо мне</a></li>
	<li class="menu-item-2  none"><a href="portfolio.php" class="portfolio">Мои работы</a></li>
	<li class="menu-item-3 current"><a href="form-contacts.php" class="form-contacts ">Связаться со мной</a></li>
</ul>
<ul class="sidebar-contacts">
    <li class="contacts-item-1"><p>Контакты</p></li>
	<li class="contacts-item-2"><a href="mailto:a913000@gmail.com" class="email">a913000@gmail.com</a></li>
	<li class="contacts-item-3"><a href="tel:+79163196899" class="phone">+7 916 391 3000</a></li>
	<li class="contacts-item-4"><a href="skype:pin913" class="skype">pin913</a></li>
</ul>	
</div>	</aside>
            <article>
               <div class="contact-form-wrap">
	<form action="php/send_mail.php" class="contacts-form" method="post" id="contact-form" enctype="multipart/form-data">
		<h3 class="title-form">
			У вас интересный проект? Напишите мне
			</h3>
			<div class="form-position-wrap">
			<div class="input-fields">
		<div class="name-field-wrap">
                   
		    <h4 class="name-field-title">Имя</h4>
			<input type="text" class="name-field" name="name" placeholder="Как к Вам обращаться" data-validation="name">
		</div>
		<div class="mail-field-wrap">
		 <h4 class="mail-field-title">Email</h4>
			<input type="text" class="mail-field" name="mail" placeholder="Куда мне писать" data-validation='mail'>
		</div>
		</div>
		<div class="msg-field-wrap">
		 <h4 class="msg-field-title">Сообщение</h4>
			<textarea class="msg-field" name="msg" placeholder="Кратко в чем суть" data-validation="text"></textarea>
		</div>
		<div class="captcha-field-wrap">
		 <h4 class="captcha-field-title">Пройдите проверку</h4>
			<div class="g-recaptcha" data-sitekey="6LcaGQwTAAAAAKRcksZBhbNdfLh5QruyUAbBROZh"></div>
			
		</div>
		<input type="submit" value="Отправить">
        <input type="reset" value="Очистить">
	
	</form>
	 </div>
</div>

 
            </article>
<div class="contacts-line">
  <ul class="sidebar-contacts">
  <li class="contacts-item-2"><a href="mailto:a913000@gmail.com" class="email">a913000@gmail.com</a></li>
  <li class="contacts-item-3"><a href="tel:+79163196899" class="phone">+7 916 391 3000</a></li>
  <li class="contacts-item-4"><a href="skype:pin913" class="skype">pin913</a></li>
</ul> 
</div>

<div class="mob-soc-but">
  <ul class="social-buttons">
    <li class="social-item-1">
      <a href="vk.com" class="vk">Vk</a>
    </li>
    <li class="social-item-2">
      <a href="twitter.com" class="tw">Twitter</a>
    </li>
    <li class="social-item-3">
      <a href="facebook.com" class="fc">Facebook</a>
    </li>
    <li class="social-item-4">
      <a href="git.com" class="git">git</a>
    </li>
  </ul>
</div>
        </section>

        <footer><div class="footer-wraper"><a href="autorize.php" class="lock" ></a>
<p class="copyright">(c)2015. Данный сайт разработан собственными руками и головой</p> <?php if ( $_SESSION['auth'] == true) : ?>
<a href="php/logout.php" class="logout">Выйти</a></div>
<?php endif ?>
            <a href="index.html" class="on_main">На главную</a>
        </div>
           
</footer>
     <div class="success-wrap" id="success-add">
<div class="success-add-prj" >
      <p class="msg-success"><span>Отправлено!</span>Я свяжусь с Вами в ближайшее время</p>
      <div class="close-success-pict"></div>
    </div></div>
<div class="error-wrap" id="error-msg">
<div class="error-text" id="error">
      <p class="msg-error"><span>Ошибка!</span>Заполните каптчу.</p>
      <div class="close-error"></div>
    </div>
    </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>


        <script src="js/main.js"></script>
    </body>  

</html>
