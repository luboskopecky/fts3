<!DOCTYPE HTML>
<html lang="en">
<head>
<title>WebFTS - Simplifying power - Jobs</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/ico/favicon.png">
<meta name="description" content="" />
<meta name="keywords" content="" />

<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/justified-nav.css" rel="stylesheet">
<link href="css/validation.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

<link rel="stylesheet" href="css/site-tour-styles/custom-site-tour.css">
<link rel="stylesheet" href="/paraFiles/css/diffBrsStyles/submitBaseStyles.css"/>
<link rel="stylesheet" href="/css/nav-bar-custom/nav-bar-custom.css">

<!-- General Site tour styles -->
<link href="/site-tour/introJs/introjs.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>  
<script src="js/proxy.js/glib/sha512.js"></script>
<script src="js/proxy.js/jsrsasign-latest-all-min.js"></script>
<script src="js/proxy.js/asn11.js"></script>
<script src="js/proxy.js/yahoo-min.js"></script>
<script src="js/proxy.js/proxy.js"></script>
<script src="js/proxy.js/proxy-util.js"></script>
<script src="js/proxy.js/ProxyCertInfo.js"></script>
<script src="js/proxy.js/base64E.js"></script>
<script src="js/proxy.js/glib/core-min.js"></script>
<script src="js/proxy.js/glib/enc-base64-min.js"></script>
<script src="kipper/js/ssoHelper.js"></script>
<script src="kipper/js/certHelper.js"></script>
<script src="kipper/kipper.js"></script>

<script src="js/ftsHelper.js"></script>
<script src="js/jobs.js"></script>
<script> 
	$( document ).ready(function() {
                if(!sessionStorage.ftsRestEndpoint)
                        getConfig();
        });

	$(function(){			
	   $("#includedTransmissionsList").load("transmissionsList.php");  
	});
</script>
</head>
<body>

	<div class= "loginBar">
		<div class="row-fluid">
			<script> 
				$(function(){
					$("#ssoAuth").load("kipper/php/ssoAuth.php");
				});
			</script>
			<div id="ssoAuth"></div>
		</div>
	</div>	

	<div class='container-top-outer'>
		<div class="container-top-inner">
			<div class="row">
				<script> 
					$(function(){
					   $("#delegateBtn").load("delegateButton.html"); 
					});
				</script>
				<div id="delegateBtn"></div>
			</div>

			<div class="masthead">
				<h3 class="text-muted">WebFTS  (Beta version)  <small><em>Simplifying power</em></small></h3>
				<ul class="nav nav-justified">
					<li><a href="index.php"><i class="glyphicon glyphicon-home"></i>&nbsp;Home</a></li>
					<li class="active"><a href="#"><i class="glyphicon glyphicon-tasks"></i>&nbsp;My jobs</a></li>
					<li><a href="submit.php"><i class="glyphicon glyphicon-chevron-left"></i><i class="glyphicon glyphicon-chevron-right"></i>&nbsp;Submit a transfer</a></li>
				</ul>
			</div>
		<img src="paraFiles/img/shadow-bottom.png" alt=' ' class='divider'>
		</div>
	</div>
	<div class="main-back">
		<div class="row">
			<div id="includedTransmissionsList"></div>
		</div>
	</div>

	<script type="text/javascript" src="/site-tour/introJs/intro.js"></script>
	<script type="text/javascript" src="/js/site-tourTransmissions.js"></script>

	<script type="text/javascript">
	        if (RegExp('multipage', 'gi').test(window.location.search)) {
	        	myIntro.setOption('doneLabel', 'Ready! I got it!');
	        	myIntro.start();
	        }
	</script>

</body>
</html>
