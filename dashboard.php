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

		<section class="dashboard-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 top-title title">
						<h2>Dashboard</h2>
						<div class="title-right">
							<div class="form-group">
								<div class="btn-group">
									<button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Все <img src="images/drop-arrow.svg" alt="">
									</button>
									<ul class="dropdown-menu">
									  <li><a href="#">Все 1</a></li>
									  <li><a href="#">Все 2</a></li>
									  <li><a href="#">Все 3</a></li>
									  <li><a href="#">Все 4</a></li>
									</ul>
								</div>
							</div>
							<div class="form-group date-group">
								<input type="text" class="form-control" id="demo" value="">
							  </div>
						</div>
					</div>
                </div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4">
								<a href="#!" class="dash-col dash-comments">
									<span class="dash-icon">
										<img src="images/dash-icon1.svg" alt="">
									</span>
									<span class="dash-num">
										<h2>2499</h2>
										<span>Комментариев</span>
									</span>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<a href="#!" class="dash-col dash-tasks">
									<span class="dash-icon">
										<img src="images/dash-icon2.svg" alt="">
									</span>
									<span class="dash-num">
										<h2>897</h2>
										<span>Задач</span>
									</span>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<a href="#!" class="dash-col dash-tags">
									<span class="dash-icon">
										<img src="images/dash-icon3.svg" alt="">
									</span>
									<span class="dash-num">
										<h2>157</h2>
										<span>Тэгов</span>
									</span>
								</a>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<a href="#!" class="dash-col dash-refresh">
									<span class="dash-icon">
										<img src="images/dash-icon4.svg" alt="">
									</span>
									<span class="dash-num">
										<h2>157</h2>
										<span>Тэгов</span>
									</span>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<a href="#!" class="dash-col dash-star">
									<span class="dash-icon">
										<img src="images/dash-icon5.svg" alt="">
									</span>
									<span class="dash-num">
										<h2>157</h2>
										<span>Тэгов</span>
									</span>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<a href="#!" class="dash-col dash-crm">
									<span class="dash-icon">
										<img src="images/dash-icon6.svg" alt="">
									</span>
									<span class="dash-num">
										<h2>157</h2>
										<span>Тэгов</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 dash-column">
						<div class="dash-call prg-block">
							<div class="call-top prg-top">
								<p>Звонки</p>
								<div class="call-btns">
									<a href="#!" class="amount-btn">Количество</a>
									<a href="#!" class="duration-btn">Длительность</a>
								</div>
							</div>
							<div class="call-body prg-body scrollBar">
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<img src="images/avatar-mini-img.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владимир Смирнов</p>
										<div class="progress">
											<div class="prg-text">187</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar1.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Ольга Иванова</p>
										<div class="progress">
											<div class="prg-text">98</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar2.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владислав Митюшин</p>
										<div class="progress">
											<div class="prg-text">81</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<p>ПВ</p>
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Петр Васичкин</p>
										<div class="progress">
											<div class="prg-text">72</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar3.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Василий Петров</p>
										<div class="progress">
											<div class="prg-text">64</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar4.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Марина Юрьевна</p>
										<div class="progress">
											<div class="prg-text">52</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<p>ПВ</p>
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Петр Васичкин</p>
										<div class="progress">
											<div class="prg-text">72</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar1.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Ольга Иванова</p>
										<div class="progress">
											<div class="prg-text">98</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar2.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владислав Митюшин</p>
										<div class="progress">
											<div class="prg-text">81</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
											</div>
										</div>
									</div>
								</div>
								<div class="call-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar3.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Василий Петров</p>
										<div class="progress">
											<div class="prg-text">64</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 dash-column">
						<div class="dash-activity prg-block">
							<div class="activity-top prg-top">
								<p>Активность и простой</p>
							</div>
							<div class="activity-body prg-body scrollBar">
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<img src="images/avatar-mini-img.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владимир Смирнов</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											</div>
										</div>
									</div>
								</div>
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar1.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Ольга Иванова</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											</div>
										</div>
									</div>
								</div>
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar2.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владислав Митюшин</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
											</div>
										</div>
									</div>
								</div>
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<p>ПВ</p>
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Петр Васичкин</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
											</div>
										</div>
									</div>
								</div>
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar3.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Василий Петров</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
											</div>
										</div>
									</div>
								</div>
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar4.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Марина Юрьевна</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
											</div>
										</div>
									</div>
								</div>

								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<p>ПВ</p>
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Петр Васичкин</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
											</div>
										</div>
									</div>
								</div>
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar3.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Василий Петров</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
											</div>
										</div>
									</div>
								</div>
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar1.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Ольга Иванова</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											</div>
										</div>
									</div>
								</div>
								<div class="activity-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar2.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владислав Митюшин</p>
										<div class="progress">
											<div class="prg-text prg-time">4ч 53м - 1ч 32м</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 dash-column">
						<div class="dash-money prg-block">
							<div class="money-top prg-top">
								<p>Заработано денег</p>
							</div>
							<div class="money-body prg-body scrollBar">
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/avatar-mini-img.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владимир Смирнов</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar1.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Ольга Иванова</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar2.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владислав Митюшин</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<p>ПВ</p>
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Петр Васичкин</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar3.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Василий Петров</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar4.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Марина Юрьевна</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
											</div>
										</div>
									</div>
								</div>

								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar1.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Ольга Иванова</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar2.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Владислав Митюшин</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<p>ПВ</p>
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Петр Васичкин</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar3.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Василий Петров</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
											</div>
										</div>
									</div>
								</div>
								<div class="money-user prg-user">
									<div class="dc-user-img">
										<img src="images/progres-user-avatar4.png" alt="">
									</div>
									<div class="dc-user-progress">
										<p class="dc-user-name">Марина Юрьевна</p>
										<div class="progress">
											<div class="prg-text money-sum">10 500 ₽</div>
											<div class="progress-bar  active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
											</div>
										</div>
									</div>
								</div>
							</div>
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