<?php 
  $title = "Админы";
  $post_title = "ADMINS"; 
  $urlpos = '?pos=Admin';
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

            
		    <div class="layer" >
   <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Иван Сорокин</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp1">Админ</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-48.userapi.com/impg/Xc7nMh4BHiqsUkDnOu8WKi6lImnQUNVXuhGfyw/cwjLYbA5-Tw.jpg?size=1192x670&quality=96&sign=85fb09c0512b454a13a48a050bd711c2&type=album"></p><span class="ellieaa2">mr_magistr</span></span><br>
        						<p>Ответственный за Техническую часть клана</p>
                              <!--<blockquote><span style="font-family: cursive;">123</span></blockquote> коммент-->
             
                            <a href="https://vk.com/mr_magister" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Павел Пак</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp1">Админ</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-48.userapi.com/impg/nhp5yn_B3cVfwgSGaZYbUugsAkz1Ctbyt-wsIA/Pj43vMnoudQ.jpg?size=770x492&quality=95&sign=b65c9cd94ec60677a8226fc8e43bae90&type=album"></p><span class="ellieaa2">p_pak</span></span><br>
        						<p>Пиар - менеджер</p>
                              <!--<blockquote><span style="font-family: cursive;">123</span></blockquote>-->
             
                            <a href="https://vk.com/id239582464" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        
<div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Владимир Рычалкин</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp1">Админ</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-23.userapi.com/impg/SeJ7G11UwOrAc9YsyMwAqhcahkM5bx3SWeAQLg/vM_fR0ZDXOE.jpg?size=1649x1649&quality=95&sign=1c96faf47c1558bea3370ec90a073c9d&type=album"></p><span class="ellieaa2">Wowan</span></span><br>
								<p>Решает финансовые проблемы, и также следит за порядком</p>
                              <!--<blockquote><span style="font-family: cursive;">123</span></blockquote-->
             
                            <a href="https://vk.com/wow_an20_official" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        
                        </div>
           </div>  
      
          <div class="col-sm-9">
          	
          <div class="img"><img class="img-responsive img-thumbnail" src="https://sun9-17.userapi.com/impg/9wyQ-cJeYtRykwRS7KU6jYAkfjkPMiOXb8YXbA/eKqiGHXmmpQ.jpg?size=1920x840&quality=96&sign=6280945a66d3c1ba8aeec978c35341dc&type=album"></div>
                  <h1>Чем занимается Админ?</h1>
                  <hr>
                  <div class="margin-8"></div>
                  <div class="alert alert-warning" role="alert"> Это начало вашей новой жизни в ForeFast.</p>
           Админ - это высокая и важная роль. Люди которые занимают данный пост приносят большой вклад в развитие клана. Каждый человек выполняет свое дело в определённой сфере, помогая Основателю Клана.</div>
<!--<p><a href="https://helperstaff.ru#curator">123</a></p>-->
</div>
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