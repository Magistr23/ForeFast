<?php 
  $title = "Админы";
  $post_title = "ADMIN"; 
  $urlpos = '?pos=admin';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:site_name" content="STAFF Ознакомление">
	<meta property="og:url" content="https://helperstaff.ru">
	<meta property="og:description" content="Сайт для ознакомления с работниками STAFFa и краткое ознакомление каджой должности">
	<meta property="og:image" content="https://i.imgur.com/ZXRPmSn.jpg">
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
          <div class="col-lg-12">
            <div class="img"><img class="img-responsive img-thumbnail" src="https://i.imgur.com/J1j4xyn.png"></div>
                  <h1>Админы</h1>
                  <hr>
                  <div class="alert alert-warning" role="alert"> Если Вы добились должности Admin, значит вы отлично поработали на <a href="https://vk.com/themegacraft">  MegaCraft'е</a>
            <p>С должностью  Admin, Вы должны следить абсолютно за всем, что есть на проекте, так как эта должность очень важна. На сервере, к ней прислушивается весь STAFF, а за ним игроки.</p>
            <p>Так же вы должны помнить про правила сервера, которы были написаны на странице "<a href="http://helperstaff.ru">Главная</a>"</p><p>Посмотреть кураторов можно <a href="https://helperstaff.ru#curator">тут</a></p></div> <h1><p>Так же на странице "<a href="?pos=memorial">Ушедшие Админы</a>" можно ознакомиться с Админами, которые раньше присматривали за проектами (Summer, Mega, Sweet)</h1>
            
            
<div class="row">
  <div class="col-md-2">            
  <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Обязанности Админа!
</a>
<div class="collapse" id="collapseExample">
  <div class="well" >
  1 - Распределение хелперов, модеров<br>
  2 - Слежка за работой Ст. Модеров<br>
  3 - Отчеты о всем стаффе ниже Администрации в письменном виде раз в месяц или два, характеристика каждого работника<br>
  4 - Отслеживание консолей<br>
  5 - Отслеживание логов<br>
  6 - Также следить за группой (проверка ответов на жалобы и прочее)<br>

  </div>
</div></div>
  <div class="col-md-8"><div id="accordeon">
              <?php
  	$mysqli = new mysqli ('localhost', 'cg47894_mainbd', '12345', 'cg47894_mainbd');
	$mysqli->query ("SET NAMES 'utf8'");
      
    function printAdmins($result_set)
{
  while (($row = $result_set->fetch_assoc()) !=false) {
    //print_r($row);
   echo '<div class="acc-head text-center">
                '.$row['nickname'].': '.$row['vk_name'].'
              </div>
              <div class="acc-body">
                <table class="hidden-xs" cellspacing="5" cellpadding="10" width="100%">
                  <tr><th>'.$row['vk_name'].'</th><th><a href="'.$row['vk_link'].'"><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;"  src="'.$row['img_link'].'"></a></th><th>'.$row['comment'].'</th></tr>
                </table>
                <figure class="visible-xs" style="padding-bottom: 120px; display: block; text-align: center;">
                    <div class="col-md-4" style="padding-top: 6%;">'.$row['vk_name'].'</div><div class="col-md-4"><p><a href="'.$row['vk_link'].'"><img style="width: 150px; border-radius: 10px; border: 3px solid #808080;" src="'.$row['img_link'].'"></a></p></div><div class="col-md-4"></div>
                    <figcaption><br>'.$row['comment'].'</figcaption>
                  </figure>
                </div>';
 }
}
      $result_set = $mysqli->query("SELECT * FROM  `members` WHERE `pos1` LIKE 'Admin'");
  printAdmins($result_set);
    $mysqli->close ();
    ?>
            
        </div>
            </div>
  <div class="col-md-2"><p><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Так же выдадут новые команды</button></p>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <ul style = "list-style-type:circle">
        <p></p>
            <li> /server</li>
            <li> /find</li>
            <li> /glist</li>
            <li> /msgtoggle</li>
            <li> /alert</li>

</ul>
    </div>
  </div>
