<?php
	if (empty($_GET['pos'])) {header ("Location: ?pos=main");}
	if ($_GET['pos'] == 'contact') {include "contact.php";}
	if ($_GET['pos'] == 'main') {include "normal/main.php";}
	if ($_GET['pos'] == 'maintest') {include "test/normal/main.php";}
    if ($_GET['pos'] == 'Builders') {include "normal/Builders.php";}
    if ($_GET['pos'] == 'moder') {include "normal/moder.php";}
    if ($_GET['pos'] == 'Curator') {include "normal/curators.php";}
	if ($_GET['pos'] == 'Admin') {include "normal/Admin.php";}
	if ($_GET['pos'] == 'owner') {include "normal/owner.php";}

	if ($_GET['pos'] == '1' && empty($_GET['dir'])) {header ("Location: ?pos=main");}
	if ($_GET['pos'] == '1' && $_GET['dir'] == 'contact') {include "helps/contact.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'mained') {include "helps/main.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'helpers') {include "helps/helper.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'moders') {include "helps/moder.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'admins') {include "helps/admins.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'owners') {include "helps/owner.php";}
	if ($_GET['pos'] == '1'  && $_GET['dir'] == 'correct') {include "helps/cor.php";}
	if ($_GET['pos'] == '2' && $_GET['dir'] = 'cor') {include "helps/cor_sel1.php";}
	if ($_GET['pos'] == 'd' && $_GET['dir'] = 'cor') {include "helps/cor_seld.php";}
	if ($_GET['pos'] == 'exclusive' && $_GET['dir'] = 'corex') {include "helps/cor_selex.php";}
	if ($_GET['pos'] == 'createacc' && $_GET['dir'] = 'cacc') {include "helps/cor_cacc.php";}
?>
