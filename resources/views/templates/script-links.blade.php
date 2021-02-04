<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap-material-design.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('assets/js/plugins/jquery-jvectormap.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('assets/js/plugins/arrive.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('assets/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/material-dashboard.js?v=2.1.2') }}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/demo/demo.js') }}"></script>
<script>
  $(document).ready(function() {

    $('select').on('focus', function(){
      
      $(this).parent().addClass('is-focused')
    })

    var select = document.getElementById("select");
    select.addEventListener("focus", myFocusFunction, true);
    select.addEventListener("blur", myBlurFunction, true);

    var select1 = document.getElementById("select1");
    select1.addEventListener("focus", myFocusFunction1, true);
    select1.addEventListener("blur", myBlurFunction1, true);

    var select2 = document.getElementById("select2");
    select2.addEventListener("focus", myFocusFunction2, true);
    select2.addEventListener("blur", myBlurFunction2, true);

    var select3 = document.getElementById("select3");
    select3.addEventListener("focus", myFocusFunction3, true);
    select3.addEventListener("blur", myBlurFunction3, true);

    function myFocusFunction() {
      $('#select').parent().addClass('is-focused')
    }

    function myBlurFunction() {
      $('#select').parent().removeClass('is-focused')
    }

    function myFocusFunction1() {
      $('#select1').parent().addClass('is-focused')
    }

    function myBlurFunction1() {
      $('#select1').parent().removeClass('is-focused')
    }

    function myFocusFunction2() {
      $('#select2').parent().addClass('is-focused')
    }

    function myBlurFunction2() {
      $('#select2').parent().removeClass('is-focused')
    }

    function myFocusFunction3() {
      $('#select3').parent().addClass('is-focused')
    }

    function myBlurFunction3() {
      $('#select3').parent().removeClass('is-focused')
    }

    $(document).on('change', '.select-sub', function(){
      var html = ''

      if($(this).val() == 'Transfer of Meter Location')
      {
        $('.sub_services_1').css('display', 'block')
        $('.sub_services_2').css('display', 'none')

        html += '<option>--Please Select--</option>'
        html += '<option>Same household</option>'
        html += '<option>Different household</option>'

        $('#select2').html(html);
        $('#service').html('Meter Location')

        $(this).parent().parent().addClass('col-md-4')
        $(this).parent().parent().removeClass('col-md-6')
      }
      else if($(this).val() == 'Transfer of Ownership')
      {
        $('.sub_services_1').css('display', 'block')
        $('.sub_services_2').css('display', 'none')

        html += '<option>--Please Select--</option>'
        html += '<option>Hereditary</option>'
        html += '<option>Non-Hereditary</option>'

        $('#select2').html(html);
        $('#service').html('Transfer Ownership')

        $(this).parent().parent().addClass('col-md-4')
        $(this).parent().parent().removeClass('col-md-6')
      }
      else if($(this).val() == 'Disconnection')
      {
        $('.sub_services_1').css('display', 'block')

        html += '<option>--Please Select--</option>'
        html += '<option>Voluntary Request from account holder</option>'
        html += '<option>Disconnection Order from waterworks</option>'

        $('#select2').html(html);
        $('#service').html('Reason for Disconnection')

        $(this).parent().parent().addClass('col-md-4')
        $(this).parent().parent().removeClass('col-md-6')
      }
      else if($(this).val() == 'Other')
      {
        $('.sub_services_1').css('display', 'block')
        $('.sub_services_2').css('display', 'block')

        html += '<option>--Please Select--</option>'
        html += '<option>Details of request</option>'

        $('#select2').html(html);
        $('#service').html('Other request')
        $('#service_1').html('Request details')

        $(this).parent().parent().addClass('col-md-4')
        $(this).parent().parent().removeClass('col-md-6')
      }
      else
      {
        $(this).parent().parent().addClass('col-md-6')
        $(this).parent().parent().removeClass('col-md-4')

        $('.sub_services_1').css('display', 'none')
        $('.sub_services_2').css('display', 'none')
      }
    })

    $(document).on('change', '.sub_service_1', function(){
      var html = ''
      if($(this).val() == 'Disconnection Order from waterworks')
      {
        $('.sub_services_2').css('display', 'block')

        html += '<option>--Please Select--</option>'
        html += '<option>Long overdue</option>'
        html += '<option>Unattended leaking</option>'
        html += '<option>Others/Etc.</option>'

        $('#select3').html(html);
        $('#service_1').html('Disconnection Type')
      }
      else if($(this).val() == "Details of request")
      {
        $('.sub_services_2').css('display', 'block')

        html += '<option>--Please Select--</option>'
        html += '<option>Leaking/damage line</option>'
        html += '<option>No water</option>'
        html += '<option>Low pressure</option>'
        html += '<option>Others/Etc.</option>'

        $('#select3').append(html);
        $('#service_1').html('Request details')
      }
      else{
        $('.sub_services_2').css('display', 'none')
      }
    })

    $().ready(function() {
      $sidebar = $('.sidebar');

      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
          $('.fixed-plugin .dropdown').addClass('open');
        }

      }

      $('.fixed-plugin a').click(function(event) {
        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });

      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });

      $('.fixed-plugin .background-color .badge').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('background-color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-background-color', new_color);
        }
      });

      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            $full_page_background.fadeIn('fast');
          });
        }

        if ($('.switch-sidebar-image input:checked').length == 0) {
          var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
      });

      $('.switch-sidebar-image input').change(function() {
        $full_page_background = $('.full-page-background');

        $input = $(this);

        if ($input.is(':checked')) {
          if ($sidebar_img_container.length != 0) {
            $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
          }

          if ($full_page_background.length != 0) {
            $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
          }

          background_image = true;
        } else {
          if ($sidebar_img_container.length != 0) {
            $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
          }

          if ($full_page_background.length != 0) {
            $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
          }

          background_image = false;
        }
      });

      $('.switch-sidebar-mini input').change(function() {
        $body = $('body');

        $input = $(this);

        if (md.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          md.misc.sidebar_mini_active = false;

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        } else {

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

          setTimeout(function() {
            $('body').addClass('sidebar-mini');

            md.misc.sidebar_mini_active = true;
          }, 300);
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function() {
          window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
          clearInterval(simulateWindowResize);
        }, 1000);

      });
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();

  });
</script>