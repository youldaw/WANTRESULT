<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen">
		<link rel="stylesheet" type="text/css" href="libs/css/bootstrap.min.css" media="screen">
		<link rel="stylesheet" type="text/css" href="libs/css/bootstrap-theme.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/daterangepicker.css" media="screen">
		<link rel="stylesheet icon" type="text/css" href="css/style.css" media="screen">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <meta name="viewport" content="width=480"> -->
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
<body>
	
	<div class="wrapper profil-page">

		<!-- Side Menu -->
        <?php 
            include "side-menu.php"
        ?>

		<!-- Header -->
		<?php 
            include "header.php"
        ?>

		<section class="domen-sec">
            <div class="container">
                <div class="row domen-rov">
                    <div class="col-lg-10">
						<form action="#!" id="domen-form">
							<div class="domen-block">
								<div class="domen-top">
									<h1>Создать домен</h1>
									<p><img src="images/domen-icon.svg" alt=""></p>
								</div>
								<div class="domen-head">
									<div class="row">
										<div class="col-lg-4">
											<div class="form-group">
												<label for="domenName">Домен*</label>
												<input type="text" id="domentName" class="form-input" placeholder="Example.com" required>
											</div>
										</div>
										<div class="col-lg-5">
											<div class="form-group">
												<label for="domenCreate">Создал(а)</label>
												<div class="btn-group">
													<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														@aleksandr.petrov2(aleksandr.petrov2) <img src="images/drop-arrow.svg" alt="">
													</button>
													<ul class="dropdown-menu">
													  <li><a href="#">@aleksandr.petrov2</a></li>
													  <li><a href="#">@aleksandr.petrov2 3</a></li>
													  <li><a href="#">@aleksandr.petrov2 4</a></li>
													  <li><a href="#">@aleksandr.petrov2 5</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<label for="domenRadio">Статус</label>
											<div class="switch-block">
												<label class="switch" for="change-text">
													<input type="checkbox" class="switch" id="change-text">
													<div class="slider round"></div>
													<span id="dynamic-text">Неактивный</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="domen-body">
									<div class="form-group">
										<p>Пиксель</p>
										<textarea id="pixel-text">
									</textarea>
									</div>
									<div class="form-group sendPixel d-flex">
										<div class="f-in">
											<label for="domenName">Отправка пикселя</label>
											<input type="email" id="domentName" class="form-input" placeholder="coach@yandex.ru">
										</div>
										<button type="submit">Отправить</button>
									</div>
									<div class="form-group">
										<span>Отправьте инструкцию по установке пикселя на email своему программисту</span>
									</div>
								</div>
								<div class="domen-ftr">
									<div class="check">
										<label class="control control--checkbox">
											<input type="checkbox"/>
											<div class="control__indicator"></div>
											<span>Виджет согласия на обработку персональных данных</span>
										</label>
									</div>
									<div class="form-group">
										<label for="cookieText">Текст куки</label>
										<input type="text" id="cookieText" class="form-input for-ph" placeholder="Мы используем файлы cookie. Продолжив использование сайта, вы соглашаетесь с...">
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label for="polcyText">Текст политики конфиденциальности</label>
												<input type="text" id="polcyText" class="form-input for-ph" placeholder="Privacy Privacy policy">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label for="policyLink">Ссылка на политику конфиденциальности</label>
												<input type="text" id="policyLink" class="form-input for-ph" placeholder="Policy url: https://example.ru/privacy.php">
											</div>
										</div>
									</div>
								</div>
								<div class="domen-region">
									<div class="form-group">
										<label for="domenRegion">Регионы</label>
										<input type="text" id="domenRegion" class="form-input for-ph domen-input" placeholder="Выберите регион">
									</div>
									<div class="row">
										<div class="col-lg-10">
											<div class="form-group">
												<label for="roistatKey">Roistat ключ</label>
												<input type="text" id="roistatKey" class="form-input for-ph" placeholder="Roistat ключ">
											</div>
										</div>
										<div class="col-lg-2">
											<div class="form-group">
												<label for="setDelay">Задержка</label>
												<div class="count">
													<span class="minus">-</span>
													<input type='number' min='0' max='1000' step='1' value='0'>
													<div class="sec">сек</div>
													<span class="plus">+</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 domen-btn">
											<button type="submit" class="blue-btn" id="domen-creat-btn">Создать</button>
										</div>
									</div>
								</div>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </section>
		
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="libs/js/bootstrap.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/script.js"></script>
</body>
</html>