<div class="text-right">
    <div class="credits">
      <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
      -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</section>
<!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="{{ ('admin_js/jquery.js') }}"></script>
<script src="{{ ('admin_js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ ('admin_js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ ('admin_js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<!-- nice scroll-->
<script src="{{ ('admin_js/bootstrap.min.js') }}"></script>
<script src="{{ ('admin_js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ ('admin_js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{ ('admin_assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ ('admin_js/jquery.sparkline.js') }}" type="text/javascript"></script>
<script src="{{ ('admin_assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ ('admin_js/owl.carousel.js') }}"></script>
<!-- jQuery full calendar -->
<script src="{{ ('admin_js/fullcalendar.min.js') }}"></script>
<!-- Full Google  Calendar -->
<script src="{{ ('admin_assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ ('admin_js/calendar-custom.js') }}"></script>
<script src="{{ ('admin_js/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ ('admin_js/jquery.customSelect.min.js') }}"></script>
<script src="{{ ('admin_assets/chart-master/Chart.js') }}"></script>

<!--custome script for all page-->
<script src="{{ ('admin_js/scripts.js') }}"></script>
<!-- custom script for this page-->
<script src="{{ ('admin_js/sparkline-chart.js') }}"></script>
<script src="{{ ('admin_js/easy-pie-chart.js') }}"></script>
<script src="{{ ('admin_js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ ('admin_js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ ('admin_js/xcharts.min.js') }}"></script>
<script src="{{ ('admin_js/jquery.autosize.min.js') }}"></script>
<script src="{{ ('admin_js/jquery.placeholder.min.js') }}"></script>
<script src="{{ ('admin_js/gdp-data.js') }}"></script>
<script src="{{ ('admin_js/morris.min.js') }}"></script>
<script src="{{ ('admin_js/sparklines.js') }}"></script>
<script src="{{ ('admin_js/charts.js') }}"></script>
<script src="{{ ('admin_js/jquery.slimscroll.min.js') }}"></script>
<script>
  //knob
  $(function() {
    $(".knob").knob({
      'draw': function() {
        $(this.i).val(this.cv + '%')
      }
    })
  });

  //carousel
  $(document).ready(function() {
    $("#owl-slider").owlCarousel({
      navigation: true,
      slideSpeed: 300,
      paginationSpeed: 400,
      singleItem: true

    });
  });

  //custom select box

  $(function() {
    $('select.styled').customSelect();
  });

  /* ---------- Map ---------- */
  $(function() {
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
      backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code) {
        el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
      }
    });
  });
</script>

</body>

</html>
