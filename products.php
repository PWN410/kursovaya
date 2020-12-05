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
<title>Каталог</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
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
         <span class="red">&nbsp;Книги&nbsp;</span>
     </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Назад на главную</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>
			   <div class="container">
	   <div class="ft-ball">
		<div class="cont span_2_of_3">
		  <div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            <label>Сортировать:</label>
		            <select>
		                            <option value="" id = "namea" >
		                    по названию(А->Я)               </option>
		                            <option value="" id = "namea">
		                    по названию(Я->А)                </option>
		                            <option value="">
		                    по цене: от дорогих               </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
               </div>
    		</div>
	          <div class="pager">
	           <div class="limiter visible-desktop">
	            <label>Показать</label>
	            <select>
	                            <option value="" selected="selected">
	                    6                </option>
	                            <option value="">
	                    12                </option>
	                            <option value="">
	                    24                </option>
										</select> На странице
	             </div>
	       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
				    <li><a href="#" class="previous">Страницы</a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
			  	</ul>
		   		<div class="clearfix"></div>
	    	</div>
     	    <div class="clearfix"></div>
<?php
echo '<div class="box1">
				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">'.$array[0]["Name"].'</h3>
					  	<p class="m_2">'.$array[0]["Category"].'</p>
						<a href="bookpage'.$array[0]["id"].'.php">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic'.$array[0]["id"].'.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Перейти на страницу</div>
			                  </div>
	                    </div>
                       <div class="price">$ 15</div>
					   </div>
					    </div></a>


						<div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>


						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Заказать </a>



								<ul class="sub-icon1 list">
									<li><h3>Заказать товар у нас</h3><a href=""></a></li>
									<li><p>Заказывая книгу в нашем магазине вы получете скидку 10% на следующую покупку</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>

			    	    <div class="clear"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">'.$array[1]["Name"].'</h3>
					  	<p class="m_2">'.$array[1]["Category"].'</p>
						<a href="bookpage'.$array[1]["id"].'.php">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic'.$array[1]["id"].'.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Перейти на страницу</div>
			                  </div>
	                    </div>
                       <div class="price">$ 15</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Заказать </a>
								<ul class="sub-icon1 list">
									<li><h3>Заказать товар у нас</h3><a href=""></a></li>
									<li><p>Заказывая книгу в нашем магазине вы получете скидку 10% на следующую покупку</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</div>
				   <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">'.$array[2]["Name"].'</h3>
					  	<p class="m_2">'.$array[2]["Category"].'</p>
						<a href="bookpage'.$array[2]["id"].'.php">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic'.$array[2]["id"].'.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Перейти на страницу</div>
			                  </div>
	                    </div>
                       <div class="price">$ 15</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Заказать </a>
								<ul class="sub-icon1 list">
									<li><h3>Заказать товар у нас</h3><a href=""></a></li>
									<li><p>Заказывая книгу в нашем магазине вы получете скидку 10% на следующую покупку</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				  <div class="clearfix"></div>
			  </div>
			  <div class="box1">
				 <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">'.$array[3]["Name"].'</h3>
					  	<p class="m_2">'.$array[3]["Category"].'</p>
						<a href="bookpage'.$array[3]["id"].'.php">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic'.$array[3]["id"].'.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Перейти на страницу</div>
			                  </div>
	                    </div>
                       <div class="price">$ 15</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Заказать </a>
								<ul class="sub-icon1 list">
									<li><h3>Заказать товар у нас</h3><a href=""></a></li>
									<li><p>Заказывая книгу в нашем магазине вы получете скидку 10% на следующую покупку</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">'.$array[4]["Name"].'</h3>
					  	<p class="m_2">'.$array[4]["Category"].'</p>
						<a href="bookpage'.$array[4]["id"].'.php">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic'.$array[4]["id"].'.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Перейти на страницу</div>
			                  </div>
	                    </div>
                       <div class="price">$ 15</div>
					   </div>
					    </div></a>
						<div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Заказать </a>
								<ul class="sub-icon1 list">
									<li><h3>Заказать товар у нас</h3><a href=""></a></li>
									<li><p>Заказывая книгу в нашем магазине вы получете скидку 10% на следующую покупку</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</div>
				    <div class="col_1_of_single1 span_1_of_single1">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
					  	<h3 class="m_1">'.$array[5]["Name"].'</h3>
					  	<p class="m_2">'.$array[5]["Category"].'</p>
						<a href="bookpage'.$array[5]["id"].'.php">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic'.$array[5]["id"].'.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Перейти на страницу</div>
			                  </div>
	                    </div>
                       <div class="price">$ 15</div>
					   </div>
					    </div></a>
					   <div class="rtng">
					    <form action="" class="sky-form">
						     <fieldset>
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)<span>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
						  </form>
						  </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Заказать </a>
								<ul class="sub-icon1 list">
									<li><h3>Заказать товар у нас</h3><a href=""></a></li>
									<li><p>Заказывая книгу в нашем магазине вы получете скидку 10% на следующую покупку</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clearfix"></div>
			    	</div>
				  <div class="clearfix"></div>
			  </div>
				  <div class="clearfix"></div>
			  </div>
			  </div>';
				   ?>
     	    <div class="rsidebar span_1_of_left">
				   <section  class="sky-form">
				   <div class="product_right">
     			<h3 class="m_2">Категории</h3>
     			    <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Антиутопия</option>
						<option value="1">Романы</option>
						<option value="2">Детективы</option>
						<option value="3">Coming Soon</option>
		           </select>
</div>
                   	  <h4>Популярное</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Антиутопия(3)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Романы (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Детективы (1)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Coming Soon (999)</label>
						    </div>

						 </div>
					 <h4>По рейтингу</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>5 звезд</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>4 звезды</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3 звезды</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2 звезды</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1 звезда</label>
						    </div>
						</div>
				</section>
		        <section  class="sky-form">
					<h4>Писатели</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Отечественные</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Русские</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Других стран</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Coming soon</label>
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Цена</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$5.00 и меньше</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$10.00 и меньше</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$20.00 и меньше</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$30.00 и меньше</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$40.00 и меньше</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Больше $40.00</label>
							</div>
						</div>
		       </section>

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