</div></div>
</div>
<!-- <div id="accordeon">
              <div class="acc-head text-center">
                Ян Васильев
              </div>
              <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
              </div>
            <div class="acc-head text-center">
                Павел Бажов
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Миша Степанов
            </div>
            <div class="acc-body">
            <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Иван Сорокин
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Даниил Кружалкин
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Tina Rutherford
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Данил Зайцев
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Bogdan Garbovskiy
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Дмитрий Волков
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Neo Black
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Товарищ Полковник
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
            <div class="acc-head text-center">
                Александров Починковик
            </div>
            <div class="acc-body">
                <aside style="float: left;">Тест <br>тестового <br>человека</aside><article class="text-center"><span><img style="width: 30%;" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></span><span style="float: right;">ещё <br>один <br>тест</span></article>
            </div>
        </div>
            </div> -->
  <!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading1">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
          Ян Васильев
        </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id308881443"><img class="img-responsive img-thumbnail" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></a></div>
        <p>Ник: _RusBigBoss_ Создатель сервера</p>
            <p>Не стоит с ним шутить, ведь один взмах лапки может решить судьбу <a href="https://vk.com/themegacraft"> MegaCraft'а</a>, у него можно прикупить привилегии, не стесняемся, пишем и покупаем)</p>
            <a href="https://vk.com/id308881443" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading2">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
          Павел Бажов
        </a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id470814376"><img class="img-responsive img-thumbnail" src="img/navel.png"></a></div>
        <p>Ник: Pavel_Bazov</p>
        Самый добрый Админ. По вопросам призовых мест и по рекламе. Так же у него можно прикупить привилегии. Правая рука Яна.
        <a href="https://vk.com/id470814376" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading3">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
          Миша Степанов
        </a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id304825541"><img class="img-responsive img-thumbnail" src="https://pp.userapi.com/c847019/v847019145/1df0ba/t0AjHNmuyS0.jpg"></a></div>
        <p>Ник: _Fibbs_ </p>
            <p>Ст.Админ По вопросам доната и игры. Если у вас есть деньги, то Миша вас найдёт :)</p>
            <a href="https://vk.com/id304825541" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading4">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
          Иван Сорокин
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id95515793"><img class="img-responsive img-thumbnail visible-xs" src="img/mag3.png"><img class="img-responsive img-thumbnail hidden-xs" src="img/mag1.png"></a></div>
        <p>Ник: mr_Magistr </p>
            <p class="visible-xs">Кому не нравится сайт, я никого не держу на нём, но прошу вас покинуть его</p>
          <p class="hidden-xs">По вопросам игры обращайтесь, всем отвечаю. Пока никого не кусал за вопросы }:)</p>
        <a href="https://vk.com/id95515793" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading6">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
          Даниил Кружалкин
        </a>
      </h4>
    </div>
        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
        <div class="admins"><a href="http://vk.com/id96982512"><img class="img-responsive img-thumbnail" src="img/KKayKiller2.jpg"></a></div>
        <p>Ник: KKayKiller </p>
            <p>Приветствую. Вам бан.</p>
        <a href="http://vk.com/id96982512" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
    </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading7">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
          Tina Rutherford
        </a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id436683079"><img class="img-responsive img-thumbnail" src="img/TinaRutherford.jpg"></a></div>
        <p>Ник: teanok </p>
            <p>По вопросам доната. Невысокие цены и всегда хорошие подарочки)</p>
        <a href="https://vk.com/teanok" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading9">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
          Данил Зайцев
        </a>
      </h4>
    </div>
    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id253260983"><img class="img-responsive img-thumbnail" src="https://pp.userapi.com/c852136/v852136235/947f3/tibvFhE0eUw.jpg"></a></div>
        <p>Ник: Head_Server </p>
            <p>По вопросам игры. Весёлый и забавный Админ :D</p>
        <a href="https://vk.com/id253260983" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading12">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
          Bogdan Garbovskiy
        </a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id483534712"><img class="img-responsive img-thumbnail" src="img/Rav_.jpg"></a></div>
        <p>Ник: Rav_4 </p>
         <a href="https://vk.com/id483534712" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading13">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
          Дмитрий Волков
        </a>
      </h4>
    </div>
    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id497886639"><img class="img-responsive img-thumbnail" src="https://pp.userapi.com/c844320/v844320215/171bb4/IT4oeJyvd4A.jpg"></a></div>
        <p>Ник: Nikeron</p>
        <p>СДонат по скидкам + много крутых подарков. Писать мне в ВК!</p>
        <a href="https://vk.com/id497886639" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading14">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
          Neo Black
        </a>
      </h4>
    </div>
    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/neoblack"><img class="img-responsive img-thumbnail" src="img/Neo.png"></a></div>
        <p>Ник: Neo Black </p>
         <a href="https://vk.com/id441604281" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading15">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
          Товарищ Полковник
        </a>
      </h4>
    </div>
    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id522580642"><img class="img-responsive img-thumbnail" src="img/Imm.jpg"></a></div>
        <p>Ник: Imm0rtal</p>
        <a href="https://vk.com/id522580642" class="button9 btn btn-default" aria-label="Left Align">
          ВК
        </a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading16">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
          Александров Починковик
        </a>
      </h4>
    </div>
        <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
      <div class="panel-body">
        <div class="admins"><a href="https://vk.com/id414115551"><img class="img-responsive img-thumbnail" src="img/pet.png"></a></div>
        <p>Ник: peterpochinok </p>
        <a href="https://vk.com/id414115551" class="button9 btn btn-default" aria-label="Left Align">
                      ВК
                    </a>
      </div>
    </div>
    </div> -->
    
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