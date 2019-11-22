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
	</main> 

	<?php include('footer.php'); ?>


<!--КОНЕЦ ОСНОВНОГО ДОКУМЕНТА (СТРАНИЦЫ)-->



	


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

