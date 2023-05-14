<!-- TEST SITE No index -->
<meta name="robots" content="noindex" />

<!-- Styles -->
<link href="<?php echo $Path; ?>assets/css/reset_base.css" rel="stylesheet" type="text/css" />
<link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- smooth-scroll -->
<script src="<?php echo $Path; ?>assets/js/smooth-scroll.polyfills.min.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]', {
		header: '.main_nav'
	});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- ここに gtag -->

</head>
<body class="top">

	<div id="scroll_top"></div>
	<div class="sticky-dummy"></div>
	<div class="main_header sticky">
		<nav class="main_nav">
			<div class="hd_wrap pc">
				<ul class="pc_nav">
					<li><a href="<?php echo $Path; ?>member/">申込者はこちら</a></li>
				</ul>
			</div><!-- hd_wrap -->
		</nav><!-- main_nav -->

		<div class="sp_nav">
			<input id="hamburger" class="hamburger" type="checkbox"/>
			<label class="hamburger" for="hamburger">
				<i></i>
				<text>
					<close>close</close>
					<open>menu</open>
				</text>
			</label>
			<section class="drawer-list sp">
				<ul>
					<li><a class="top_link" href="<?php echo $Path; ?>"><h1><img class="logo" src="<?php echo $Path; ?>assets/img/logo.png"><span class="text">公益社団法人 日本船舶海洋工学会<br>令和5年 春季講演会</span></h1></a></li>
                    <li><a href="<?php echo $Path; ?>member/">申込者はこちら</a></li>
				</ul>
			</section>
		</div>
	</div><!-- main_header -->
