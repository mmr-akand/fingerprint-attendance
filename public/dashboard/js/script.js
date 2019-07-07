jQuery(document).ready(function() {
    "use strict";

    if ($(window).width() >= 768) {
        $('.dropdown-onhover').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).slideDown(300);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).slideUp(300);
        });
    }

    $(document).on('click', '.aside-toggler', function(e) {
        e.preventDefault();
        $(this).parents('.dashboard').toggleClass('aside-navbar-uncollapse').toggleClass('aside-navbar-collapse');
    });

    $(function() {
        $('.aside-nav-sub').slideUp();
        $('.nav-has-dropdown > a').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.nav-has-dropdown').toggleClass('open');
            $(this).closest('.nav-has-dropdown').find('.aside-nav-sub').slideToggle('fast')
        });
    });



    if ($(window).width() <= 991) {
        $('.dashboard').toggleClass('aside-navbar-uncollapse').toggleClass('aside-navbar-collapse')
    } else if ($(window).width() <= 576) {
        $('.dashboard').toggleClass('aside-navbar-uncollapse').toggleClass('aside-navbar-collapse')
    }



    $(document).on('click', '.dropdown-mega .dropdown-menu', function(e) {
        e.stopPropagation()
    });
	
	$('.custom-file-input').on('change',function(){
	  $(this).next('.form-control-file').addClass("selected").html($(this).val());
	})




});


var day = document.getElementById('day');
var month = document.getElementById('month');
var year = document.getElementById('year');
// var daydate = document.getElementById('daydate');
// var monthdate = document.getElementById('monthdate');
// var yeardate = document.getElementById('yeardate');
// var daily = document.getElementById('daily');



    // daydate.className = 'nodisplay';
    // monthdate.className = 'nodisplay';
    // yeardate.className = 'nodisplay';
    daily.className = 'nodisplay';
    monthly.className = 'nodisplay';
    yearly.className = 'nodisplay';

day.onclick = function () {
   
       
        daily.className = 'displaydaily';

        monthly.className = 'nodisplay';
        yearly.className = 'nodisplay';



   
};
month.onclick = function () {
   
        
        daily.className = 'nodisplay';

        monthly.className = 'displaydaily';
        yearly.className = 'nodisplay';

};
year.onclick = function () {
   
    daily.className = 'nodisplay';

        monthly.className = 'nodisplay';
        yearly.className = 'displaydaily';

};






//$('#day').click(function () {
    //$('#daydate').attr
   //var firstname = $('#firstname').val();
     //var lastname = $('#lastname').val();
    //var fullname = firstname + " " + lastname;
   //$('#fullname').val(fullname);


//});
