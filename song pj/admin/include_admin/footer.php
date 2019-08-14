 <!-- <script src="js/jquery-1.11.1.min.js"></script> -->
 <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="js/function1.js"></script>
 <script>
    // $('#calendar').datepicker({
      
    // });
    //parent1
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
    //parent2
    // !function ($) {
    //     $(document).on("click","ul.nav li.parent2 > a > span.icon", function(){          
    //         $(this).find('em:first').toggleClass("glyphicon-minus");      
    //     }); 
    //     $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    // }(window.jQuery);

    // $(window).on('resize', function () {
    //   if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    // })
    // $(window).on('resize', function () {
    //   if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    // })

    $(document).ready(function(){
      $('.check_main').click(function(){
        if($(this).is(':checked')){
          $('.check_box_check').attr('checked','checked');
        }else{
          $('.check_box_check').removeAttr('checked','checked');
        }
      });
    });
  </script>
</body>

</html>