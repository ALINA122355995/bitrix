<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><main class="main">
<!-- Conten Page Section --> <section class="content-page section">
<div class="container">
	<div class="row gy-5">
		<div class="col-lg-4">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CACHE_SELECTED_ITEMS" => "Y",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "left_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
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
					<h1><?php $APPLICATION->ShowTitle(false); ?></h1>
					 <?php
  
      $desc = $APPLICATION->ShowProperty("page_text_under_title");
           if (!empty($desc)): ?>
					<p>
						 <?php echo $desc; ?>
					</p>
					 <?php else: ?>
					<p>
					</p>
					 <?php endif; ?><nav class="breadcrumbs">
					<ol>
						<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
					</ol>
 </nav>
				</div>
			</div>
			 <!-- End Content Page Title --> <!-- CONTENT --> <img src="/local/templates/exam1_type1_content/assets/img/services.jpg" alt="" class="img-fluid services-img">
			<h2>Преимущества и особенности наших инженерных решений</h2>
			<h3>Преимущества и особенности наших инженерных решений</h3>
			<p>
				 В современном мире промышленные предприятия сталкиваются с множеством вызовов, связанных с эффективностью и надежностью производственных процессов. Наша компания предлагает передовые инженерные решения, которые помогут вам справиться с этими задачами.
			</p>
			<p>
				 Основные преимущества наших решений:
			</p>
			<ul>
				<li>Мы используем технологии, которые позволяют значительно снизить энергопотребление.</li>
				<li>Наши решения обеспечивают стабильную работу оборудования даже в самых сложных условиях.</li>
				<li>Мы адаптируем наши решения под конкретные нужды вашего предприятия.</li>
			</ul>
			<p>
				 Мы уверены, что наши решения помогут вам достичь новых высот в производительности и эффективности. Свяжитесь с нами, чтобы узнать больше о том, как мы можем помочь вашему бизнесу.
			</p>
			 <!-- END CONTENT -->
		</div>
	</div>
</div>
 </section><!-- End Conten Page Section --> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>