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
	
	<div class="wrapper visitor-page">

		<!-- Side Menu -->
        <?php 
            include "side-menu.php"
        ?>

		<!-- Header -->
		<?php 
            include "header.php"
        ?>

		<section class="crm-sec">
			<div class="container-fluid">
				<div class="row">
					

					<div class="col-lg-12">
						
						<div class="crm-main visitors-main">
							
							<div class="crm-head">
								<div class="crm-head-left title">
									<h2>Посетители</h2>
								</div>
								<div class="crm-head-right">
									<div class="head-right-search">
										<form method="post" action="#!" id="search-form" class="hs-form">
											<input type="search" name="search" id="search" placeholder="Поиск и фильтр" />
											<ul class="results" >
												<li class="search-items">
													<div class="allTime-drop drop-block">
														<button class="allTime-btn r-btn" type="button">
															За все время  <img src="images/drop-arrow.svg" alt="">
														</button>
														<ul class="allTime-menu drop-menu">
															<li><a href="#">Action</a></li>
															<li><a href="#">Another action</a></li>
															<li><a href="#">Something else here</a></li>
															<li><a href="#">Separated link</a></li>
														</ul>
													</div>
												</li>
												<li class="search-items">
													<div class="task-drop drop-block">
														<button class="task-btn r-btn" type="button">
															Задачи  <img src="images/drop-arrow.svg" alt="">
														</button>
														<ul class="task-menu drop-menu">
															<li><a href="#">Задачи 2</a></li>
															<li><a href="#">Задачи 3</a></li>
															<li><a href="#">Задачи 4</a></li>
															<li><a href="#">Задачи 5</a></li>
														</ul>
													</div>
												</li>
												<li class="search-items">
													<div class="belt-drop drop-block">
														<button class="belt-btn r-btn" type="button">
															UTC+5  <img src="images/drop-arrow.svg" alt="">
														</button>
														<ul class="belt-menu drop-menu">
															<li><a href="#">UTC+6</a></li>
															<li><a href="#">UTC+7</a></li>
															<li><a href="#">UTC+8</a></li>
															<li><a href="#">UTC+9</a></li>
														</ul>
													</div>
												</li>
												<li class="search-items">
													<div class="sort-drop drop-block">
														<button class="sort-btn r-btn" type="button">
															Сортировка  <img src="images/drop-arrow.svg" alt="">
														</button>
														<ul class="sort-menu drop-menu">
															<li><a href="#">Сортировка 2</a></li>
															<li><a href="#">Сортировка 3</a></li>
															<li><a href="#">Сортировка 4</a></li>
															<li><a href="#">Сортировка 5</a></li>
														</ul>
													</div>
												</li>
												<li class="search-items">
													<div class="manager-drop drop-block">
														<button class="manager-btn r-btn" type="button">
															Менеджер  <img src="images/drop-arrow.svg" alt="">
														</button>
														<ul class="manager-menu drop-menu">
															<li><a href="#">Менеджер 2</a></li>
															<li><a href="#">Менеджер 3</a></li>
															<li><a href="#">Менеджер 4</a></li>
															<li><a href="#">Менеджер 5</a></li>
														</ul>
													</div>
												</li>
												<li class="search-last">
													<div class="last-left">
														<a href="#!"><img src="images/plus-icon.svg" alt=""> Сохранить фильтр</a>
													</div>
													<div class="last-right">
														<button type="button" class="clear transparent-btn">Сбросить</a>
														<button type="button" class="find blue-btn">
															<span>
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875Z" fill="#fff"/>
																</svg>
															</span>
															Найти
														</a>
													</div>
												</li>
											</ul>
										</form>
									</div>
									<div class="head-right-settings">
										<div class="settings-drop drop-block">
											<button class="settings-btn" type="button">
												<img src="images/settings-icon.svg" alt="">
											</button>
											<ul class="settings-menu drop-menu">
												<li><a href="#">Настроить воронку</a></li>
												<li><a href="#">Экспорт CSV</a></li>
												<li><a href="#">Экспорт XSL</a></li>
												<li><a href="#">Импорт</a></li>
												<li><a href="#">Attach Domains</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="crm-head-tags">
								<div class="crm-tag-block">
									<div class="crm-tags">
                                        <a href="#!" class="tag">Новые</a>
										<a href="#!" class="tag">Проработано</a>
										<a href="#!" class="tag">Непрочитанные</a>
										<a href="#!" class="tag add">
											<span>
												<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 6V0H8V6H14V8H8V14H6V8H0V6H6Z" fill="#59597B"/>
												</svg>
											</span>
										</a>
									</div>
								</div>
								<button class="only-mob mob-tag transparent-btn">
									<span class="mob-tag-name">Тэги</span>
									<span class="mob-tag-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M10 18H14V16H10V18ZM3 6V8H21V6H3ZM6 13H18V11H6V13Z" fill="#A0A0B4"/>
										</svg>
									</span>
								</button>
							</div>

							<div class="crm-table pc">
								<div class="table-responsive" id="style-2">
									<table class="table">
									<thead>
										<tr>
											<th class="thead-list">
												<a href="#!">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8 4H21V6H8V4ZM4.5 6.5C4.10218 6.5 3.72064 6.34196 3.43934 6.06066C3.15804 5.77936 3 5.39782 3 5C3 4.60218 3.15804 4.22064 3.43934 3.93934C3.72064 3.65804 4.10218 3.5 4.5 3.5C4.89782 3.5 5.27936 3.65804 5.56066 3.93934C5.84196 4.22064 6 4.60218 6 5C6 5.39782 5.84196 5.77936 5.56066 6.06066C5.27936 6.34196 4.89782 6.5 4.5 6.5ZM4.5 13.5C4.10218 13.5 3.72064 13.342 3.43934 13.0607C3.15804 12.7794 3 12.3978 3 12C3 11.6022 3.15804 11.2206 3.43934 10.9393C3.72064 10.658 4.10218 10.5 4.5 10.5C4.89782 10.5 5.27936 10.658 5.56066 10.9393C5.84196 11.2206 6 11.6022 6 12C6 12.3978 5.84196 12.7794 5.56066 13.0607C5.27936 13.342 4.89782 13.5 4.5 13.5ZM4.5 20.4C4.10218 20.4 3.72064 20.242 3.43934 19.9607C3.15804 19.6794 3 19.2978 3 18.9C3 18.5022 3.15804 18.1206 3.43934 17.8393C3.72064 17.558 4.10218 17.4 4.5 17.4C4.89782 17.4 5.27936 17.558 5.56066 17.8393C5.84196 18.1206 6 18.5022 6 18.9C6 19.2978 5.84196 19.6794 5.56066 19.9607C5.27936 20.242 4.89782 20.4 4.5 20.4ZM8 11H21V13H8V11ZM8 18H21V20H8V18Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</th>
											<th class="thead-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</th>
											<th class="thead-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</th>
											<th class="thead-contact">
												<a href="#!">Контакт</a>
											</th>
											<th class="thead-timeVisit">
												<a href="#!">Время визита</a>
											</th>
											<th class="thead-domen">
												<a href="#!">Домен</a>
											</th>
											<th class="thead-tel">
												<a href="#!">Телефон</a>
											</th>
											<th class="thead-rating">
												<a href="#!">Рейтинг</a>
											</th>
											<th class="thead-reminder">
												<a href="#!">Напоминание</a>
											</th>
											<th class="thead-region">
												<a href="#!">Регион</a>
											</th>
											<th class="thead-timezone">
												<a href="#!">Часовой пояс</a>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img pink"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3456</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star " title="Give 5 stars">★</a>
													<a href="#4" class="star active" title="Give 4 stars">★</a>
													<a href="#3" class="star active" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder active">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">12 июл, 14:00</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>
										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img blue"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3457</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star " title="Give 5 stars">★</a>
													<a href="#4" class="star active " title="Give 4 stars">★</a>
													<a href="#3" class="star active" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">-</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>
										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img red"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3456</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star" title="Give 5 stars">★</a>
													<a href="#4" class="star" title="Give 4 stars">★</a>
													<a href="#3" class="star" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">-</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>
										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img green"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3456</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star" title="Give 5 stars">★</a>
													<a href="#4" class="star active" title="Give 4 stars">★</a>
													<a href="#3" class="star active" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder active">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">12 июл, 14:00</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>

										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img blue"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3457</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star " title="Give 5 stars">★</a>
													<a href="#4" class="star active " title="Give 4 stars">★</a>
													<a href="#3" class="star active" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">-</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>

										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img red"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3456</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star" title="Give 5 stars">★</a>
													<a href="#4" class="star" title="Give 4 stars">★</a>
													<a href="#3" class="star" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">-</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>
										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img green"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3456</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star" title="Give 5 stars">★</a>
													<a href="#4" class="star active" title="Give 4 stars">★</a>
													<a href="#3" class="star active" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder active">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">12 июл, 14:00</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>
										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img pink"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3456</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star " title="Give 5 stars">★</a>
													<a href="#4" class="star active" title="Give 4 stars">★</a>
													<a href="#3" class="star active" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder active">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">12 июл, 14:00</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>
										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img blue"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3457</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star " title="Give 5 stars">★</a>
													<a href="#4" class="star active " title="Give 4 stars">★</a>
													<a href="#3" class="star active" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">-</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>
										<tr>
											<td class="tb-menu">
												<a href="#!">
													<svg width="4" height="16" viewBox="0 0 4 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M2 16C0.89543 16 0 15.1046 0 14C0 12.8954 0.89543 12 2 12C3.10457 12 4 12.8954 4 14C4 15.1046 3.10457 16 2 16ZM2 10C0.89543 10 0 9.10457 0 8C0 6.89543 0.89543 6 2 6C3.10457 6 4 6.89543 4 8C4 8.53043 3.78929 9.03914 3.41421 9.41421C3.03914 9.78929 2.53043 10 2 10ZM2 4C0.89543 4 0 3.10457 0 2C0 0.89543 0.89543 0 2 0C3.10457 0 4 0.89543 4 2C4 2.53043 3.78929 3.03914 3.41421 3.41421C3.03914 3.78929 2.53043 4 2 4Z" fill="#A0A0B4"/>
													</svg>
												</a>
											</td>
											<td class="tb-check">
												<label class="control control--checkbox">
													<input type="checkbox"/>
													<div class="control__indicator"></div>
												</label>
											</td>
											<td class="tb-favorite">
												<a href="#!">
													<svg height="24" width="24" class="star rating" data-rating="1">
														<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;" fill="#A0A0B4"/>
												  	</svg>
												</a>
											</td>
											<td class="tb-contact">
												<a href="#!">
                                                    <span class="contact-img red"><img src="images/user-img-default.svg" alt=""></span>
													<span class="contact-name">Гость #3456</span>
												</a>
											</td>
											<td class="tb-timeVisit">
												<p>05 июл, 12:20</p>
											</td>
											<td class="tb-domen">
												<a href="#!">Catlivan.ru</a>
											</td>
											<td class="tb-tel">
												<a href="tel:">7 960 091 89 51</a>
											</td>
											<td class="tb-rating">
												<div class="rating rating2">
													<a href="#5" class="star" title="Give 5 stars">★</a>
													<a href="#4" class="star" title="Give 4 stars">★</a>
													<a href="#3" class="star" title="Give 3 stars">★</a>
													<a href="#2" class="star active" title="Give 2 stars">★</a>
													<a href="#1" class="star active" title="Give 1 star">★</a>
												</div>
											</td>
											<td class="tb-reminder">
												<p>
													<span class="reminder-icon">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#E8233A"/>
														</svg>
													</span>
													<span class="reminder-text">-</span>
												</p>
											</td>
											<td class="tb-region">
												<p>г. Санкт-Петербург</p>
											</td>
											<td class="tb-timezone">
												<p>UTC+5</p>
											</td>
										</tr>
									</tbody>
									</table>
								</div>

								<div class="crm-pagninton">
									<div class="crm-pagninton-left">
										<ul class="pagination">
											<li class="page-item p-prev">
												<a class="page-link" href="#" aria-label="Previous">
													<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12.2881 16L18.2981 22.01L19.7121 20.596L15.1121 15.996L19.7121 11.396L18.2981 9.98999L12.2881 16Z" fill="#06061D"/>
													</svg>
												</a>
											</li>
											<li class="page-item"><a class="page-link pagination__active" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">...</a></li>
											<li class="page-item"><a class="page-link" href="#">12</a></li>
											<li class="page-item"><a class="page-link" href="#">13</a></li>
											<li class="page-item"><a class="page-link" href="#">14</a></li>
											<li class="page-item p-next">
												<a class="page-link" href="#" aria-label="Next">
													<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19.7131 16L13.7021 9.98999L12.2881 11.404L16.8881 16.004L12.2881 20.597L13.7021 22.011L19.7131 16Z" fill="#06061D"/>
													</svg>
												</a>
											</li>
										</ul>
									</div>
									<div class="crm-pagninton-right">
										<p>Показаны записи 1-10 из 406</p>
										<span>На странице</span>
										<div class="dropup">
											<button class="pag-btn dropdown-toggle" type="button" id="dropdownMenu2"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												20 <img src="images/drop-arrow.svg" alt="">
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
												<li><a href="#">20</a></li>
												<li><a href="#">15</a></li>
												<li><a href="#">10</a></li>
											</ul>
										</div>
									</div>
								   
								</div>
							</div>
							
							
							<div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="crm-table only-mob">
                                            <div class="mob-table">
                                                <div class="mt-head">
                                                    <div class="mt-head-left">
                                                        <p class="tab-img">AB</p>
                                                        <p class="tab-name">Владислав</p>
                                                    </div>
                                                    <div class="mt-head-right">
                                                        <p class="tab-alarm">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                        <p class="tab-favorite">
                                                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-body">
                                                    <div class="mt-item">
                                                        <span>Телефон</span>
                                                        <p>7 960 091 89 51</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Домен</span>
                                                        <p>Catlivan.ru</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Создан</span>
                                                        <p>05 июл, 12:20</p>
                                                    </div>
                                                </div>
                                                <div class="mt-ftr">
                                                    <p class="mt-btn deal-close">Сделка закрыта</p>
                                                </div>
                                            </div>
                            
                                            <div class="mob-table">
                                                <div class="mt-head">
                                                    <div class="mt-head-left">
                                                        <p class="tab-img">AB</p>
                                                        <p class="tab-name">Ольга</p>
                                                    </div>
                                                    <div class="mt-head-right">
                                                        <p class="tab-alarm">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                        <p class="tab-favorite active">
                                                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-body">
                                                    <div class="mt-item">
                                                        <span>Телефон</span>
                                                        <p>7 960 091 89 51</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Домен</span>
                                                        <p>Catlivan.ru</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Создан</span>
                                                        <p>05 июл, 12:20</p>
                                                    </div>
                                                </div>
                                                <div class="mt-ftr">
                                                    <p class="mt-btn new">Новый</p>
                                                </div>
                                            </div>
                            
                                            <div class="mob-table">
                                                <div class="mt-head">
                                                    <div class="mt-head-left">
                                                        <p class="tab-img"><img src="images/table-user3.png" alt=""></p>
                                                        <p class="tab-name">Гость #345</p>
                                                    </div>
                                                    <div class="mt-head-right">
                                                        <p class="tab-alarm active">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                        <p class="tab-favorite">
                                                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-body">
                                                    <div class="mt-item">
                                                        <span>Телефон</span>
                                                        <p>7 960 091 89 51</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Домен</span>
                                                        <p>Catlivan.ru</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Создан</span>
                                                        <p>05 июл, 12:20</p>
                                                    </div>
                                                </div>
                                                <div class="mt-ftr">
                                                    <p class="mt-btn work">В работе</p>
                                                </div>
                                            </div>
                            
                                            <div class="mob-table">
                                                <div class="mt-head">
                                                    <div class="mt-head-left">
                                                        <p class="tab-img">AB</p>
                                                        <p class="tab-name">Арсений Вечаслав-Б...</p>
                                                    </div>
                                                    <div class="mt-head-right">
                                                        <p class="tab-alarm">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                        <p class="tab-favorite">
                                                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-body">
                                                    <div class="mt-item">
                                                        <span>Телефон</span>
                                                        <p>7 960 091 89 51</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Домен</span>
                                                        <p>Catlivan.ru</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Создан</span>
                                                        <p>05 июл, 12:20</p>
                                                    </div>
                                                </div>
                                                <div class="mt-ftr">
                                                    <p class="mt-btn talk">Договор</p>
                                                </div>
                                            </div>
                            
                                            <div class="mob-table">
                                                <div class="mt-head">
                                                    <div class="mt-head-left">
                                                        <p class="tab-img">AB</p>
                                                        <p class="tab-name">Владислав</p>
                                                    </div>
                                                    <div class="mt-head-right">
                                                        <p class="tab-alarm">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.999 22C7.05569 21.9348 3.06417 17.9433 2.99902 13C3.06417 8.05668 7.05569 4.06516 11.999 4C16.9423 4.06516 20.9339 8.05668 20.999 13C20.9339 17.9433 16.9423 21.9348 11.999 22ZM11.999 6C8.15418 6.05062 5.04963 9.15517 4.99902 13C5.04963 16.8448 8.15418 19.9494 11.999 20C15.8438 19.9494 18.9484 16.8448 18.999 13C18.9484 9.15517 15.8438 6.05062 11.999 6ZM16.999 14H10.999V8H12.999V12H16.999V14ZM20.291 6.708L17.282 3.708L18.691 2.291L21.701 5.291L20.291 6.707V6.708ZM3.70602 6.708L2.29102 5.291L5.28202 2.291L6.69702 3.708L3.70802 6.708H3.70602Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                        <p class="tab-favorite">
                                                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.9999 18.26L4.94691 22.208L6.52191 14.28L0.586914 8.792L8.61391 7.84L11.9999 0.5L15.3859 7.84L23.4129 8.792L17.4779 14.28L19.0529 22.208L11.9999 18.26Z" fill="#A0A0B4"/>
                                                            </svg>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-body">
                                                    <div class="mt-item">
                                                        <span>Телефон</span>
                                                        <p>7 960 091 89 51</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Домен</span>
                                                        <p>Catlivan.ru</p>
                                                    </div>
                                                    <div class="mt-item">
                                                        <span>Создан</span>
                                                        <p>05 июл, 12:20</p>
                                                    </div>
                                                </div>
                                                <div class="mt-ftr">
                                                    <p class="mt-btn deal-close">Сделка закрыта</p>
                                                </div>
                                            </div>
                                        </div>
                            
                                        <div class="crm-pagninton only-mob">
                                            <div class="crm-pagninton-left">
                                                <ul class="pagination">
                                                    <li class="page-item p-prev">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12.2881 16L18.2981 22.01L19.7121 20.596L15.1121 15.996L19.7121 11.396L18.2981 9.98999L12.2881 16Z" fill="#06061D"/>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link pagination__active" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                                                    <li class="page-item p-next">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M19.7131 16L13.7021 9.98999L12.2881 11.404L16.8881 16.004L12.2881 20.597L13.7021 22.011L19.7131 16Z" fill="#06061D"/>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
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