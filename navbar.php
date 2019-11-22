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
	<nav class="navbar">
		<div class="container">
			<div class="navbar-block">
				<div class="navbar__logo wow fadeIn" data-wow-delay='0.2s'>
					<a href="index_14.php"><img src="img/Repair_logo.png" alt="Логотип"></a>
				</div>
				<!-- /.navbar__logo -->
				<div class="navbar__subnav">
						<a href="offer.php" class="navbar__link">Offer</a>
						<a href="portfolio.php" class="navbar__link">Portfolio</a>
						<a href="price.php" class="navbar__link">Price</a>
						<a href="brif.php" class="navbar__link">Brif</a>
				</div>
				<!-- /.навигация -->

				<div class="navbar__info wow fadeIn" data-wow-delay='0.2s'>
					<div class="navbar__contacts">
						<span class="navbar__address">
							Калуга, Москва, МО
						</span>
						<a href="tel:+7 (495)42-251-31" class="navbar__phone">+7 (495) 42-251-99</a>
					</div>
					<!-- /.navbar__contacts -->
					<button class="button navbar__button" id="button">Перезвоните мне</button>
				</div>
				<!-- /.navbar__info -->
			</div>
			<!-- /.navbar-block -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- /.navbar --> 


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

