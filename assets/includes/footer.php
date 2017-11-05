<hr>

 <section id="footer">
  <footer class="container">
    <div class="row">
     
		<div class="col-xs-12">
			<div class="social">
				<ul class="list-group list-unstyled">
					<div class="pull-left">
						<li class="list-group-item">
							<object class="social-icons" data="/assets/images/sm-fb.svg" type="image/svg+xml"></object>
						</li>
						<li class="list-group-item">
							<object class="social-icons" data="/assets/images/sm-insta.svg" type="image/svg+xml"></object>
						</li>
						<li class="list-group-item">
							<object class="social-icons" data="/assets/images/sm-youtube.svg" type="image/svg+xml"></object>
						</li>
						<li class="list-group-item">
							<object class="social-icons" data="/assets/images/sm-vimeo.svg" type="image/svg+xml"></object>
						</li>
					</div>
					<div class="copyright pull-right">
						<li class="list-group-item"><?php auto_copyright();?> Simon Media</li>
					</div>
				</ul>
			</div>
		</div>

    </div>
  </footer>
</section>
<!--End of Footer-->

<!--Scripts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../assets/js/hide-nav.js"></script>

<?php 
// No argument required for current year.
// Otherwise, pass start year as a 4-digit value.
function auto_copyright($startYear = null) {
	$thisYear = date('Y');  // get this year as 4-digit value
    if (!is_numeric($startYear)) {
		$year = $thisYear; // use this year as default
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) { // $year cannot be greater than this year - if it is then echo only current year
		echo "&copy; $thisYear"; // display single year
	} else {
		echo "&copy; $year&ndash;$thisYear"; // display range of years
	}   
 } 
?>


<!-- Google Analytics
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-77337091-1', 'auto');
    ga('require', 'displayfeatures');
    ga('require', 'linkid');
    ga('send', 'pageview');
</script> -->