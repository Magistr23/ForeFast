<?php 
  $title = "Кураторы";
  $post_title = "CURATORS"; 
  $urlpos = '?pos=Curator';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
<?php include 'block/head.php';?>
<body>

  <div class="container_fluid">
    <div class="row">
      <?php include 'block/nav.php'?>
        </div>
    </div>
    <div class="wrapper">

      <div class="container">
        <div class="block1">
        <div class="row">
          <div class="col-sm-3">

            
		    <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Кирилл Балховитин</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">Curator</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-24.userapi.com/impg/rSJdQ_VWGMqLCdgc3b-id9xmh7C-uQ5h29Jlwg/IrmoUEWK0Ng.jpg?size=640x640&quality=95&sign=cbc6f9e6aeae510004ccbd150ec82d1c&type=album"></p><span class="ellieaa2">Kirill_2000</span></span><br>
        						<p>Ведёт собеседование с новичками</p>
                              <!--<blockquote><span style="font-family: cursive;">123</span></blockquote> коммент-->
             
                            <a href="https://vk.com/kerya_228" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
           </div>  
      
          <div class="col-sm-9">
          	
          <div class="img"><img class="img-responsive img-thumbnail" src="https://sun9-17.userapi.com/impg/9wyQ-cJeYtRykwRS7KU6jYAkfjkPMiOXb8YXbA/eKqiGHXmmpQ.jpg?size=1920x840&quality=96&sign=6280945a66d3c1ba8aeec978c35341dc&type=album"></div>
                  <h1>Что должен знать Ст.Модер?</h1>
                  <hr>
                  <div class="margin-8"></div>
                  <div class="alert alert-warning" role="alert"> Это начало вашей новой жизни в Старшем составе Стафф'а.</p>
           <p>Вы получаете несколько преимуществ, прав и обязанностей, помогающих в работе вам и другим. К примеру - право распределять младший состав по серверам, то, чего хотелось бы многим. Не так-ли?)</p>
            <p>Так же вы должны помнить и про правила сервера, которые были написаны на странице <a href="http://helperstaff.ru">"Главная"</a></div>
            <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Обязанности Ст.Модератора:
</a>

<div class="collapse" id="collapseExample">
  <div class="well">
    <ul style = "list-style-type:circle">
              <li> Распределение Младшего Staff’a.</li>
              <li> Слежка за логами, по возможности - консолей. </li>
              <li> Проверка /reports и /ans.</li>
              <li> Работать за хелперов, если их нет.</li>
              <li> Отвечать игрокам в группе ВКонтакте.</li></ul>
  </div>
</div>
<!--<p><a href="https://helperstaff.ru#curator">123</a></p>-->
<div style="margin-bottom: 20%;"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <?php include ("block/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
  </body>
</html>