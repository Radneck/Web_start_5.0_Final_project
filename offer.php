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


<!-- скрипты -->
	<!-- <script src="./js/main_14.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
	</script>
	<script src="./js/modal.js"></script>
	<script src="./js/slick.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
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
	<!-- <img style="display: block;" src="./img/brif/brif-bg.jpg" alt=""> -->
	</div>

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