<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lacf
 */

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="wp-content/themes/wptheme/favicon.ico" type="image/x-icon">
		<title>Emagics l Экспресс доставка документов и грузов для вашей компании</title>
		<link rel="stylesheet" href="wp-content/themes/wptheme/css/style.css">
		<link rel="stylesheet" href="wp-content/themes/wptheme/css/media.css">
		<link rel="stylesheet" href="wp-content/themes/wptheme/css/slick.css">
		<link href="aos%402.3.1/dist/aos.css" rel="stylesheet">
		<meta property="og:type" content="profile">
		<meta property="og:title" content="Emagics l Экспресс доставка документов и грузов для вашей компании ">
		<meta property="og:description" content="Экспресс доставка документов и грузов по всему миру">
		<meta property="og:image" content="wp-content/themes/wptheme/img/pc_liner.png">
		<meta property="og:url" content="https://emagics.ru/">
		<meta property="og:site_name" content="Сделаем вам предложение по цене ниже среднерыночной без потери скорости  	и качества сервиса">
		<meta property="og:see_also" content="https://emagics.ru/"> 
		<script async="" src="gtag/js?id=UA-141192033-1"></script> 
		<script>window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-141192033-1');
		</script> 

  </head>
  <body>
	  <header>
		  <div class="container">
			  <div class="header__inner">
				  <div class="header__logo">
					  <div class="logo"> 
						  <a href="index.htm"> <img src="wp-content/themes/wptheme/logo.svg"> </a>
						</div>
					</div>
				<nav class="header__nav">
					<ul>
						<li><a data-anchor="about">Преимущества</a></li>
						<li><a data-anchor="guarantees">Гарантии</a></li>
						<li><a data-anchor="reviews">Отзывы</a></li>
						<li><a data-popup="popup__trec">Отслеживание</a></li>
						<li><a onclick="gtag('event', 'Личный кабинет', { 'event_category': 'openlk', 'event_action': 'click', });yaCounter48035300.reachGoal('lk'); return true;" href="https://lk.emagics.ru">Личный кабинет</a></li>
						<li><a data-popup="popup__pay">Оплата</a></li>
						<li><a data-anchor="contacts">Контакты</a></li>
					</ul>
				</nav>
				<div class="header__contacts">
					<div class="header__button" data-popup="popup__2"> 
						<span>позвоните мне</span>
					</div>
					<div class="header__number"> 
						<a onclick="gtag('event', 'Клик по номеру', { 'event_category': 'num', 'event_action': 'click', });" href="tel:+74952527070">+7 (495) 252-70-70</a>
						<p>Пн-Пт 10.00-19.00</p>
					</div>
				</div>
				<div class="header__mobile_phone"> 
					<a href="tel:+74952527070"> <img src="wp-content/themes/wptheme/img/mobile_header_phone.png" alt=""> </a>
				</div>
				<div class="toggleMenu"> 
					<span class="toggleMenu__top"></span> 
					<span class="toggleMenu__middle"></span> 
					<span class="toggleMenu__bottom"></span>
				</div>
			</div>
		</div>
	</header>
	
	<div class="header__menu">
		<div class="top_menu">
			<ul class="mobile__nav">
				<li><a data-anchor="about">Преимущества</a></li>
				<li><a data-anchor="guarantees">Гарантии</a></li>
				<li><a data-anchor="faq">Ответы на вопросы</a></li>
				<li><a data-popup="popup__pay">Оплата</a></li>
				<li><a href="https://lk.emagics.ru/">Личный кабинет</a></li>
				<li><a data-anchor="contacts">Контакты</a></li>
			</ul>
		</div>
	</div>
