<?
    if(empty($_GET) or empty($_GET['q'])){
	    $page='main';
    }else{
	    $page=$_GET['q'];
    }
	$file1=realpath('./pages/'.$page.'.html');
	$file2=realpath('./pages/'.$page.'.php');
	if(file_exists($file1)){
		$content=file_get_contents($file1);
	}elseif(file_exists($file2)){
		$content=null;
	}else{
		$content='';
	}
	if(empty($page)) $page='xcklsdhafhnsdlfuweurwhpie';
	$titles=[
		['name'=>'Главная','url'=>'index.php?q=main'],
		['name'=>'Кафедра','url'=>'#'],
		['name'=>'Федеральный центр','url'=>'#'],
		['name'=>'Наука','url'=>'#'],
		['name'=>'Обучение','url'=>'#'],
		['name'=>'Технологии','url'=>'#'],
		['name'=>'Библиотека','url'=>'#'],
		['name'=>'Контакты','url'=>'index.php?q=contacts'],
		['name'=>'Аннотация курса','url'=>'index.php?q=slushatel/pp_annotaciya'],
	];
	foreach($titles as $tl){
		if(preg_match('/'.preg_quote($page,'/').'/i',$tl['url'])){
			$title=$tl['name'];
			break;
		}
	}
	if(empty($title)) $title='Главная';
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?=$title?></title>
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="styles/reset-min.css" />
	<link rel="stylesheet" type="text/css" href="styles/main.css" />
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<link type="text/css" rel="stylesheet" href="styles/jquery.dropdown.css" />
    <script type="text/javascript" src="js/jquery.dropdown.min.js"></script>
	<? require_once('pages/head.php') ?>
