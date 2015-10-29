<?
	if(empty($page)) $page='xcklsdhafhnsdlfuweurwhpie';
	$left_menu=[
		['name'=>'Главная','url'=>'index.php?q=main'],
		['name'=>'Кафедра','url'=>'#'],
		['name'=>'Федеральный центр','url'=>'#'],
		['name'=>'Наука','url'=>'#'],
		['name'=>'Обучение','url'=>'#'],
		['name'=>'Технологии','url'=>'#'],
		['name'=>'Библиотека','url'=>'#'],
		['name'=>'Контакты','url'=>'#'],
	];
?>
<div class="top_colum_left">
	<nav>
		<ul>
			<? foreach($left_menu as $item){ ?>
			<li>
				<a href="<?=$item['url']?>"<?=(mb_strpos($item['url'],$page)===false) ? '' : ' class="active"';?>><?=$item['name']?></a>
			</li>
			<?}?>
		</ul>
	</nav>
</div>