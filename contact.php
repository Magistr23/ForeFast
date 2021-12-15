<?php 
  $title = "Контакты";
  $post_title = "CONTACT"; 
  $urlpos = '?pos=contact';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="en">
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
        			<img src="https://i.imgur.com/ZXRPmSn.jpg" style="width: 100%;">
        			<hr>
        			<div class="cite text-center"><h2 style="font-family: cursive;">Работники сайта.</h2></div>
        			<hr>
	        			<div class="col-sm-3">
	        				<figure style="padding-bottom: 30px; display: block; text-align: center;"><img style="width: 80%; border: 5px solid #808080; border-radius: 10px;" src="https://pp.userapi.com/c845323/v845323743/1513ca/UFUtoKZwayk.jpg"><figcaption>По вопросам игры обращайтесь, всем отвечаю. Пока никого не кусал за вопросы }:)<br><a href="https://vk.com/id95515793" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
	        			</div>
	        			
						</div>
						<br>
						<hr>
						<div class="cite text-center"><h2 style="font-family: cursive;">Спонсор сайта.</h2></div>
						<hr>
						<div class="col-sm-6">
							<figure style="padding-bottom: 30px; display: block; text-align: center;"><img  style="width: 60%; border: 5px solid #808080; border-radius: 10px;" src="https://sun9-10.userapi.com/impg/6knVK8gVcugjc5LWQ-0iEK8uZRtJf1dzees1pw/8kYYQtNzYnA.jpg?size=1760x1545&quality=96&sign=d174e8b89cf68c404ef683116458226e&type=album"><figcaption>Владимир Рычалкин <br><a href="https://vk.com/wow_an20" class="button9 btn btn-default" aria-label="Left Align">
                              ВК
                            </a></figcaption></figure>
						</div>
        		</div>
        	</div>
        </div>
    </div>
    <script>
function myWindowOpen() {
  var myWindow = window.open("https://helperstaff.ru/normal/testin.php", "Тесты", "width=1000,height=500");
}
</script>

<button onclick="myWindowOpen()">Открыть окно</button>
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