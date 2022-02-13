<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lacf
 */

?>

		<footer id="contacts">
			<div class="container">
				<div class="footer_corp">
					<div class="logo"> 
						<a href="index.htm"> <img src="wp-content/themes/wptheme/logo.svg"> </a>
					</div>
					<p class="corp_text">Экспресс доставка документов <br> и грузов по всему миру</p>

					<div class="soc">
						<a href="#vk" class="vk"><img src="wp-content/themes/wptheme/img/vk.png" alt=""></a> 
						<a href="#in" class="inst"><img src="wp-content/themes/wptheme/img/inst.png" alt=""></a> 
						<a href="#fb" class="fb"></a>
					</div>
				</div>
				<div class="footer__contacts">
					<div class="flex">
						<div class="footer__nav">
							<ul>
								<li data-anchor="about">Преимущества</li>
								<li data-anchor="guarantees">Гарантии</li>
								<li data-anchor="promo">Промокод</li>
								<li data-anchor="reviews">Отзывы</li>
							</ul>
							<ul>
								<li data-anchor="faq">Ответы на вопросы</li>
								<li data-popup="popup__trec">Отслеживание</li>
								<li><a onclick="gtag('event', 'Личный кабинет', { 'event_category': 'openlk', 'event_action': 'click', });ym(48035300,'reachGoal','lk'); return true;" href="https://lk.emagics.ru">Личный кабинет</a></li>
								<li data-popup="popup__pay">Оплата</li>
							</ul>
						</div>
						<div class="footer__address">
							<div class="address"> 
								<span class="name">Адрес головного офиса:</span>
								<p>115191, г. Москва, ул. Большая <br>Тульская, дом 10, строение 38</p>
							</div>
							<div class="mail"> 
								<span class="name">Почта:</span> 
								<a style="text-decoration: unset" href="cdn-cgi/l/email-protection.html#fd94939b92bd98909c9a949e8ed38f88">
								<p><span class="__cf_email__" data-cfemail="2841464e47684d45494f414b5b065a5d">[email&#160;protected]</span>
								</p></a>
							</div>
						</div>
					</div>
					<div class="footer__links"> 
						<a href="politics.html">Политика конфиденциальности</a> 
						<a href="userag.html">Пользовательское соглашение</a> 
						<a href="corporate.html">Положение для корпоративных клиентов</a>
					</div>
				</div>
				<div class="footer_call"> 
					<a onclick="gtag('event', 'Клик по номеру', { 'event_category': 'num', 'event_action': 'click', });" href="tel:+7 (495) 252-70-70" class="tel">+7 (495) 252-70-70</a> 
					<span>Пн-Пт 10.00-19.00</span>
					<div class="button"> 
						<button type="button" class="first__button footer__button" data-popup="popup__2"><p>Перезвоните мне</p> 
						<span class="mybuttonstyle blik"></span> 
						<img src="wp-content/themes/wptheme/img/button_mask.png" class="button_mask"> 
						</button> <img src="wp-content/themes/wptheme/img/shadow_button.png" alt="" class="button__shadow">
					</div>
				</div>
			</div>
		</footer>


		<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="wp-content/themes/wptheme/js/jquery-3.3.1.min.js"></script> 
		<script src="wp-content/cache/wmac/js/wmac_single_b8d51d243ecae3dda08fe057fdb0e394.js"></script> 
		<script src="wp-content/cache/wmac/js/wmac_single_af8a43f6f03a3461d94c5c3c4eb43f21.js"></script> 
		<script>$(".inputmask").inputmask({"mask":"+7(999) 999-9999"});</script> 
		<script>$(".form__wrap").click(function(e){
			e.stopPropagation();
			//$("#mother").unbind("click"); //отвязка события клика
			});</script> 
		<script src="wp-content/cache/wmac/js/wmac_single_4ced15b6d03ae1ebc84b50d113e64347.js"></script> 
		<script src="aos%402.3.1/dist/aos.js"></script> 
		<script>$(".slickslide").on('afterChange', function (event, slick, currentSlide) {
			$(".cp").text(currentSlide<9?`${currentSlide+1}`:currentSlide+1);
			});</script> 
		<script>AOS.init();</script> 
		<script>$('form[data-fpopup]').submit(function(e){
				var popup = $(this).data('fpopup');
				$.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php?action=ajax_order&button=" + popup,
				data: $(this).serialize(),
				async: false
				});
				$('.popupBox').addClass('active');
				$('.popup').removeClass('active');
				$('html').addClass('hidden');
				$('.' + popup).addClass('active');
				e.preventDefault();
				return false;
			});</script> 
		<script type="text/javascript">(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

			ym(48035300, "init", {
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true,
					trackHash:true
			});</script> 
	</body>
</html>
