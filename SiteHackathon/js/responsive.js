
     if ($(window).width() >= 699) {
         $('head').append('<script type="text/javascript" src="js/jquery.pagepiling.min.js" id="haaaa"></script>');
     } else if ($(window).width() < 699) {
         $('#haaaa').remove('<script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>');
     }