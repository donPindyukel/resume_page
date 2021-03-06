<?php
session_start(session_name('php_for_beginners'));

require_once "vendor/autoload.php";
$i=1;
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
    </head>
    <body>

        <header><div class="content-wraper clearfix">
	<div class="vertical-center-left">
	<a class="logo" href="index.html">
		<img src="img/logo.png" alt="Loftblog">
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
	

</div></header>
     
        <section>
            <aside><div class="sidebar">
<ul class="main-menu">
	<li class="menu-item-1 current"><a href="index.php" class="about-me">Обо мне</a></li>
	<li class="menu-item-2  none"><a href="portfolio.php" class="portfolio">Мои работы</a></li>
	<li class="menu-item-3 none"><a href="form-contacts.php" class="form-contacts ">Связаться со мной</a></li>
</ul>
<ul class="sidebar-contacts">
    <li class="contacts-item-1"><p>Контакты</p></li>
	<li class="contacts-item-2"><a href="mailto:a913000@gmail.com" class="email">a913000@gmail.com</a></li>
	<li class="contacts-item-3"><a href="tel:+79163196899" class="phone">+7 916 391 3000</a></li>
	<li class="contacts-item-4"><a href="skype:pin913" class="skype">pin913</a></li>
</ul>	
</div>	</aside>
            <article>
               <div class="main-information">
	<h1 class="main-title">Основная информация</h1>
	<div class="inf-content-wrap clearfix">
		<div class="image-wrap">
			<div class="photo">
				<img src="img/photo.jpg" alt="" ></div>
		</div>
		<div class="information-wrap">
			<ul class="main-information-list">
				<li class="inform-item-1">
					<p class="name">
						<span>Меня зовут:</span>
						Пиндюк Андрей Анатольевич
					</p>
				</li>
				<li class="inform-item-2">
					<p class="age">
						<span>Мой возраст:</span>
						31 год
					</p>
				</li>
				<li class="inform-item-3">
					<p class="city">
						<span>Мой город:</span>
						Новосибирск, Россия
					</p>
				</li>
				<li class="inform-item-4">
					<p class="prof">
						<span>Моя специализация:</span>
						FRONTEND разработчик
					</p>
				</li>
				<li class="inform-item-5">
					<span>Ключевые навыки:</span>
					<ul class="skils">
						<li class="skil-item-1">html</li>
						<li class="skil-item-2">CSS</li>
						<li class="skil-item-3">javascript</li>
						<li class="skil-item-4">gulp</li>
						<li class="skil-item-5">git</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	</div>

	<div class="experience">
		<h1 class="work-experiance">Опыт работы</h1>
		<ul class="exp-list">
			<li class="exp-item-1">
				<p>
					<span>"ИП Боровицкий" - Продавец дисков</span>
					<br>Сентябрь 2005 - Август 2008</p>
			</li>
			<li class="exp-item-2">
				<p>
					<span>ООО "Системы бесопасности - Системный администратор"</span>
					<br>Июнь 2008 - Июль 2010</p>
			</li>
		</ul>
	</div>


<div class="education">
	<h1 class="educational-title">Образование</h1>
	<ul class="educational-institutions">
		<li class="edu-item-1">
			<p>
				<span>Незаконченное высшее. СПБГУ ИТМО</span>
				<br>Октябрь 2012 - по настоящее время</p>
		</li>
		<li class="edu-item-2">
			<p>
				<span>Курсы Loftschool.ru</span>
				<br>Ноябрь 2014 - по настоящее время</p>
		</li>
	</ul>
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
        </div>
        <footer><div class="footer-wraper"><a href="autorize.php" class="lock" ></a>
<p class="copyright">(c)2015. Данный сайт разработан собственными руками и головой</p> <?php if ( $_SESSION['auth'] == true) : ?>
<a href="php/logout.php" class="logout">Выйти</a></div>
<?php endif ?>
            <a href="index.html" class="on_main">На главную</a>
        </div>
           
</footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
        

        <script src="js/main.js"></script>
        
        
    </body>
</html>
