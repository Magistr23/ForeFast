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
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">Асхаб Макузаев</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">Moder</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://sun9-85.userapi.com/impg/UIoZwuvl8XTTKAWlNOZe5uf7FD_g30lQvs8_4g/h745LHLfZHE.jpg?size=750x741&quality=96&sign=f12698093a3b1d1899312bab62a3012f&type=album"></p><span class="ellieaa2">makuzaev_1</span></span><br>
          
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
            <h1>Что должен знать Модер?</h1>
            <div class="alert alert-warning" role="alert"><p> Если вы были повышены до должности Модератора — значит вы хорошо себя проявили в роли Хелпера.</p>

<p>Обязанности остаются те же, но на этот раз вы должны будете присматривать за Хелперами, делиться с ними опытом и помогать им.</p></div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Так же выдадут новую команду</button>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <ul style = "list-style-type:circle">
<li style="margin-top: 10px;">/socialspy - слежка за личными сообщениями. </li>
</ul>
    </div>
  </div>
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