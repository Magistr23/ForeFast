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
<style>
	body {
	background-image: url(img/fon.jpg); 
	background-attachment: fixed; 
	background-repeat: repeat-x;
 }
</style>
  <div class="container_fluid">
    <div class="row">
      <?php include 'block/nav.php'?>
        </div>
    </div>
    <div class="wrapper">

      <div class="container">
      	<div class="Block" style="background-color:white; padding: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.5);">
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
                  <h1>Что должен знать Куратор?</h1>
                  <hr>
                  <div class="margin-8"></div>
                  <div class="alert alert-warning" role="alert">Куратор - это не простая должность. Вы лицо клана. Так как вы ведёте собеседование с новичками, а также с теми, кто нарушает правила.
Вы должны уметь выслушивать человека, быть всегда адекватным и так далее...</div>
</div>
<!--<p><a href="https://helperstaff.ru#curator">123</a></p>-->
<div style="margin-bottom: 20%;"></div>
          </div>
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