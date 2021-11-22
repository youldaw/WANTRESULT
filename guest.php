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


		<section class="guest-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 back-block">
                        <a href="#!" class="back-btn"><img src="images/back-arrow.svg" alt=""> Назад</a>
                        <div class="btn-group guest-settings">
                            <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/guest-edit-setting-icon.svg" alt="">
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Скопировать ссылку</a></li>
                              <li><a href="#">Добавить в чёрный список</a></li>
                              <li><a href="#" class="red">Удалить контакт</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="guest-block">
                            <div class="guest-info">
                                <div class="guest-img">
                                    <span class="gi"><img src="images/user-img-default.svg" alt=""></span>
                                    <span class="guest-name">Гость #4234</span>
                                </div>
                                <div class="guest-status">
                                    <span>Новый</span>
                                </div>
                            </div>
                            <div class="guest-tel">
                                <div class="tel-left info-left-txt">
                                    <p>Телефон</p>
                                </div>
                                <div class="tel-right">
                                    <div class="tel-in">
                                        <p>+7 960 091 89 51</p>
                                        <div class="rating rating2">
                                            <a href="#5" class="star" title="Give 5 stars">★</a>
                                            <a href="#4" class="star active" title="Give 4 stars">★</a>
                                            <a href="#3" class="star active" title="Give 3 stars">★</a>
                                            <a href="#2" class="star active" title="Give 2 stars">★</a>
                                            <a href="#1" class="star active" title="Give 1 star">★</a>
                                        </div>
                                        <div class="tel-drop">
                                            <div class="btn-group">
                                                <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="images/phone-icon.svg" alt="">
                                                </button>
                                                <ul class="dropdown-menu">
                                                  <li><a href="#">MoiZvonki</a></li>
                                                  <li><a href="#">Mango</a></li>
                                                  <li><a href="#">Голосовое сообщение</a></li>
                                                  <li><a href="#">UIS</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-num">
                                        <a href="#!">Добавить номер</a>
                                    </div>
                                </div>
                            </div>
                            <div class="guest-mail">
                                <div class="mail-left info-left-txt">
                                    <p>Email</p>
                                </div>
                                <div class="mail-right">
                                    <a href="#!" class="add-mail">Добавить</a>
                                </div>
                            </div>
                            <div class="guest-domen">
                                <div class="domen-left info-left-txt">
                                    <p>Домен</p>
                                </div>
                                <div class="domen-right">
                                    <span>Catlivan.ru</span>
                                </div>
                            </div>
                            <div class="guest-region">
                                <div class="region-left info-left-txt">
                                    <p>Регион</p>
                                </div>
                                <div class="region-right">
                                    <span>г. Санкт-Петербург</span>
                                </div>
                            </div>
                            <div class="guest-created">
                                <div class="created-left info-left-txt">
                                    <p>Создано</p>
                                </div>
                                <div class="created-right">
                                    <span>coach@yandex</span>
                                </div>
                            </div>
                            <div class="guest-summa">
                                <div class="summa-left info-left-txt">
                                    <p>Сумма</p>
                                </div>
                                <div class="summa-right">
                                    <input type="number" name="guest-money" id="guest-money" value="" placeholder="2599 ₽">
                                </div>
                            </div>
                        </div>
                        <div class="guest-remind">
                            <div class="remind-top guest-in-title">
                                <p>Напоминание</p>
                                <a href="#!"><img src="images/edit-icon.svg" alt=""></a>
                            </div>
                            <div class="remind-time">
                                <p>
                                    <span><img src="images/clock-icon.svg" alt=""></span>
                                    <span class="remind-date">12 июл, 14:00</span>
                                </p>
                            </div>
                            <div class="remind-txt">
                                <p>Всемирная информационная компьютерная сеть, связывающая между собой как пользователей компьютерных сетей, так и пользователей</p>
                            </div>
                        </div>
                        <div class="guest-comment">
                            <div class="comment-top guest-in-title">
                                <p>Комментарий</p>
                                <a href="#!"><img src="images/edit-icon.svg" alt=""></a>
                            </div>
                            <div class="comment-txt">
                                <p>Всемирная информационная компьютерная сеть, связывающая между собой как пользователей компьютерных сетей, так и пользователей</p>
                            </div>
                        </div>
                        <div class="guest-other">
                            <div class="other-top guest-in-title">
                                <p>Дополнительно</p>
                            </div>
                            <div class="other-block">
                                <div class="other-info">
                                    <p>Устройство</p>
                                    <span>Mobile Device</span>
                                </div>
                                <div class="other-info">
                                    <p>Платформа</p>
                                    <span>Android</span>
                                </div>
                                <div class="other-info">
                                    <p>Страна</p>
                                    <span>RU/Россия/Russia</span>
                                </div>
                                <div class="other-info">
                                    <p>Переход</p>
                                    <span>Не задан</span>
                                </div>
                                <div class="other-info">
                                    <p>UTM метки</p>
                                    <span>Не задан</span>
                                </div>
                                <div class="other-info">
                                    <p>Страницы</p>
                                    <span>16.07.2021, http://qf.ru/</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="cycle-tab-container">
                            <ul class="nav nav-tabs">
                                <li class="cycle-tab-item active">
                                    <a class="nav-link" role="tab" data-toggle="tab" href="#history">История</a>
                                </li>
                                <li class="cycle-tab-item"> 
                                    <a class="nav-link" role="tab" data-toggle="tab" href="#history-call">История звонков</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="history" role="tabpanel" aria-labelledby="history-tab">
                                    <div class="guest-history">
                                        <div class="guest-history-block first">
                                            <div class="history-icon">
                                                <img src="images/user-img-default.svg" alt="">
                                            </div>
                                            <div class="col-lg-12 history-in">
                                                <div class="history-title">
                                                    <p>Смена статуса</p>
                                                </div>
                                                <div class="history-status">
                                                    <p>Без статуса</p>
                                                    <span><img src="images/black-arrow-right.svg" alt=""></span>
                                                    <p>Новый</p>
                                                </div>
                                                <div class="history-date">
                                                    <p>24 Июл, 2020, 15:02</p>
                                                    <span>coach@yandex</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="guest-history-block">
                                            <div class="history-icon chat">
                                                <img src="images/chat-icon.svg" alt="">
                                            </div>
                                            <div class="col-lg-12 history-in">
                                                <div class="history-title">
                                                    <p>Добавлен комментарий</p>
                                                </div>
                                                <div class="history-status">
                                                    <p>Всемирная информационная компьютерная сеть, связывающая между собой как пользователей компьютерных сетей, так и пользователей</p>
                                                </div>
                                                <div class="history-date">
                                                    <p>24 Июл, 2020, 15:02</p>
                                                    <span>coach@yandex</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="guest-history-block">
                                            <div class="history-icon phone">
                                                <img src="images/phone-white-icon.svg" alt="">
                                            </div>
                                            <div class="col-lg-12 history-in">
                                                <div class="history-title">
                                                    <p>Исходящий звонок</p>
                                                </div>
                                                <div class="history-status audio">
                                                    <audio controls>
                                                        <source src="audio/ringtone.mp3" type="audio/mpeg" />
                                                    </audio>
                                                </div>
                                                <div class="history-date">
                                                    <p>24 Июл, 2020, 15:02</p>
                                                    <span>coach@yandex</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="guest-history-block">
                                            <div class="history-icon">
                                                <img src="images/user-img-default.svg" alt="">
                                            </div>
                                            <div class="col-lg-12 history-in">
                                                <div class="history-title">
                                                    <p>Смена статуса</p>
                                                </div>
                                                <div class="history-status">
                                                    <p>Без статуса</p>
                                                    <span><img src="images/black-arrow-right.svg" alt=""></span>
                                                    <p>Новый</p>
                                                </div>
                                                <div class="history-date">
                                                    <p>24 Июл, 2020, 15:02</p>
                                                    <span>coach@yandex</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="guest-history-block">
                                            <div class="history-icon chat">
                                                <img src="images/chat-icon.svg" alt="">
                                            </div>
                                            <div class="col-lg-12 history-in">
                                                <div class="history-title">
                                                    <p>Добавлен комментарий</p>
                                                </div>
                                                <div class="history-status">
                                                    <p>Всемирная информационная компьютерная сеть, связывающая между собой как пользователей компьютерных сетей, так и пользователей</p>
                                                </div>
                                                <div class="history-date">
                                                    <p>24 Июл, 2020, 15:02</p>
                                                    <span>coach@yandex</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="guest-history-block">
                                            <div class="history-icon phone">
                                                <img src="images/phone-white-icon.svg" alt="">
                                            </div>
                                            <div class="col-lg-12 history-in">
                                                <div class="history-title">
                                                    <p>Исходящий звонок</p>
                                                </div>
                                                <div class="history-status audio">
                                                    <audio controls>
                                                        <source src="audio/ringtone.mp3" type="audio/mpeg" />
                                                    </audio>
                                                </div>
                                                <div class="history-date">
                                                    <p>24 Июл, 2020, 15:02</p>
                                                    <span>coach@yandex</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="history-call" role="tabpanel" aria-labelledby="history-call-tab">... </div>
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