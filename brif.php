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
						<form action="#" id="brif-form">
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

