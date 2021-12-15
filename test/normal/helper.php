<?php 
  $title = "Хелперы";
  $post_title = "HELPER"; 
  $urlpos = '?pos=helper';
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
   <div class="layer">
 <?php
     $mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
      function printHelper($result_set) {
      $i = 0;
     	 while (($row = $result_set->fetch_assoc()) !=false) {
    echo '<div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center ellieaa">'.$row['vk_name'].'</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">HELPER</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="'.$row['img_link'].'"></p><span class="ellieaa2">'.$row['nickname'].'</span></span><br>';
           if (!empty($row['comment'])) {
                              echo '<blockquote><span style="font-family: cursive;">'.$row['comment'].'</span></blockquote>';
             }
                            echo '<a href="'.$row['vk_link'].'" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption>
                            </figure>
                          </div>
                        </div>';
        $i++;
		  }
        if ($i <= 0) {
           echo '<div class="panel panel-info">
                          <div class="panel-heading"><div class="sidebar-header text-center">Вакансия</div></div>
                          <div class="panel-body">
                           <figure style="display: block; text-align: center;">
                            <figcaption><span class="ellieaaHelp">HELPER</span><br><span style="font-family: cursive;">
                              <p><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" class="hidden-sm" src="https://www.mmom.ru/upload/iblock/5b3/5b3adb77ec42346041b4b04de57c3ac4.jpg"></p></span><br>
                            </figcaption>
                            </figure>
                          </div>
                        </div>';
        }
	}   
      
      $result_set =  $mysqli->query ("SELECT* FROM `members` WHERE `pos1` LIKE 'Helper'");
  	printHelper($result_set);
 	$mysqli->close ();
    ?>
			    </div>
              </div>
          	<div class="col-sm-9">

          		
			 <div class="img"><img class="img-responsive img-thumbnail" src="https://sun9-41.userapi.com/impg/Wu81dm1URH3ia_QJP56-_lO_ua_7HE8gxadw3w/LDB5R8X0OI0.jpg?size=1920x1080&quality=96&sign=e073d1f9e59a8c69fc013b46f5004985&type=album"></div>
            <hr>
          <h1>Что должен знать Хелпер?</h1>
          <p><div class="alert alert-warning" role="alert">Когда вас поставят на должность Хелпер, Вам выдадут не только префикс и таб префикс, но и команды, которые вы должны использовать в работе. <!-- <p>Посмотреть кураторов можно <a href="https://helperstaff.ru/#curator">тут</a></p> -->
            <p>Вступая на должность, вы соглашаетесь, что соответствуете следующим пунктам: </div>
            <p><ul style = "list-style-type:circle"><div class="alert alert-success" role="alert">
  <li>1) Полностью лояльны к администрации в любых решениях </li>
  <li>2) Будете исполнять ряд обязанностей, которые вам раскроют позже. Какими бы они ни были ;) </li>
</ul>
<ul style="list-style-type: none;"><div class="alert alert-success" role="alert">
  <li>1) Вы должны как минимум 2-3 раза в месяц проводить веселые ивенты и конкурсы,т.е. развлекать игроков</li>
  <li>2) Проверять репорты (команда /reports), которые будут вам приходить, и знать все правила /rules по пунктам! </li>
  <li>3) Необходимо 1-2 раза в час предлагать игрокам как через /bc | /abc | /msg и т.д. в свободной, ненавязчивой форме купить/доплатить донат на сайте megacraft.so . </li>
  <li>4) Соблюдать лояльность к игрокам и пресекать любые конфликты, сводя все к миру. У нас мирный сервер! </li>
  <li>5) Запрещены провокации в любом виде </li>
  <li>6) Осправить любые действия администрации ведет к исключению и наложению санкций </li>
  <li>7) Самовольный выход просто так (без особых причин) ведет к наложению санкций </li>
  <li>8) Вы должны помогать игрокам в чате и знать каждый режим на зубок! Если хелпер в сети и не помогает, это может привести к снятию должности или беседе с вами </li>
  <li>9) Обязательно голосуем за сервер каждый день везде <a href="http://megacraft.so/?go=vote">Хочу голосовать!!</a></li></ul></p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Права!!</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <ul style = "list-style-type:circle">
<li>/reports</li>
<li>/ans</li>
<li>/con < server > (Тп на сервер)</li> 
<li>/whereis < Ник > (Посмотреть на каком сервере игрок)</li> 
<li>/sc сообщение (Стафф Чат)</li>
<li>/sctoggle (Авто СтаффЧат)</li>
</ul>
    </div>
  </div>
</div>

<p>Вы в Администрации, информирование обо всех новых планах раньше других. </p>
=== 
<p>При хорошем активе возможны повышения!</p>
				
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