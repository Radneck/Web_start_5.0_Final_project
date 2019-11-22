<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/slick.css">
	<!-- <link rel="stylesheet" href="./css/slick-theme.css"> -->
	<link rel="stylesheet" href="./css/animate.css">
	<link rel="stylesheet" href="./css/style_14.css">
	<title>Document</title>
</head>
<body>
	<?php include('navbar.php'); ?>

	<main>
		<section class="hero">
			<div class="container">
				<div class="hero-block">
					<div class="hero-text">
						<h1 class="hero-text__title wow fadeInLeft">
							Внутренняя отделка помещений "под ключ"
						</h1>
						<span class="hero-text__subtitle wow fadeInLeft">
							с гарантией качества, прописанной в договоре
						</span>
						<ul class="hero-list">
							<li class="hero-list__item wow bounceInLeft" data-wow-delay='0.1s'>
								<div class="hero-list__image">
									<img src="img/hero/clock.png" alt="clock">
								</div>
								<span class="hero-list__text">Точно соблюдаем сроки</span>
							</li>
							<li class="hero-list__item wow bounceInLeft" data-wow-delay='0.3s'>
								<div class="hero-list__image">
									<img src="img/hero/calculator.png" alt="calculator">
								</div>
								<span class="hero-list__text">Рассчитаем смету на работы<br> и материалы в день обращения</span>	
							</li>
							<li class="hero-list__item wow bounceInLeft" data-wow-delay='0.5s'>
								<div class="hero-list__image">
									<img src="img/hero/paint-board.png" alt="paint-board">
								</div>
								<span class="hero-list__text">Предложим более 100 вариантов<br> исполнения дизайна Вашего жилья</span>								
							</li>
						</ul>
						<!-- /.hero-list -->
					</div>
					<!-- /.hero-text -->
					<div class="hero-image wow fadeInRight">
						<img src="img/hero/hero_image.png" alt="План хатки">
					</div>
					<!-- /.hero-image -->
				</div>
				<!-- /.hero-block -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.hero -->

		<section class="offer section">
			<div class="container">
				<div class="offer-block wow fadeIn">
					<h2 class="section-title offer__title">Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!</h2>
					<!-- /.section-title -->
					<span class="section-subtitle offer__subtitle">Оставьте заявку на разработку бесплатного дизайн-проекта!</span>
					<!-- /.section-subtitle -->
					<form action="mail.php" method="POST" class="form offer__form" id="offer-form">
						<div class="input-group">
						  <input type="text" class="input offer__input" autocomplete="off" name="username" placeholder="Ваше имя">
						</div>
						<div class="input-group">
						  <input type="tel" class="input offer__input phone" autocomplete="off" name="phone" placeholder="Ваш телефон">
						</div>
						<button class="button offer__button">Получить бесплатный дизайн-проект</button>
					</form>
					<!-- /.form offer__form -->
					<div class="section-footer offer__footer">
						<span class="offer__item">Наш менеджер перезвонит Вам в течение 60 секунд</span>
						<span class="offer__item">или перезвоните нам сами <strong>+7 (495) 42-251-31</strong></span>
					</div>
				</div>
				<!-- /.offer-block -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.offer -->

		<section class="section portfolio">
			<div class="container">
				<h2 class="section-title portfolio__title">Работая с 2007 года,<br>мы сделали более 500 ремонтов в квартирах и домах</h2>
				<div class="slider">
					<div class="slider__item">
						<img class="slider__image" src="./img/portfolio/slider_1.png" alt="">
					</div>
					<div class="slider__item">
						<img class="slider__image" src="./img/portfolio/slider_2.png" alt="">
					</div>
					<div class="slider__item">
						<img class="slider__image" src="./img/portfolio/slider_3.png" alt="">
					</div>
					<div class="slider__item">
						<img class="slider__image" src="./img/portfolio/slider_1.png" alt="">
					</div>
					<div class="slider__item">
						<img class="slider__image" src="./img/portfolio/slider_2.png" alt="">
					</div>
					<div class="slider__item">
						<img class="slider__image" src="./img/portfolio/slider_3.png" alt="">
					</div>
				</div>
			</div>

			<div class="arrows portfolio__arrows">
				<div class="arrows__left">
					<img src="./img/portfolio/left-arrow.png" alt="">
				</div>
				<div class="arrows__right">
					<img src="./img/portfolio/right-arrow.png" alt="">
				</div>
			</div>

		</section>
		<!--конец портфолио-->

		<section class="section price">
			<div class="container">
				<h2 class="section-title price__title">У нас очень гибкая система скидок на комплексные работы!</h2>
				<span class="section-subtitle price__subtitle">Прайс на наши услуги</span>
				<div class="cards">
					<div class="card price__card wow fadeInUp" data-wow-delay='0.1s'>
						<div class="card__image">
							<img style="display: block;" src="./img/price/price-img_1.png" alt="">
						</div>
						<div class="card__text">
							<h4 class="card__title">Ремонт ванных комнат и с/у</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay='0.2s'>
						<div class="card__image">
							<img style="display: block;" src="./img/price/price-img_2.png" alt="">
						</div>
						<div class="card__text">
							<h4 class="card__title">Ремонт комнат и квартир</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay='0.3s'>
						<div class="card__image">
							<img style="display: block;" src="./img/price/price-img_3.png" alt="">
						</div>
						<div class="card__text">
							<h4 class="card__title">Отделка офисных помещений</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay='0.4s'>
						<div class="card__image">
							<img style="display: block;" src="./img/price/price-img_4.png" alt="">
						</div>
						<div class="card__text">
							<h4 class="card__title">Ремонт в новостройках</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay='0.5s'>
						<div class="card__image">
							<img style="display: block;" src="./img/price/price-img_5.png" alt="">
						</div>
						<div class="card__text">
							<h4 class="card__title">Ремонт кухонь</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay='0.6s'>
						<div class="card__image">
							<img style="display: block;" src="./img/price/price-img_6.png" alt="">
						</div>
						<div class="card__text">
							<h4 class="card__title">Ремонт дач и коттеджей</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- конец секции price -->

		<section class="section brif">
			<div class="container">
				<div class="brif-block">
					<div class="interview brif__interview">
						<h3 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по телефону</h3>
						<span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
						<ul class="interview-list">
							<li class="interview-list__item">
								<span class="interview-list__counter">1</span>
								<span class="interview-list__text">Какова площадь помещения?</span>
							</li>
							<li class="interview-list__item">
								<span class="interview-list__counter">2</span>
								<span class="interview-list__text">У Вас новостройка или вторичное жилье?</span>
							</li>
							<li class="interview-list__item">
								<span class="interview-list__counter">3</span>
								<span class="interview-list__text">Где находится помещение, в котором будет производиться ремонт?</span>
							</li>
							<li class="interview-list__item">
								<span class="interview-list__counter">4</span>
								<span class="interview-list__text">Назначение помещения?</span>
							</li>
						</ul>
					</div>

					<div class="form brif__form">
						<h3 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
						<span class="form__subtitle">Для этого заполните форму ниже</span>
						<form action="mail.php" method="POST" id="brif-form">
							<div class="input-brifGroup">
								<input type="text" autocomplete="off" name="username" class="input brif__input" placeholder="Ваше Имя">
							</div>
							<div class="input-brifGroup">
								<input type="tel" autocomplete="off" name="phone" class="input brif__input phone" placeholder="Ваш телефон">
							</div>
							<div class="input-brifGroup">
								<input type="email" autocomplete="off" name="email" class="input brif__input" placeholder="Ваш email">
							</div>
							<button class="button brif__button">Узнайть стоимость</button>
							<span class="form__description">Мы перезвоним Вам в течение 60 секунд</span>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main> 

	<?php include('footer.php'); ?>
