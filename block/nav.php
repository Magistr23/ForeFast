<nav role="navigation" class="navbar navbar-inverse"  style="background-color: #808080; border: 1px solid #808080;">
			
				<div class="container">
					<div class="navbar-header header">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="head"><h2 style="color: hsl(50,200%,50%);" class="text-center"><font face="algerian">CLAN</font></h2></div>
									<p class="text-center" style="font-family: serif;"><?=$post_title?></p>
									<hr>
								</div>
                    </div>
                  </div>
                  <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-center">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                  <div id="navbarCollapse" class="collapse navbar-collapse navbar-center">
                    				<nav>
                    <ul class="nav nav-pills">
                        <li class="<?php if ($first_part=="main")  {echo "active"; } else  {echo "";} ?>"> <a href="https://forefast.ru/?pos=main">Главная</a> </li>
                        <li class="<?php if ($first_part=="Builders")  {echo "active"; } else  {echo "";} ?>"> <a href="https://forefast.ru/?pos=Builders">Билдеры</a> </li>
                        <li class="<?php if ($first_part=="moder")  {echo "active"; } else  {echo "";} ?>"> <a href="https://forefast.ru/?pos=moder">Модеры</a> </li>
                        <li class="<?php if ($first_part=="Curator")  {echo "active"; } else  {echo "";} ?>"> <a href="https://forefast.ru/?pos=Curator">Кураторы</a> </li>
                        <li class="<?php if ($first_part=="Admin")  {echo "active"; } else  {echo "";} ?>"> <a href="https://forefast.ru/?pos=Admin">Админы</a> </li>
                        <li class="<?php if ($first_part=="owner")  {echo "active"; } else  {echo "";} ?>"> <a href="https://forefast.ru/?pos=owner">Владельцы</a> </li>
                </nav>
                  </div>
              </div>
            <!-- </div> -->
        </nav>