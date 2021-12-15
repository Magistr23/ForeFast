<?php 
  $title = "Главная";
  $post_title = "Ознакомление"; 
  $urlpos = '?pos=main';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
 <?php include 'block/head.php';?>
<body>


  <style>
    .nav>li>a {
    	padding: 10px 13px;
    }
    .fas {
    	margin-top: 190%;
    }
  </style>
	<div class="container_fluid">
		<div class="row">
			<?php include 'block/nav.php'?>
        </div>
    </div>
    <div class="wrapper">

      <div class="container">
        <div class="block1">
        <div class="row">
         
             <div class="col-sm-12">
             	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="width: 100%;" src="https://sun9-5.userapi.com/impg/0rIaXYwfDl0fiK0ebPz6Tctq1TI9TAdaV_QSAw/GfSD6Loxqkk.jpg?size=1332x749&quality=96&sign=12e5e5bca1f0c957acee78d836600b60&type=album" alt="...">
      <div class="carousel-caption">
        <!-- Альфа -->
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; " src="https://sun9-25.userapi.com/impg/WOyjHXP871V8XBfj_xgl-t4R0ZTIrbtP7btrEw/swuPrQqVbzY.jpg?size=680x499&quality=96&sign=121353eaae217e9cad44e3e1b345f1d3&type=album" alt="...">
      <div class="carousel-caption">
      	<!-- Бета -->
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; " src="https://sun9-67.userapi.com/impg/nnifuUgB8NX3PALGOia4IiT0Ksae1JEW_iBi6w/FOmfZK9CuKI.jpg?size=480x360&quality=96&sign=1c3945bff607d27503cb878e258debed&type=album" alt="...">
      <div class="carousel-caption">
      	<!-- Дельта  -->
      </div>
    </div>
    <div class="item">
      <img src="https://sun9-28.userapi.com/impg/GhdqzS2_xmmpcSfCndEhtSpfKlBD0sr7mDioMg/7y_PpC1xuC8.jpg?size=300x168&quality=96&sign=785a0d4bf9f53332fc55e05de1a08a62&type=album" alt="...">
      <div class="carousel-caption">
        <!-- Arcade -->
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; " src="https://sun9-83.userapi.com/impg/F4eH3gmQ9k8JptsFzZsulJPv559m_fhVB8BHMQ/Z0vzmxcCgO0.jpg?size=274x149&quality=96&sign=06cec9a55d28fb5bebfc6ccd98f68715&type=album" alt="...">
      <div class="carousel-caption">
      	<!-- Creative  -->
      </div>
    </div>
    <div class="item">
      <img src="https://sun9-14.userapi.com/impg/TT7Qr7Df6biDTMciuiEoR6yWsfgkgesHKpbTlQ/DDDnMa9g034.jpg?size=360x190&quality=96&sign=633cb500278a0145c0b46ee4b52de806&type=album" alt="...">
      <div class="carousel-caption">
        <!-- BW -->
      </div>
    </div>
    <div class="item">
      <img src="https://sun9-82.userapi.com/impg/gGI7wob7MjwSuDLehv_90pMgHvE7toAC7YbJtw/raLWdFyl2PM.jpg?size=300x168&quality=96&sign=69814a3aafc321f857e312928d400b14&type=album" alt="...">
      <div class="carousel-caption">
        <!-- SB -->
      </div>
    </div>
    <div class="item">
      <img src="https://sun9-33.userapi.com/impg/AUOFYG6TRz_K646MgWRcPRKHtiDeF84msf-uPQ/M8Meu-jP0d4.jpg?size=626x465&quality=96&sign=ad4345c9cdff80657f3257630970cef5&type=album" alt="...">
      <div class="carousel-caption">
        <!-- EW -->
      </div>
    </div>
    <div class="item">
      <img src="https://sun9-25.userapi.com/impg/INuxWS8dQtKNJoyimxY_YsRUOAhOyw1VMoE21Q/l6M0-zSE7_I.jpg?size=512x288&quality=96&sign=471d6ca0ef0e00d4060c83f5129d7f4a&type=album" alt="...">
      <div class="carousel-caption">
        <!-- HG -->
      </div>
    </div>
    <div class="item">
      <img src="https://sun9-45.userapi.com/impg/1w8pdnIRcHdcX6BQjS-WjYj8Xmi17CHt8bcrBA/55Zm85dxJ78.jpg?size=300x168&quality=96&sign=5a888534047cc00a76855d2aefb3ddae&type=album" alt="...">
      <div class="carousel-caption">
        <!-- Anni -->
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="fas fa-chevron-left"></span>
    <span class="sr-only"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="fas fa-chevron-right"></span>
    <span class="sr-only"></span>
  </a>
</div>
	<h1 style="text-align: center;"><font face="algerian">CLAN FOREFAST</font></h1>
	<p>
	Банда ForeFast - это банда профессиональных и сильных игроков, число которых растёт с каждым разом!
В Банде иногда проходят ивенты, конкурсы, турниры от клана, викторины с хорошими призами, которые ты можешь выиграть!
Так же мы иногда участвуем в различных турнирах по СНГ в таких режимах, как BedWars, SkyWars, Annihilation и так далее.</p>
            <p><ul style = "list-style-type:circle">У нас есть: 
              <li> Свой сервер MineCraft, IP - ForeCraft.mclan.ru (Временно закрыт) </li>
              <li> Свой Дискорд Сервер </li>
              <li> Своя база на сервере mc.megacraft.org, которую признали лучшей. </li>
              <li> Своя огромная Тех.Поддержка! </li>
              <li> Своя беседа в ВК </li>
              <li> Своя группа в ВК <a href='https://vk.com/forefast'>https://vk.com/forefast</a></li>
              <li> Свой Ютюб канал</li>
              <li> Личный Текстурпак (1.12.2, 1.8)</li>
              <li> Личный Дискорд Бот, который делал Программист БД.</li>
              <li> За активность в банде, помощь руководству - мы иногда выдаём, тому донат.</li>
            </ul> </p>
            <hr>
           <p> Сервера где мы часто играем - mc.hypixel.net, mc.megacraft.org, masedworld.net, twerion.net, acentramc.com, play.teslacraft.org, migosmc.ru </p>
Глава БД/по всем вопросам к - <a href='https://vk.com/mr.skyder'>https://vk.com/mr.skyder</a>
            <div>
            <br>
<!--    <a href="normal/testin.php">123</a>-->
    <div class="margin-8 hidden-xs"></div>
      <div class="clear"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php include ("block/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
  </body>
</html>
