<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
require("wait_sum.php");

?>
<?php

$image= array(
	'img_susses' =>SITE_TEMPLATE_PATH.'/img/susses.svg',
	'img_middle' =>SITE_TEMPLATE_PATH.'/img/middle.svg',
	'img_fail' =>SITE_TEMPLATE_PATH.'/img/fail.svg',
);
$result_susses = 0;
$result_middle = 0;
$result_fail = 0;
$sum_total = 0;
$sum_total_middle = 0;
$err = 0;


?>

<table>
	<thead>
	<tr>
		<th>
			<div class="header-inner">
				<div class="header-union">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/union.png" alt="">
					<div class="header-union-title">Союз «Торгово-промышленная палата<br>Калужской области»</div>
				</div>
				<div class="header-logo">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="">
					<div class="header-logo-title">Веб-студия<br>«Айти-Эскорт»</div>
				</div>
			</div>

		</th>
	</tr>
	</thead>

	<tbody>
	<tr>
		<td>
			<div class="content">

	<section class="audit-header">

		<div class="audit-container">
			<div class="audit-title">
				Экспресс-аудит сайта компании <br> <?=$arResult['PROPERTY_63']?>
			</div>
			<div class="audit-config">
				<div class="audit-config-box">
					<div class="audit-config-box-img-wrapper">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/web.svg" alt="" />
					</div>
					<div class="audit-config-title">Адрес сайта</div>
					<div class="audit-config-info">
						<?=$arResult['NAME']?>
					</div>
				</div>
				<div class="audit-config-box">
					<div class="audit-config-box-img-wrapper">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/monitor.svg" alt="" />
					</div>
					<div class="audit-config-title">Тип сайта</div>
					<div class="audit-config-info"><?=$arResult['PROPERTY_66']?></div>
				</div>
				<div class="audit-config-box">
					<div class="audit-config-box-img-wrapper">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/gear.svg" alt="" />
					</div>
					<div class="audit-config-title">Система управления сайтом</div>
					<div class="audit-config-info"><?=$arResult['PROPERTIES']['PROP3']['VALUE']?></div>
					<?if($arResult['PROPERTIES']['PROP3']['VALUE'] != '1C-Bitrix'){?>
						<div class="audit-config-addinfo">
							Для коммерческих проектов рекомендуем выбрать платформу с большим сообществом сертифицированных разработчиков.
						</div>
					<?}?>
				</div>
			</div>
		</div>
	</section>


	<section class="audit-parameters">
		<div class="audit-container">
			<div class="audit-parameters-box">
				<div class="audit-parameters-row audit-parameters-row-title">
					<div class="audit-parameters-succes numb-box">
						<div class="audit-parameters-succes-numb count">
							<?
							$wait =new WAIT_ECHO($result_susses);
							$wait->show($result_susses);
							?><sup>/31</sup>
						</div>
						<div class="audit-parameters-succes-info info">
							Тестов успешно
						</div>
					</div>
					<div class="audit-parameters-warning">
						<div class="audit-parameters-succes-numb count">
							<?$wait->show($result_middle);?><sup>/31</sup>
						</div>
						<div class="audit-parameters-succes-info info">
							Предупреждений
						</div>
					</div>
					<div class="audit-parameters-error">
						<div class="audit-parameters-succes-numb count">
							<?$wait->show($result_fail);?><sup>/31</sup>
						</div>
						<div class="audit-parameters-succes-info info">
							Ошибок
						</div>
					</div>
				</div>
			</div><?if($arResult['PROPERTIES']['PROP4']['VALUE'] != 'X'):?>
				<div class="audit-parameters-box">
					<div class="audit-parameters-row">
						<div class="audit-parameter">
							<div class="audit-parameter-box">
								<?if($arResult['PROPERTIES']['PROP4']['VALUE'] != '0'){?>
								<img src="<?=$image['img_susses']; ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail ?>" alt="" />
								<div class="audit-parameter-title">
									Регистрация домена на организацию
								</div>
							</div>
							<?}else{?>
							<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
							<div class="audit-parameter-title">
								Регистрация домена на организацию
							</div>
						</div>
						<div class="audit-parameter-error">
							Рекомендуем перерегистрировать домен на организацию.
						</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Управлять и распоряжаться доменом имеет право тот, на кого он зарегистрирован. Чтобы не потерять контроль над управлением домена и сайта, регистрировать его нужно на организацию.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP5']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<div class="audit-parameter-box">
							<img src="<?=$image['img_susses']; ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
							<div class="audit-parameter-title">Возраст домена: <?=$arResult['PROPERTIES']['PROP5']['VALUE'];?> лет</div>
						</div>
					</div>
					<div class="audit-parameter-info">
						Молодые и новые домены плохо продвигаются в высококонкурентных тематиках. Также важна история домена и сайта.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP6']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<div class="audit-parameter-box">
							<?if($arResult['PROPERTIES']['PROP6']['VALUE'] != '0'){?>
							<img src="<?=$image['img_susses']; ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />

							<div class="audit-parameter-title">
								Размещение сайта на сервере в России
							</div>
						</div>
						<?}else{?>
						<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
						<div class="audit-parameter-title">
							Размещение сайта на сервере в России
						</div>
					</div>
					<div class="audit-parameter-error">
						Рекомендуем перенести сайт на российский сервер.
					</div>
					<?}?>
				</div>
				<div class="audit-parameter-info">
					Расположение сервера имеет значение для поисковых роботов. При ранжировании они отдают предпочтение сайтам, чьи серверы находятся в той же стране, что и целевая аудитория ресурса. Также важно соблюдать требования закона о хранении персональных данных.
				</div>
			<?endif;?>
		</div>
		<div class="audit-parameters-box">
			<?if($arResult['PROPERTIES']['PROP7']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP7']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses']; ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">Ошибки на сайте</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">Ошибки на сайте</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем устранить ошибки.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Отсутствие на главной странице сайта видимых ошибок верстки и программного кода. Например, наползающие друг на друга элементы или вывод спецсимволов вместо текста.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP8']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP8']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses']; ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Работа сайта по защищенному протоколу HTTPS
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Работа сайта по защищенному протоколу HTTPS
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем перевести сайт на защищенный протокол HTTPS для безопасной передачи данных.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Для сайтов важна конфиденциальность обмена информацией между сервером и посетителями. Это повышает лояльность потенциальных клиентов к ресурсу, увеличивает уровень доверия, влияет на конверсию и рост позиций в поисковой выдаче.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP9']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP9']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses']; ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Адаптивность сайта для мобильных устройств
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Адаптивность сайта для мобильных устройств
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем адаптировать сайт под мобильные устройства.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Адаптивный дизайн сайта решает две задачи: обеспечивает пользователям комфортный просмотр с любого устройства и положительно влияет на поисковое ранжирование сайта.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP10']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP10']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses']; ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">Время ответа сервера</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">Время ответа сервера</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем сократить время ответа сервера.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Медленный ответ сервера снижает лояльность посетителя. На время ответа влияют: база данных, использование сторонних сервисов, кэш страниц и скриптов, производительность сервера.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP11']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP11']['VALUE'] > '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Ошибок валидации HTML: <?=$arResult['PROPERTIES']['PROP11']['VALUE']?>
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем устранить критические ошибки html-разметки.
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">Ошибок валидации HTML</div>
							</div>
						<?}?>
					</div>

					<div class="audit-parameter-info">
						Код должен соответствовать стандартам W3C. Страницы с таким кодом корректно отображаются в браузере: имеют хорошие поведенческие факторы, занимают высокие позиции в поисковой выдаче.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP12']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP12']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Использование современных форматов изображений
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Использование современных форматов изображений
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем использовать на сайте изображения в формате WebP.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Использование современных форматов изображений позволяет быстрее отображать сайт для конечного пользователя без потери качества.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP13']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP13']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Использование систем статистики Яндекса, Google и т.п.
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Использование систем статистики Яндекса, Google и т.п.
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем подключить систему статистики сайта для дальнейшего анализа и увеличения конверсии.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Одни из самых популярных: Яндекс. Метрика и Google Analytics. Системы статистики помогают отслеживать эффективность продвижения сайта и рекламных кампаний. Учитывают посещаемость сайта, отказы, поведение пользователя.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP14']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP14']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Вирусы на сайте
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Вирусы на сайте
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем срочно вылечить сайт от вируса, а также устранить причины, чтобы ситуация не повторилась.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Поисковые системы сканируют сайты на вирусы, фишинговые страницы и другие проблемы, которые ухудшают пользовательский опыт. Благодаря этой информации поисковая система предупреждает пользователей о небезопасных сайтах. В случае, если сайт признан опасным, поисковые системы могут понизить его в выдаче или удалить.
					</div>
				</div>
			<?endif;?>
		</div>

		<div class="audit-parameters-box">

			<?if($arResult['PROPERTIES']['PROP15']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP15']['VALUE'] >= '50'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс качества сайта Яндекс (ИКС): <?=$arResult['PROPERTIES']['PROP15']['VALUE'];?>
								</div>
							</div>

						<?}elseif($arResult['PROPERTIES']['PROP15']['VALUE'] == '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс качества сайта Яндекс (ИКС): <?=$arResult['PROPERTIES']['PROP15']['VALUE'];?>
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем повысить ИКС, для этого: пересмотрите дизайн и структуру сайта; повысьте скорость загрузки страниц; систематизируйте качество и количество публикаций; ориентируйтесь на конкурентов с высоким ИКС.
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_middle']; ++$result_middle; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс качества сайта Яндекс (ИКС): <?=$arResult['PROPERTIES']['PROP15']['VALUE'];?>
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем повысить ИКС, для этого: пересмотрите дизайн и структуру сайта; повысьте скорость загрузки страниц; систематизируйте качество и количество публикаций; ориентируйтесь на конкурентов с высоким ИКС.
							</div>
						     <?}?>
					</div>
					<div class="audit-parameter-info">
						Индекс качества сайта — это показатель того, насколько полезен ваш сайт для пользователей с точки зрения Яндекса. При расчете индекса качества учитываются размер аудитории сайта, поведенческие факторы и данные сервисов Яндекса.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP16']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if(($arResult['PROPERTIES']['PROP16']['VALUE'] <= '10')
							AND($arResult['PROPERTIES']['PROP2']['VALUE'] == 'Корпоративный' && 'Магазин' && 'Федеральный')){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Количество страниц в поиске Яндекс: <?=$arResult['PROPERTIES']['PROP16']['VALUE'];?>
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем устранить ошибки индексации сайта.
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Количество страниц в поиске Яндекс: <?=$arResult['PROPERTIES']['PROP16']['VALUE'];?>
								</div>
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Индексация сайта в поисковых системах – важная составляющая продвижения сайта в топ. При индексировании страниц, робот поисковой системы добавляет сведения о сайте в базу данных. Дальнейший поиск происходит по проиндексированным страницам. Поэтому, если страниц на вашем сайте много, а в поиске мало, они не проиндексированы.
					</div>
				</div>
			<?endif;?>


			<?if($arResult['PROPERTIES']['PROP17']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP17']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Заголовки H1 на главной странице
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Заголовки H1 на главной странице
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить на главной странице сайта один заголовок уровня H1.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Заголовки важны для поискового продвижения, потому что поисковые роботы по ним определяют, что находится на странице, и насколько она релевантна запросу.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP18']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP18']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Наличие на сайте семантической микроразметки
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Наличие на сайте семантической микроразметки
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем добавить на сайт семантическую микроразметку для лучшего индексирования сайта поисковыми системами.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Микроразметка — это семантическая разметка страниц сайта, которая структурирует данные. Логическая структура информации на странице помогает поисковым системам извлекать и обрабатывать данные.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP19']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP19']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Наличие на сайте файла robots.txt
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Наличие на сайте файла robots.txt
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить файл robots.txt для лучшего индексирования сайта поисковыми системами.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Файл robots.txt – это список ограничений для поисковых роботов или ботов, которые посещают сайт и сканируют информацию на нем. Перед тем, как сканировать и индексировать ваш сайт, все роботы обращаются к файлу robots.txt и ищут правила.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP20']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP20']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Наличие на сайте файла sitemap.xml
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Наличие на сайте файла sitemap.xml
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить файл sitemap.xml для лучшего индексирования сайта поисковыми системами.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Файл Sitemap — это файл с информацией о страницах сайта, подлежащих индексированию. С помощью этого файла вы можете: сообщить поисковикам, какие страницы вашего сайта нужно индексировать; как часто обновляется информация на страницах; индексирование каких страниц наиболее важно.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP21']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if(($arResult['PROPERTIES']['PROP21']['VALUE'] >= '0') AND ($arResult['PROPERTIES']['PROP21']['VALUE'] <= '49')){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс скорости Google Page Speed для компьютера: <?=$arResult['PROPERTIES']['PROP21']['VALUE'];?>
								</div>

							</div>
							<div class="audit-parameter-error">
								Рекомендуем увеличить скорость загрузки сайта.
							</div>
						<?}elseif (($arResult['PROPERTIES']['PROP21']['VALUE'] >= '50') AND ($arResult['PROPERTIES']['PROP21']['VALUE'] <= '89')){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_middle']; ++$result_middle; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс скорости Google Page Speed для компьютера: <?=$arResult['PROPERTIES']['PROP21']['VALUE'];?>
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс скорости Google Page Speed для компьютера: <?=$arResult['PROPERTIES']['PROP21']['VALUE'];?>
								</div>
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Низкая скорость загрузки сайта негативно влияет на конверсию. Показатель скорости загрузки сайта для компьютера. Низкая скорость загрузки: 0–49, Средняя скорость загрузки: 50–89, Высокая скорость загрузки: 90–100.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP22']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if(($arResult['PROPERTIES']['PROP22']['VALUE'] >= '0') AND ($arResult['PROPERTIES']['PROP22']['VALUE'] <= '49')){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс скорости Google Page Speed для смартфона: <?=$arResult['PROPERTIES']['PROP22']['VALUE'];?>
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем увеличить скорость загрузки сайта.
							</div>
						<?}elseif (($arResult['PROPERTIES']['PROP22']['VALUE'] >= '50') AND ($arResult['PROPERTIES']['PROP22']['VALUE'] <= '89')){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_middle']; ++$result_middle; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс скорости Google Page Speed для смартфона: <?=$arResult['PROPERTIES']['PROP22']['VALUE'];?>
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Индекс скорости Google Page Speed для смартфона: <?=$arResult['PROPERTIES']['PROP22']['VALUE'];?>
								</div>
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Низкая скорость загрузки сайта негативно влияет на конверсию. Показатель скорости загрузки сайта для смартфона. Низкая скорость загрузки: 0–49, Средняя скорость загрузки: 50–89, Высокая скорость загрузки: 90–100.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP23']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP23']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Объем передаваемого сервером контента и компонентов
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Объем передаваемого сервером контента и компонентов
								</div>
							</div>
							<div class="audit-parameter-error">
								Объем загружаемых ресурсов главной страницы вашего сайта больше рекомендуемого. Рекомендуем: сократить HTML, JS и CSS, оптимизировать изображения.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Чтобы страница загружалась быстро, согласно рекомендациям Google, их общий вес не должен превышать 1600 КБ. Считаются все элементы страницы: изображения, видео, скрипты и прочее.
					</div>
				</div>
			<?endif;?>

		</div>
		<div class="audit-parameters-box">
			<?if($arResult['PROPERTIES']['PROP24']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP24']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Вид деятельности на главной странице
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Вид деятельности на главной странице
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем внести изменения на главную страницу (баннер или шапка сайта) для быстрого понимая деятельности компании.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Попадая на главную страницу сайта, пользователю сразу должно быть понятно, какие компания оказывает услуги или реализует товары.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP25']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP25']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Качественный фото и видео-контент
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Качественный фото и видео-контент
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить на сайте качественный фото и видео-контент.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Качественные фотографии и видео повышают лояльность клиента.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP26']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP26']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Строка навигации «хлебные крошки»
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Строка навигации «хлебные крошки»
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем внедрить в шаблон сайта строку навигации.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Строка навигации помогает ориентироваться в структуре сайта и без проблем перемещаться по нему.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP27']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP27']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Поиск по сайту
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Поиск по сайту
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем внедрить в шаблон сайта поисковую строку.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Поиск помогает быстрее находить нужные разделы и страницы сайта
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP28']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP28']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Возможность оставления заявки или покупки
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Возможность оставления заявки или покупки
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить детальную форму заявки или корзину. Если товар сложный и не предполагает покупки на сайте без предварительной консультации, разместите соответствующую форму для получения консультации.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Возможность оставить заявку на услугу или приобрести товар сразу на сайте повышает конверсию.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP29']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP29']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Цены
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Цены
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить на сайте цены на услуги или продукцию. Хотя бы примерные «от…».
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Наличие на сайте цен на услуги или продукцию повышает лояльность клиента и конверсию.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP30']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP30']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Ссылки на профили социальных сетей
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Ссылки на профили социальных сетей
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить ссылки на социальные сети в разделе «Контакты», шапке или подвале сайта.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Наличие у компании социальных сетей – требования современных клиентов.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP31']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP31']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Контактная информация на первом экране
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Контактная информация на первом экране
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить телефон в шапке сайта.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Открыв сайт клиент должен иметь возможность оперативно связаться с компанией. Чем дольше искать контакты, тем ниже конверсия.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP32']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP32']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Наличие на сайте портфолио или отзывов клиентов
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Наличие на сайте портфолио или отзывов клиентов
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем разместить на сайте отзывы клиентов или кейсы выполненных работ.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Наличие на сайте списка выполненных проектов, портфолио или отзывов повышает лояльность клиента.
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP33']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP33']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Онлайн-чат
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail'];  ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Онлайн-чат
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем добавить на сайт онлайн-чат и назначить ответственного сотрудника для оперативной реакции на обращения клиентов.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Мало оставить телефон или почту для связи. У пользователя может быть срочный вопрос, а ответ по почте приходится долго ждать. Звонок не всегда эффективен, многие не любят общаться голосом и пренебрегают данным видом связи. Онлайн-консультант — это специальная система, которая позволяет неформально общаться с посетителями сайта в режиме реального времени. Живое общение в онлайн-чате помогает посетителю сайта сделать выбор, а вашему бизнесу повысить конверсию..
					</div>
				</div>
			<?endif;?>

			<?if($arResult['PROPERTIES']['PROP34']['VALUE'] != 'X'):?>
				<div class="audit-parameters-row">
					<div class="audit-parameter">
						<?if($arResult['PROPERTIES']['PROP34']['VALUE'] != '0'){?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_susses'];  ++$result_susses; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Favicon
								</div>
							</div>
						<?}else{?>
							<div class="audit-parameter-box">
								<img src="<?=$image['img_fail']; ++$result_fail; ++$sum_total;++$sum_total_middle;++$sum_total_fail?>" alt="" />
								<div class="audit-parameter-title">
									Favicon
								</div>
							</div>
							<div class="audit-parameter-error">
								Рекомендуем добавить на сайт favicon.
							</div>
						<?}?>
					</div>
					<div class="audit-parameter-info">
						Это значок веб-страницы на вкладке браузера. Наличие у сайта favicon позволяет выделить его в поисковой выдаче, среди вкладок браузера, повысить узнаваемость и запоминаемость сайта у клиента.
					</div>
				</div>
			<?endif;?>
		</div>
		</div>
	</section>

