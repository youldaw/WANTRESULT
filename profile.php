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

		<section class="profile-sec">
            <div class="container">
                <div class="row profile-rov">
                    <div class="col-lg-8">
                        <div class="profile-top">
                            <h1>Создать пользователя</h1>
                            <p><img src="images/create-user-icon.svg" alt=""></p>
                        </div>
                        <div class="profile-block">
                            <form action="#!">
								<div class="system-info">
									<div class="row profile-body">
										<div class="col-lg-4 left-title">
											<h3>Системная информация</h3>
										</div>
										<div class="col-lg-8">
											<div class="profile-form">
												<div class="form-group">
													<label for="accountId">Имя пользователя*</label>
													<input type="text" id="accountId" class="form-input" aria-describedby="helpAccountId" placeholder="@aleksandr.petrov2(aleksandr.petrov2)" required>
												</div>
												<div class="form-group">
													<label for="accountPass">Пароль</label>
													<input type="password" id="pass" class="form-input" aria-describedby="helpPassId" placeholder=".....">
												</div>
												<div class="form-group">
													<label for="accountPass">Email*</label>
													<input type="email" id="email" class="form-input" aria-describedby="helpEmailId" placeholder="Petrov@gmail..com" required>
												</div>
												<div class="form-group time-group">
													<label for="accountTime">Часовой пояс</label>
													<div class="btn-group">
														<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Москва <img src="images/drop-arrow.svg" alt="">
														</button>
														<ul class="dropdown-menu">
														  <li><a href="#">Москва 2</a></li>
														  <li><a href="#">Москва 3</a></li>
														  <li><a href="#">Москва 4</a></li>
														  <li><a href="#">Москва 5</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="personal-info">
									<div class="row">
										<div class="col-lg-4 left-title">
											<h3>Личная информация</h3>
										</div>
										<div class="col-lg-8">
											<form action="#!" id="personal-form">
												<div class="form-group upload">
													<label class="filelabel">
														<span class="pi-avatar">А</span>
														<input class="FileUpload1" id="FileInput" name="name-attachment" type="file"/>
														<span class="upload-text"><img src="images/plus-icon.svg" alt=""> Загрузить аватарку</span>
													</label>
												</div>
												<div class="form-group">
													<label for="accountName">Имя*</label>
													<input type="text" id="accountName" class="form-input" aria-describedby="helpAccountName" placeholder="Александр" required>
												</div>
	
												<div class="form-group">
													<label for="accountLastName">Фамилия</label>
													<input type="text" id="accountLastName" class="form-input" aria-describedby="helpAccountLastName" placeholder="Иванов">
												</div>
	
												<div class="form-group">
													<label for="accountTel">Телефон*</label>
													<input type="tel" id="accountTel" class="form-input" aria-describedby="helpAccountLastName" placeholder="+7 923 568 26 98" required>
												</div>
												<div class="form-group">
													<label for="accountMob">Мобильный</label>
													<input type="tel" id="accountMob" class="form-input" aria-describedby="helpAccountLastName" placeholder="+ 7 *** *** ** **" required>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="profile-ftr">
									<div class="row">
										<div class="col-lg-4">
											<div class="pf profile-role">
												<p>Роль*</p>
												<div class="form-group">
													<div class="btn-group">
														<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Клиент <img src="images/drop-arrow.svg" alt="">
														</button>
														<ul class="dropdown-menu">
														  <li><a href="#">Клиент 2</a></li>
														  <li><a href="#">Клиент 3</a></li>
														  <li><a href="#">Клиент 4</a></li>
														  <li><a href="#">Клиент 5</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="pf profile-status">
												<p>Статус*</p>
												<div class="form-group">
													<div class="btn-group">
														<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Опубликован <img src="images/drop-arrow.svg" alt="">
														</button>
														<ul class="dropdown-menu">
														  <li><a href="#">Опубликован 2</a></li>
														  <li><a href="#">Опубликован 3</a></li>
														  <li><a href="#">Опубликован 4</a></li>
														  <li><a href="#">Опубликован 5</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="pf profile-number">
												<p>Платные номера</p>
												<div class="check">
													<label class="control control--checkbox">
														<input type="checkbox"/>
														<div class="control__indicator"></div>
														<span>Разрешить телефоны </span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 create-btn">
											<button type="submit" class="blue-btn" id="profile-creat-btn">Создать</button>
										</div>
									</div>
								</div>
							</form>
                        </div>
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