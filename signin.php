
<!DOCTYPE html>
<html>
<head>
	<?php
$dbc = mysqli_connect('localhost', 'root', '', 'readontest');
if(isset($_POST['submitreg'])){
	$username=mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password=mysqli_real_escape_string($dbc, trim($_POST['password']));
	if(!empty($username)&&!empty($password))
	{
		$query="SELECT * FROM 'signup' WHERE username='$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data)==0){
			$query = "INSERT INTO 'signup'(username, password) VALUES ('$username', $password')";
mysqli_query($dbc, $query);
echo 'Все готово, можете авторизоваться';
mysqli_close($dbc);
exit();
		}
		else { 
			echo 'Логин уже существует';
	}
	}
}
?>
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'readontest');
if(!isset($_COOKIE['user_id'])){
	if(isset($_POST['submitlog'])){
	$user_username=mysqli_real_escape_string($dbc, trim($_POST['username']));
	$user_password=mysqli_real_escape_string($dbc, trim($_POST['password']));
	if(!empty($user_username)&&!empty($user_password)){
		$query="SELECT 'user_id', 'username' FROM 'signup' WHERE username='$user_username' AND password = SHA('$user_password')";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data)==1){
			setcookie('user_id', $row['user_id'], time()+(60*60*24*30));
			setcookie('username', $row['user_id'], time()+(60*60*24*30));
			$home_url='http//personalcab.php';
			header('Location: '. $home_url);
		}
		else {
			echo 'Извините, вы должны ввести корректные логин и пароль';
		}
	}
	}
}

?>
<title>Авторизация</title>
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
	             <li class="active"><a href="personalcab.php">Личный кабинет</a></li>
	          <div class="clearfix"></div>
	        </ul>
	  </div>
	 </div>
	    </div>
	  </div>

	</div>
		<!-- start login -->
	<div class="container">
		<div class="dreamcrub">
			   	 <ul class="breadcrumbs">

                    <li class="home">
                       <a href="index.php" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li>
                      Авторизация
                    </li>&nbsp;

                </ul>
                <ul class="previous">
                	<li><a href="index.php">Назад на главную</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>
			   м
		<section id="main">
		<div class="login-content">
		<div class="container">
			<div class="login-signup-form"> 
				<div class="col-md-5 login text-center">
					<h4>Авторизация</h4>
					<div class="how_to">
						<a href="#"><div class="reg_fb"><img src="images/facebook.png" alt=""><i>Facebook</i><div class="clearfix"></div></div></a>
						<a href="#"><div class="reg_gp"><img src="images/gp.png" alt=""><i>GOOGLE</i><div class="clearfix"></div></div></a>
						<p><img src="images/locked.png" alt="" />Будьте внимательны, мы не сохраним ваш пароль</p>
					</div>
					<h5>Или</h5>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Имя:
						<span class="require">*</span>
						</label>
						<input type="text" value="" name="username">
					</div>
					<div class="clearfix"></div>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Пароль:
						<span class="require">*</span>
						</label>
						<input type="password" value="" name="password">
					</div>
					<div class="clearfix"></div>
					<div class="sky-form span_99">
					<label class="checkbox"><input type="checkbox" name="checkbox" >Запомнить меня    </label>
				</div>
				<div class="botton1">
					<input type="submit" value="Авторизация" name="submit" class="botttton">
				</div>
				<div class="forgetit">
					<a href="">Забыли свой пароль?</a>
					<input type="text" class="text" value="Введите E-mail чтобы продолжить" onfocus="this.value = '';" onblur="if (this.value == 'Введите E-mail чтобы продолжить') {this.value = 'Введите E-mail чтобы продолжить';}">
					<input type="submit" value="Дальше" class="botton">
				</div>
				</div>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="col-md-5 sign-up text-center">
					<h4>Регистрация</h4>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Имя:
						<span class="require">*</span>
						</label>
						<input type="text" value="">
					</div>				
					<div class="clearfix"></div>
				    <div class="cus_info_wrap">
						<label class="labelTop">
						Пароль:
						<span class="require">*</span>
						</label>
						<input type="password" value="">
					</div>
					<div class="clearfix"></div>
					<div class="botton1">
					<input type="submit" value="Регистрация" class="botttton">
				</div>
				</div>
				</form>
				<div class="col-md-2 benefits">
					<h4>Преимущества регистрации</h4>
					<p>Личный кабинет: читайте приобретенные произведения, отслеживайте уже прочитанные</p>
					<p>Своя учетная запись: возможность оставлять комментарии под произведениями, ставить свою оценку</p>
					<p>Быстрые покупки: не нужно указывать свой контакт и детали доставки при покупке</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
		</div>
		</section>





		<?php
	include 'footer.php';
		?>

</body>
</html>
