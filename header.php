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
<div class="header" id="home">
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
  <?php
  if(isset($_SESSION['email']) && isset($_SESSION['password'])){
for($i=0;$i<count($array);$i++){  
            if($_SESSION['email']==$array[$i]['email'])
            {
              $_SESSION['first_name'] = $array[$i]['first_name'];
            }           
          }
        }
?>
  <div class="banner">
  <div class="signing text-right">
    <div class="container">
      <?php
      if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        echo '
      <div class="sign-in">       
        <a href="form_auth.php">Вход</a>
      </div>
      <div class="sign-up1">
        <a href="form_register.php">Регистрация</a>
      </div>
      <div class="clearfix"></div>';}
      else{
        echo '
      <div class="sign-in">       
        <a href="logout.php">Выход</a>
      </div>
      <div class="sign-up1">
        <a href="personalcab.php">'.$_SESSION['first_name'].'</a>
      </div>
      <div class="clearfix"></div>';
      }
      ?>
    </div>
  </div>
  <div class="banner-info text-center">
      <i class="shipping"></i>
      <h3>Онлайн Библиотека №1</h3>
      <p>Широкий ассортимент, тематические подборки на любой вкус.<br>
        Книжные новинки, лучшее за 2019 год.<br>
        Мировые бестселлеры, список лучших произведений.<br>
      Книги, новеллы, манга и многе другое...</p>
      <a href="products.php">Перейти в каталог</a>
  </div>
</div>
</div>
