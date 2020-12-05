
<!DOCTYPE html>
<html>
<head>
<?php
$mysqli = new mysqli("localhost", "root", "", "readontest");
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT * FROM catalogtest ORDER by ID";
if ($result = $mysqli->query($query)) {
	$array = array ();
    while ($row = $result->fetch_assoc()) {
        	$array[]=$row;
    }

    $result->free();
}

$mysqli->close();
?>
<?php
$mysqli = new mysqli("localhost", "root", "", "readontest");
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}
$id = $array[4]["id"];
$mysqli->query("UPDATE catalogtest SET Views = Views + 1 WHERE id = $id");

$mysqli->close();
?>
<?php
echo '
<title>'.$array[4]["Name"].' - '.$array[4]["Author"].'</title>';
?>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
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
	                <li><a href="products.php">Антиутопия</a></li>
	                <li><a href="products.php">Романы</a></li>
	              </ul>
	            </li>
            <li class="active"><a href="news.php">Новости</a></li>
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

		<!-- start Dresses-page -->
	<!-- content-section-starts -->
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">

                    <li class="home">
                       <a href="index.php" title="На главную"><img src="images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li><li>
                    	<?php
                    	echo '
         <span class="red">&nbsp;'.$array[4]["Name"].'&nbsp;</span>';
         ?>
     </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Назад на главную</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>
			   <?php
			   
			   echo '
<div class="content">
		<div class="features-section">
			<div class="features-section-head text-center">
				<h3><span>'.$array[4]["Name"].'</span> ('.$array[4]["Author"].')</h3>
				</div>
			</div>
		</div>
<div class="content">
<div class="box1">

				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><a href = "books/60258290.a4.pdf"><img src="images/pic'.$array[4]["id"].'.jpg" alt=""/></a></div>
	                    </div>
	                    <h2>Просмотров: '.$array[4]["Views"].'</h2>
	                    </div>
	                    </div>
</div>
<div class="content">
		<div class="features-section">
			<div class="features-section-head text-center">
			<h3>'.$array[4]["Intro"].'</h3>
			<div class="products-section">
<div class="products-section-grids">
					<ul id="filters" class="clearfix">
						<li><span class="filter" data-filter="app"><label></label><input value = "Читаю" onclick="alert(`Добавлено в читаю`)" type="button"></span></li>
						<li><span class="filter" data-filter="card"><label></label><input value = "Буду читать" onclick="alert(`Добавлено в буду читать`)" type="button"></span></li>
						<li><span class="filter" data-filter="icon"><label></label><input value = "Прочитано" onclick="alert(`Добавлено в прочитано`)" type="button"></span></li>
						</ul>';	
?>	
<h3> Возможно вам также понравится:</h3>
<div class="container">
	<div class="box1">
<?php
for($i=0; $i<6;$i++){
	if($array[$i]["Category"]==$array[4]["Category"])
	{
	echo '
						
				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
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
}
?>
</div>
			</div>
			</div>
	</div>	
	<div class="clearfix"></div>
<?php
include 'footer.php';
		?>
</body>
</html>