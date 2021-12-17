<?php 
  $title = "Овнеры";
  $post_title = "OWNER"; 
  $urlpos = '?pos=owner';
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
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Денис Гингерский</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">Владелец</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-37.userapi.com/impg/Z91qnSorQy9N-lY4xpVaMRI5R7qIFrP7tsRvmg/x2Dq5UqWwjk.jpg?size=1080x1080&quality=96&sign=1d0e5f52490adcef1452fd0d2a25de63&type=album"></p><span class="ellieaa2">_gingerbred_</span></span><br>
                              <p>Занимается управлением всем Кланом ForeFast</p>
                              <!--<blockquote><span style="font-family: cursive;">123</span></blockquote> коммент-->
                            <a href="https://vk.com/mr.skyder" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        </div>
          <div class="col-sm-9">
          	
          <div class="img"><img class="img-responsive img-thumbnail" src="https://sun9-17.userapi.com/impg/9wyQ-cJeYtRykwRS7KU6jYAkfjkPMiOXb8YXbA/eKqiGHXmmpQ.jpg?size=1920x840&quality=96&sign=6280945a66d3c1ba8aeec978c35341dc&type=album"></div>
                  <h1>Чем занимется Владелец клана?</h1>
                  <hr>
                  <div class="margin-8"></div>
                  <div class="alert alert-warning" role="alert">
           <p>Владелец - человек который создал клан, а также его развивает. Составляет план и распределяет состав по выполнению.</p></div>
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