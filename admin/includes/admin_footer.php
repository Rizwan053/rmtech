

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	// demo.initChartist();

        	// $.notify({
            // 	icon: 'ti-gift',
            // 	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            // },{
            //     type: 'success',
            //     timer: 4000
            // });

            $('li#act').click(function(){
            $(this).toggleClass('active');
            // alert('dfsgs');
            });

    	});
	</script>
    <script>
    new Chartist.Bar('.ct-chart', {
  labels: ['Posts', 'Categories', 'Comments', 'Subscribers'],
  series: [<?php echo count($posts)?>, <?php echo count($categories) ?>, <?php echo count($comments) ?>, <?php echo count($subscribers) ?>, ]
}, {
  distributeSeries: true
});
    </script>

</html>
