<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "readontest");
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT * FROM users ORDER by ID";
if ($result = $mysqli->query($query)) {
	$array = array ();
    while ($row = $result->fetch_assoc()) {
        	$array[]=$row;
    }

    $result->free();
}

$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>Личный кабинет</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pakhi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
		 <script src="js/scripts.js" type="text/javascript"></script>
</head>
<body>
	<div class="c-header" id="home">
	  <div class="top-header">
	    <div class="container">
	    <div class="logo">
	      <a href="index.php"><img src="images/logo.png" alt="" /></a>
	    </div>
	      <div class="header-top-right">
	      <!-- start search-->
	          <div class="search-box">
	            <div id="sb-search" class="sb-search">
	            <form>
	              <input class="sb-search-input" placeholder="Название произведения..." type="search" name="search" id="search">
	              <input class="sb-search-submit" type="submit" value="">
	              <span class="sb-icon-search"> </span>
	            </form>
	          </div>
	          </div>
	        <!-- search-scripts -->
	        <script src="js/classie.js"></script>
	        <script src="js/uisearch.js"></script>
	          <script>
	            new UISearch( document.getElementById( 'sb-search' ) );
	          </script>
	        <!-- //search-scripts -->

					      <!--  <a href="cart.php"><i class="cart"></i></a>-->
	      </div>
	    <div class="navigation">
	    <div>
	            <label class="mobile_menu" for="mobile_menu">
	            <span>Menu</span>
	            </label>
	            <input id="mobile_menu" type="checkbox">
	      <ul class="nav">
	            <li class="active"><a href="index.php">Главная</a></li>
	            <li class="dropdown1"><a href="products.php">Каталог</a>
	              <ul class="dropdown2">
	                <li><a href="products.php">Детективы</a></li>
	                <li><a href="products.php">Манга</a></li>
	                <li><a href="products.php">Романы</a></li>
	              </ul>
	            </li>
            <li class="active"><a href="top.php">Топ книг</a></li>
	            <li class="active"><a href="contact.php">Обратная связь</a></li>
	           <li class="active"><a href="personalcab.php">Личный кабинет</a></li>
	          <div class="clearfix"></div>
	        </ul>
	  </div>
	 </div>
	    </div>
	  </div>

	</div>

<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">

                    <li class="home">
                       <a href="index.php" title="На главную"><img src="images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li><li>
         <span class="red">&nbsp;Личный кабинет&nbsp;</span>
     </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Назад на главную</a></li>
                </ul>
                <div class="clearfix"></div>
		</div>
</div>
<?php
for($i=0;$i<count($array);$i++){	
						if($_SESSION['email']==$array[$i]['email'])
						{
							$_SESSION['first_name'] = $array[$i]['first_name'];
						}						
					}
?>
	<div class="content">
			<div class="features-section">
				<div class="features-section-head text-center">
					<h3><span>С</span> возвращением,<?php echo ' '.$_SESSION['first_name'].''; ?></h3>
					</div>
				</div>
			</div>
<div class="container">
			<div class="products-section">
				<div class="products-section-head text-center">
					<h3><span>С</span>писки произведений</h3>
				</div>
				<div class="products-section-grids">
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon web"><label class="active"></label>Все</span></li>
						<li><span class="filter" data-filter="app"><label></label>Читаю</span></li>
						<li><span class="filter" data-filter="card"><label></label>Буду читать</span></li>
						<li><span class="filter" data-filter="icon"><label></label>Прочитано</span></li>
						</ul>
					<div id="portfoliolist">
					<div class="portfolio icon mix_all"  data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a href="bookpage1.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic1.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><<div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="images/icon_eye.png" class="img-responsive go" alt=""/></h2>
						  	</div></a>
							<div class="title">
								<div class="colors">
								<h4>Мы</h4>

								</div>
							
								<div class="clearfix"></div>
							</div>
		                </div>
					</div>
					<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a href="bookpage2.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic2.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="images/icon_eye.png" class="img-responsive go" alt=""/></h2>
						  	</div></a>
							<div class="title">
								<div class="colors">
								<h4>Котлован</h4>
								</div>
							
								<div class="clearfix"></div>
							</div>
		                </div>
					</div>
					<div class="portfolio card mix_all"  data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a href="bookpage3.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic3.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="images/icon_eye.png" class="img-responsive go" alt=""/></h2>
						  	</div></a>
							<div class="title">
								<div class="colors">
								<h4>Шерлок</h4>
								</div>
							
								<div class="clearfix"></div>
							</div>
		                </div>
					</div>
					<div class="portfolio icon mix_all"  data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a href="bookpage4.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic4.jpg" class="img-responsive" alt="" />
						     <div class="b-wrapper"><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="images/icon_eye.png" class="img-responsive go" alt=""/></h2>
						  	</div></a>
							<div class="title">
								<div class="colors">
								<h4>Ромео и Джульетта</h4>
								</div>
								
								<div class="clearfix"></div>
							</div>
		                </div>
					</div>
					<div class="portfolio app mix_all"  data-cat="app"style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a href="bookpage5.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic5.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="images/icon_eye.png" class="img-responsive go" alt=""/></h2>
						  	<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							<div class="title">
								<div class="colors">
								<h4>Титаник</h4>
								</div>
								
								<div class="clearfix"></div>
							</div>
		                </div>
					</div>
					<div class="portfolio card mix_all"  data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">
							<a href="bookpage6.php" class="b-link-stripe b-animate-go  thickbox">
						     <img src="images/pic6.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="images/icon_eye.png" class="img-responsive go" alt=""/></h2>
						  	</div></a>
							<div class="title">
								<div class="colors">
								<h4>О дивный новый мир</h4>
								</div>
								
								<div class="clearfix"></div>
							</div>
		                </div>
					</div>
<div class="clearfix"></div>
				</div>
		  </div>

		  <!-- script-for-portfolio -->
		  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {

		var filterList = {

			init: function () {

				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});

			},

			hoverEffect: function () {

				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
					}
				);

			}

		};

		// Run the show!
		filterList.init();


	});
	</script>


				</div>
			</div>
	<?php
include 'footer.php';
	?>
		</body>
		</html>

