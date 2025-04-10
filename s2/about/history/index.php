<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");$APPLICATION->SetTitle("История");?>

<main class="main">
	<section class="content-page section">
<div class="container">
	<div class="row gy-5">
		<div class="col-lg-4">
<!-- Conten Page Section -->
 <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "left_menu"
	),
	false
);?> 
			
			<div class="service-box">
				<h4>Материалы</h4>
				<div class="download-catalog">
 <a href="#"><i class="bi bi-filetype-pdf"></i>Скачать PDF</a> <a href="#"><i class="bi bi-file-earmark-word"></i>Скачать DOC</a>
				</div>
			</div>
			<div class="help-box d-flex flex-column justify-content-center align-items-center">
 <i class="bi bi-headset help-icon"></i>
				<h4>Вопросы?</h4>
				<p class="d-flex align-items-center mt-2 mb-0">
 <i class="bi bi-telephone me-2"></i> +7 000 000 00 00
				</p>
				<p class="d-flex align-items-center mt-1 mb-0">
 <i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com">contact@company.ru</a>
				</p>
			</div>
		</div>
		<div class="col-lg-8 ps-lg-5">
			 <!-- Content Page Title -->
			<div class="page-content-title">
				<div class="position-relative">
					<h1>История</h1>
					<p>
						 Наш путь к успеху — это история инноваций, роста и достижений.
					</p>
 <nav class="breadcrumbs">
					<ol>
						<li><a href="#">Главная</a></li>
						<li><a href="#">О компании</a></li>
					</ol>
 </nav>
				</div>
			</div>
			 <!-- End Content Page Title --> <!-- CONTENT --> <img src="/local/templates/exam1_type1_content/assets/img/content/history_1.jpg" alt="" class="img-fluid services-img">
			<h2>Наше начало</h2>
			<p>
				 История нашей компании началась с небольшой группы энтузиастов, которые объединились ради общей цели — создания инновационных решений для бизнеса. Вдохновленные идеей улучшения процессов и повышения эффективности, мы начали свой путь с небольших проектов, которые быстро завоевали доверие клиентов. С самого начала мы стремились к высоким стандартам качества и профессионализма, что позволило нам быстро занять лидирующие позиции на рынке.
			</p>
			<h2>Развитие и рост</h2>
			<p>
				 С течением времени наша компания значительно расширила свои возможности и спектр услуг. Мы инвестировали в новые технологии и обучение сотрудников, что позволило нам предлагать клиентам передовые решения. Наше стремление к постоянному развитию и инновациям стало ключевым фактором успеха. Мы гордимся тем, что смогли создать команду профессионалов, которая всегда готова к новым вызовам и достижениям.
			</p>
 <img src="/local/templates/exam1_type1_content/assets/img/content/history_2.jpg" alt="" class="img-fluid services-img">
			<h2>Ключевые этапы развития</h2>
			<ul>
				<li>Основание компании - начало нашего пути и первые успешные проекты.</li>
				<li>Расширение команды - привлечение высококвалифицированных специалистов.</li>
				<li>Внедрение инноваций - инвестиции в новые технологии и развитие.</li>
				<li>Выход на международный рынок - расширение географии наших проектов.</li>
				<li>Получение наград и признания - признание нашего вклада в развитие отрасли.</li>
			</ul>
			 <!-- END CONTENT -->
		</div>
	</div>
</div>
 </section><!-- End Conten Page Section --> 
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>