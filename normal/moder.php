<?php 
  $title = "Модеры";
  $post_title = "MODER"; 
  $urlpos = '?pos=moder';
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
   					<div class="layer" >
   <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Асхаб Макузаев</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">Moder</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-57.userapi.com/impg/kcubIFraqTEbACSb3K6T5SjQ8t78BaPAyOGRVA/gwhf10gNjEk.jpg?size=619x512&quality=95&sign=efc78c4ff91874d0beb510d58e57183a&type=album"></p><span class="ellieaa2">makuzaev_1</span></span><br>
          
                              <!--<blockquote><span style="font-family: cursive;">123</span></blockquote> коммент-->
             
                            <a href="https://vk.com/makuzaev209" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Александр Кочергин</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">Moder</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-72.userapi.com/impg/mY29SkCJ4aHJqWs2Vz895d_7HrsS4n3trdi6cg/TSxLc6NfpCg.jpg?size=487x531&quality=96&sign=86628ec70baba252cc4c3b3186fec45e&type=album"></p><span class="ellieaa2">pro12</span></span><br>
          
                              <!--<blockquote><span style="font-family: cursive;">123</span></blockquote>-->
             
                            <a href="https://vk.com/problempro12" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        <div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Николай Шрамко</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">Moder</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-43.userapi.com/impg/mDYZOvuYii1saqeN8Atn9v3puD3yJPAqb9ppYw/d4IcMiW-Dtk.jpg?size=600x600&quality=95&sign=c4f7a3e5a8e65c1d49a1dd2cfe9b1f4c&type=album"></p><span class="ellieaa2">nicolas_shramko</span></span><br>
        						<p>Технический Модератор</p>
                              <!--<blockquote><span style="font-family: cursive;">123</span></blockquote>-->
             
                            <a href="https://vk.com/nicolas_shramko" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>
                        </div>

          	</div>
          	<div class="col-sm-9">

          		
			 <div class="img">
               <img class="img-responsive img-thumbnail" src="https://sun9-28.userapi.com/impg/LzVBsLzpUYWvOCIRG7nnteFh5weXGq9xibvTdA/bkSvM3noghU.jpg?size=1920x1080&quality=96&sign=f80b42a269225b1d798379f80c01aeac&type=album">
             </div>
              <hr>
            <h1>Что должен знать Модератор?</h1>
            <div class="alert alert-warning" role="alert"><ol>Обязанности Модератора не легки. <br>А именно в его задачах:
            	<li>Время от времени должен пиарить клан любыми способами.</li>
            	<li>Обязан знать и соблюдать правила.</li>
            	<li>Должен следить за игроками в беседе и дискорде, быть активным.</li>
            	<li>Должен быть адекватным, помогать новичкам.</li>
            	<li>Модератор должен быть активным в постах, и помогать с идеями для различных мероприятий.</li>
            	<li>Должен предоставлять доказательство на любое предупреждение, Кик или Мут Основателю БД.</li>
            </ol></div>
            </div>
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