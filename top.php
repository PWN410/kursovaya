<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "readontest");
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT * FROM catalogtest ORDER by avg_rtng DESC";
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
<title>Новости</title>
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

	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">

                    <li class="home">
                       <a href="index.php" title="На главную"><img src="images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li><li>
         <span class="red">&nbsp;Новости&nbsp;</span>
     </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Назад на главную</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>
			   <div class="content">
			<div class="features-section">
				<div class="features-section-head text-center">
					<h3><span>Н</span>аиболее популярные</h3>
					</div>
				</div>
			</div>
<div class="container">
			<div class="products-section">
				<div class="products-section-head text-center">
			<div class="features-section-head text-center">
			   <?php
for($i=0; $i<6;$i++){
	echo '
						
				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				  	  <div class="features-section-head text-center">
				  	  <h2>Оценка:</h2> <h3><span>'.$array[$i]["avg_rtng"].'</span></h3>
				  	  </div>
					  	<h3 class="m_1">'.$array[$i]["Name"].'</h3>
					  	<p class="m_2">'.$array[$i]["Category"].'</p>
						<a href="/bookpage'.$array[$i]["id"].'.php">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic'.$array[$i]["id"].'.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Перейти на страницу</div>
			                  </div>
	                    </div>
					   </div>
					    </div></a>	
						</div>						
			';
}
?>
			</div>
		</div>
	</div>
</div>
</body>