<!--КОНЕЦ ОСНОВНОГО ДОКУМЕНТА (СТРАНИЦЫ)-->



	<!--Код модальных окон-->
	<div class="modal" id="modal">
		<div class="container">
			<div class="modal-dialog">
				<button class="modal-dialog__close" id="close">&times;</button>
				<h4 class="modal-dialog__title">Узнайте точную стоимость
				ремонта по телефону!</h4>
				<span class="modal-dialog__subtitle">Заполните поля ниже - мы свяжемся с Вами</span>
				<form action="#" class="form modal-dialog__form" id="modal-form">
					<div class="input-modalGroup">
						<input type="text" autocomplete="off" name="username" class="modal-dialog__input" placeholder="Ваше имя">
					</div>
					<div class="input-modalGroup">
						<input type="tel" autocomplete="off" name="username" class="modal-dialog__input phone" placeholder="Ваш телефон">
					</div>
					<button class="button modal-dialog__button">Узнать стоимость</button>
				</form>
				<div class="modal-dialog__footer">
					<span class="modal-dialog__firstFooterItem">Или Вы можете перезвонить нам сами по телефону:</span>
					<span class="modal-dialog__secondFooterItem">+7 (8182) 42-51-31</span>
				</div>
			</div>
		</div>
	</div>


	<!-- <script src="./js/main_14.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
	</script>
	<script src="./js/modal.js"></script>
	<script src="./js/slick.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<!-- Валидация -->
	<script>
	  new WOW().init();
	  $(document).ready(function(){
		// Валидация 1й формы
		$('#offer-form').validate({
		  rules: {
			username: {
			  required: true,
			  minlength: 2,
			  maxlength: 15
			},
			phone: {
			  required: true
			}
		  },
		  errorElement: "em",
		  errorClass: "falture",
		  messages: {
			username: {
			  required: "Укажите имя",
			  minlength: jQuery.validator.format("Минимум {0} символа!"),
			  maxlength: jQuery.validator.format("Максимум {0} символов!")
			},
			phone: {
			  required: "Укажите телефон"
			}	
		  }
		});
		// Валидация 2й формы
		$('#brif-form').validate({
		  rules: {
		    username: {
			  required: true,
		      minlength: 2,
			  maxlength: 15
			},
			phone: {
			  required: true
			},
			email: {
			  required: true,
			  email: true 
			}
		  },
		  errorElement: "em",
		  errorClass: "falture",
		  messages: {
			username: {
			  required: "Укажите имя",
			  minlength: jQuery.validator.format("Минимум {0} символа!"),
			  maxlength: jQuery.validator.format("Максимум {0} символов!")
			},
			phone: {
			  required: "Укажите телефон"
		 	},
			email: {
			  required: "Укажите email",
			  email: "Введите корректный email!"
			  
			}
		  }
	  	});
		$('#modal-form').validate({
		  rules: {
			username: {
			  required: true,
			  minlength: 2,
			  maxlength: 15
			},
			phone: {
			  required: true
			}
		  },
		  errorElement: "em",
		  errorClass: "falture",
		  messages: {
		    username: {
			  required: "Укажите имя",
			  minlength: jQuery.validator.format("Минимум {0} символа!"),
			  maxlength: jQuery.validator.format("Максимум {0} символов!")
		  },
		    phone: {
			  required: "Укажите телефон"
			}
		  }
		});
		
	//   Маска телефона
	  	$('.phone').mask('+7(999) 999-99-99');

		$('.slider').slick ({
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  prevArrow: $('.arrows__left'),
		  nextArrow: $('.arrows__right'),
		  responsive: [
			  {
				breakpoint: 1200,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 1
				}
			  },
			  {
				  breakpoint: 768,
				  settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
				  }
			  }
		  ]
		});
	  });
	</script>

</body>
</html>

<!--		
			<ul class="modal-list">
				<li class="modal-list__item">
					<div class="modal-list__image">
						<img src="../Web_start_5.0_Final_project/img/modal/pic_1.png" alt="Картинка">
					</div>
					<div class="modal-list__block">
						<h5 class="modal-list__title">Ванная комната</h5>
						<span class="modal-list__text">135*150 - <strong>31 000 руб.</strong></span><br>
						<span class="modal-list__text">170*170 - <strong>43 000 руб.</strong></span>
					</div>
				</li>
				<li class="modal-list__item">
					<div class="modal-list__image">
						<img src="../Web_start_5.0_Final_project/img/modal/pic_2.png" alt="Картинка">
					</div>
					<div class="modal-list__block">
						<h5 class="modal-list__title">Туалет</h5>
						<span class="modal-list__text"></span>
					</div>
				</li>
				<li class="modal-list__item">
					<div class="modal-list__image">
						<img src="../Web_start_5.0_Final_project/img/modal/pic_3.png" alt="Картинка">
					</div>
					<div class="modal-list__block">
						<h5 class="modal-list__title">Совмещенный санузел</h5>
						<span class="modal-list__text"></span>
					</div>
				</li>

			</ul>
		-->