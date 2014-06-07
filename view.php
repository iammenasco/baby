<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico">

<title>I am Menasco.</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/cover.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">I am <span class="name">Menasco</span>.</h3>
						<ul class="nav masthead-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="http://portfolio.iammenasco.com">Portfolio</a></li>
							<li><a href="http://resume.iammenasco.com">Resume</a></li>
						</ul>
					</div>
				</div>
				<div class="inner cover">
					<h1 class="cover-heading"><span class="girl">Guess</span> the <span class="boy">gender</span>.</h1>
					<br/>
					<p class="lead">April, 2020. Its a 50/50 chance, we think...</p>
					<p class="lead">
						<button class="btn btn-lg btn-outline-inverse-girl" id="girl" onclick="girl()">Girl</button>
						<button class="btn btn-lg btn-outline-inverse-boy" id="boy" onclick="boy()">Boy</button>
					</p>
					<br/>
					<p class="lead">
						<div class="input-group">
							<input type="text" class="form-control" onfocus="if (this.value=='Guess the Name!') this.value = ''" value="Guess the Name!" id="name">
							<span class="input-group-btn">
							<button class="submit btn " id="btn" type="button" onclick="voteName();">Submit</button>
							</span>
						</div>
					</p>
				</div>
				<div class="mastfoot">
					<div class="inner">
						<p>See more on my <a href="http://portfolio.iammenasco.com">Portfolio</a>, by <a href="https://twitter.com/iammenasco">@iammenasco</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript">var boyCount = <?php echo $currentBoyCount; ?></script>
	<script type="text/javascript">var girlCount = <?php echo $currentGirlCount; ?></script>
	<script type="text/javascript" src="js/js.js"></script>
</body>
</html>