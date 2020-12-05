<!DOCTYPE html>
<html>
<head>
<title>Контакты</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
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
<script type="text/javascript" src="js/hover_pack.js"></script>
		  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
	<!-- header-section-starts -->
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
            <li class="active"><a href="news.php">Новости</a></li>
	            <li><a href="contact.php">Обратная связь</a></li>
<?php
             if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){?>
             <li class="active"><a href="index.php">Личный кабинет</a></li>';}
             <?php
            }
            else
            {
              echo'
            <li class="active"><a href="personalcab.php">Личный кабинет</a></li>';}
            ?>
	          <div class="clearfix"></div>
	        </ul>
	  </div>
	 </div>
	    </div>
	  </div>

	</div>

		<!-- start Contact-page -->
	<!-- content-section-starts -->
	<div class="container">
<div class="dreamcrub">
			   	 <ul class="breadcrumbs">

                    <li class="home">
                       <a href="index.php" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li>
                       Контакты
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Назад на главную</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>

<div class="container">
<div class="contact">
					<div class="contact_info">
						<h2>Где мы на карте:</h2>
			    	 		<div class="contact-map">
								<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2362.878026039727!2d23.837992116076652!3d53.6847992800513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dfd62311307ba9%3A0x725ceeb0ed11ba1c!2z0JPRgNC-0LTQvdC10L3RgdC60LjQuSDQs9C-0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDQuNC80LXQvdC4INCv0L3QutC4INCa0YPQv9Cw0LvRiw!5e0!3m2!1sru!2sby!4v1575607730120!5m2!1sru!2sby" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
      				</div>
				  <div class="contact-form">
			 	  	 	<h2>Напишите нам</h2>
			 	 	    <form method="post" action="contact-post.php">
					    	<div>
						    	<span><label>Имя</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Мобильный телефон</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Сообщение</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Отправить"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clearfix"></div>
			  </div>
</div>

	<!-- content-section-ends -->

	<?php
include 'footer.php';
	?>
</body>
</html>