<div class="audit-container">
	<div class="row cooperation-inner">
		<div class="col-12">
			<div class="cooperation-title">
				Если у вас остались вопросы и требуется консультация, то мы открыты к сотрудничеству!
			</div>
		</div>
		<div class="col-6">
			<div class="promotion-title title">
				Онлайн-продвижение
			</div>
			<ul class="promotion">
				<li>Мария Кузина,</li>
				<li> директор центра маркетинга и проектов<br>Союза «Торгово-промышленная палата<br>Калужской области»</li>
				<li class="cooperation-tel">+7 4842 41-06-05</li>
				<li class="cooperation-email">kmv@tppkaluga.ru</li>
			</ul>
		</div>
		<div class="col-6">
			<div class="promotion-title title">
				Оптимизация сайта
			</div>
			<ul class="promotion">
				<li>Сергей Олехов,</li>
				<li>шеф веб-студии «Айти-Эскорт»<br>&nbsp;<br>&nbsp;</li>
				<li class="cooperation-tel">+7 4842 33-34-70</li>
				<li class="cooperation-email">oss@itescort.ru</li>
			</ul>
		</div>
	</div>
</div>

</div>
</td>
</tr>
</tbody>


<tfoot>
<tr>
	<td>
		<div class="footer-inner">
			<div class="footer-date">
				Экспресс-аудит сайта <?=$arResult['NAME']?>, 13.04.2021
			</div>
		</div>
	</td>
</tr>
</tfoot>
</table>