</head>
<body>
	<div class="main">
		<header>
			<div class="hd_colum_left">
				<a href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
			</div>
			<div class="hd_colum_right">
				<p>ГБОУ ВПО МГМСУ им. А.И. Евдокимова Минздрава России </p>
				<span>КАФЕДРА ОБЩЕСТВЕННОГО ЗДОРОВЬЯ <br />И ЗДРАВООХРАНЕНИЯ </span>
			</div>
			<div class="header_contacts">
              <tel><b>+7 (495) 621 8943</b></tel><br>
  			  <email> orgzdrav@koziz.ru </email>
             </div>
		</header>
		<div class="content">
			<div class="block_bg1">
				<div class="main_menu">
					<nav>
						<ul>
							<li>
								<a href="#" data-jq-dropdown="#jq-dropdown1">студентам</a>
								<div id="jq-dropdown1" class="submenu jq-dropdown jq-dropdown-tip">
									<ul>
										<li>
											<a href="#" class="a_name">СПО:</a>
											<div class="mn_group">
												<a href="#">специальность 1</a>
												<a href="#"> специальность 2</a>
											</div>
										</li>
										<li>
											<a href="#" class="a_name">ВПО</a>
											<div class="mn_group">
												<a href="#"> факультет – курс 1, и т.д. </a>
											</div>
										</li>
										<li>
											<a href="#" class="a_name">Рекомендуемая литература</a>
											<div class="mn_group">
												
											</div>
										</li>
										<li>
											<a href="#" class="a_name">Студенческое научное общество</a>
											<div class="mn_group">
												
											</div>
										</li>
										<li>
											<a href="#" class="a_name">Отработки пропущенных занятий</a>
											<div class="mn_group">
												
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#" data-jq-dropdown="#jq-dropdown2">ординаторам</a>
								<div id="jq-dropdown2" class="submenu jq-dropdown jq-dropdown-tip">
									<ul>
										<li>
											<a href="#" class="a_name">Специальность «Организация здравоохранения и общественное здоровье» :</a>
											<div class="mn_group">
												<a href="#">прием в ординатуру</a>
												<a href="#">план подготовки</a>
												<a href="#">расписание занятий</a>
												<a href="#">специальность</a>
												<a href="#">аттестация</a>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#" data-jq-dropdown="#jq-dropdown3">аспирантам</a>
								<div id="jq-dropdown3" class="submenu jq-dropdown jq-dropdown-tip">
									<ul>
										<li>
											<a href="#" class="a_name">Специальность 14.02.03 Общественное здоровье и здравоохранение</a>
											<div class="mn_group">
												<a href="#">прием в аспирантуру</a>
												<a href="#">план подготовки</a>
												<a href="#">расписание занятий</a>
												<a href="#">аттестация</a>
											</div>
										</li>
										<li>
											<a href="#" class="a_name">Общество молодых ученых</a>
											<div class="mn_group">
	
											</div>
										</li>
										<li>
											<a href="#" class="a_name">Иные специальности </a>
											<div class="mn_group">
												<a href="#">расписание занятий</a>
												<a href="#">тематика</a>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="#" data-jq-dropdown="#jq-dropdown4">слушателям</a>
								<div id="jq-dropdown4" class="submenu jq-dropdown jq-dropdown-tip">
									<ul>
										<li>
											<a href="#" class="a_name">Профессиональная переподготовка <br /></a>
											<div class="mn_group">
												<a href="index.php?q=slushatel/pp_annotaciya">Аннотация курса</a>
												<a href="index.php?q=slushatel/pp_zachislenie">Зачисление на обучение</a>
												<a target="_blank" href="pdf/9.pdf">Учебный план</a>
											</div>
										</li>
										<li>
											<a href="#" class="a_name">Повышение квалификации<br />(144 часа, подтверждение сертификата) </a>
											<div class="mn_group">
												<a href="index.php?q=slushatel/pk_annotaciya">Аннотация курса</a>
												<a href="index.php?q=slushatel/pk_zachislenie">Зачисление на обучение</a>
												<a target="_blank" href="pdf/13.pdf">Учебный план</a>
											</div>
										</li>
										<li>
											<a href="index.php?q=slushatel/pk_144" class="a_name">Повышение квалификации<br />(до 144 часов) </a>
											<div class="mn_group">
												
											</div>
										</li>
										<li>
											<a href="pdf/16.pdf" class="a_name">Календарный план циклов</a>
											<div class="mn_group">
												
											</div>
										</li>
										<li>
											<a href="pdf/17.pdf" class="a_name">Стоимость обучения</a>
											<div class="mn_group">
												
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="index.php?q=order">заявка на обучение</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="bl_top">
					<? require_once('pages/left_menu.php'); ?>
					<? if(is_null($content))  require($file2); else echo $content;?>
				</div>
			</div>
			<? if ($page!='order'): ?>
			<div class="block_bg2">
				<div class="events">
					<h2>события</h2>
					<div class="events_bl">
						<div class="events_left">
							<p><span>12</span> ЯНВ.﻿﻿</p>
						</div>
						<div class="events_right">
							<p>Это текст.﻿﻿</p>
						</div>
					</div>
					<div class="border"></div>
					<div class="events_bl">
						<div class="events_left">
							<p><span>12</span> ЯНВ.﻿﻿</p>
						</div>
						<div class="events_right">
							<p>Это текст.﻿﻿</p>
						</div>
					</div>
					<div class="border"></div>
					<div class="events_bl">
						<div class="events_left">
							<p><span>12</span> ЯНВ.﻿﻿</p>
						</div>
						<div class="events_right">
							<p>Это текст.﻿﻿</p>
						</div>
					</div>
					<div class="border"></div>
					<a href="#">+ Подробнее</a>
				</div>
				<div class="contacts">
					<h2>КОНТАКТНАЯ ИНФОРМАЦИЯ</h2>
					<p>101000, Москва, Милютинский пер., 19/4 стр.2</p>
					<p>Тел.:</p>
					<p>&nbsp;&nbsp;+7 (495) 621 89 43 (среднее и высшее проф. образование)</p>
					<p>&nbsp;&nbsp;+7 (495) 628 85 92 (дополнительное проф. образование)</p>
					<p>E-mail: orgzdrav@koziz.ru</p>
				</div>
			</div>
			<? endif; ?>
		</div>
		<footer>
			<div class="footer">
				<div class="ft_cl_left">
					<p>КАФЕДРА ОБЩЕСТВЕННОГО ЗДОРОВЬЯ И ЗДРАВООХРАНЕНИЯ &copy; 2015</p>
				</div>
				<div class="ft_cl_right">
					
				</div>
			</div>
		</footer>
	</div>
</body>
</html>