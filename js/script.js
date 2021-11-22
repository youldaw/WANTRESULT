$(function (){

    $('.crm-menu-btn a, .mobile-menu-opener').on('click', function(e){
		e.preventDefault();
		var menu = $('.left-menu').toggleClass('minimized');
		$('.left-menu .left-nav li a span').toggleClass('show');
		$('.brand a span').toggleClass('show');
		$('.crm-main').toggleClass('show');
		$('header').toggleClass('show');
		$('.wrapper').toggleClass('show');
	});
	
	$('.tarif-btn').on('click',function(e){
        e.preventDefault();
        $('.crm-tarif').toggleClass('active');
        $('.tarif-drop').toggleClass('active');
    });

	$('.allTime-btn').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.allTime-drop').toggleClass('active');
    });

    $('.task-btn').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.task-drop').toggleClass('active');
    });

    $('.belt-btn').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.belt-drop').toggleClass('active');
    });

    $('.crm-head-right .sort-btn').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.crm-head-right .sort-drop').toggleClass('active');
    });

    $('.manager-btn').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.manager-drop').toggleClass('active');
    });

    $('.settings-btn').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.settings-drop').toggleClass('active');
    });
    $('.mob-tag').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.crm-tag-block').toggleClass('active');
    });

    $('.list-btn').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.list-drop').toggleClass('active');
    });
    $(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $(".list-drop, .settings-drop, .manager-drop, .sort-drop, .belt-drop, .task-drop, .allTime-drop, .tarif-drop, .crm-tag-block"); // тут указываем class элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.removeClass('active'); // скрываем его
        }
    });
    

    $('.hs-form input').on('click',function(e){
        e.preventDefault();
        $('.results').addClass('active');
    });
    $(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $(".results"); // тут указываем class элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.removeClass('active'); // скрываем его
        }
    });

    $(window).scroll(function(){
        if ($(window).scrollTop() >= 100) {
             $('header').addClass('sticky');
         }
         else {
             $('header').removeClass('sticky');
         }
     });

     $("#change-text").change(function() {
        if(this.checked) {
            $("#dynamic-text").text("Активный");
        } else {
            $("#dynamic-text").text("Неактивный")
        }
    });

    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });

     
    $('#demo').daterangepicker({
        "singleDatePicker": true,
        "autoApply": true,
        "locale": {
            "format": "DD.MM.YYYY",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "Вс",
                "Пн",
                "Вт",
                "Ср",
                "Чт",
                "Пт",
                "Сб"
            ],
            "monthNames": [
                "Январь",
                "Февраль",
                "Март",
                "Апрель",
                "Май",
                "Июнь",
                "Июль",
                "Август",
                "Сентябрь",
                "Октябрь",
                "Ноябрь",
                "Декабрь"
            ],
            "firstDay": 1
        },
        "startDate": true,
        "endDate": "11/15/2021"
    }, function(start, end, label) {
      console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });


});

