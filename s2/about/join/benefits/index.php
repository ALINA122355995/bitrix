<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Преимущества");
?>
<main class="main">

<!-- Conten Page Section -->
<section class="content-page section">

    <div class="container">
        <div class="row gy-5">

            <div class="col-lg-4">

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
                        <a href="#"><i class="bi bi-filetype-pdf"></i><span>Скачать PDF</span></a>
                        <a href="#"><i class="bi bi-file-earmark-word"></i><span>Скачать DOC</span></a>
                    </div>
                </div>

                <div class="help-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-headset help-icon"></i>
                    <h4>Вопросы?</h4>
                    <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+7 000
                            000 00 00</span></p>
                    <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                            href="mailto:contact@example.com">contact@company.ru</a></p>
                </div>

            </div>

            <div class="col-lg-8 ps-lg-5">

                <!-- Content Page Title -->
                <div class="page-content-title">
                    <div class="position-relative">
                        <h1>Преимущества</h1>
                        <p>Работайте с нами и раскройте свой потенциал в комфортной и поддерживающей среде.</p>
                        <nav class="breadcrumbs">
                            <ol>
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">О компании</a></li>
                                <li><a href="#">Присоединиться</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- End Content Page Title -->

                <!-- CONTENT -->


                <p>Работая в нашей компании, вы получаете уникальные возможности для профессионального и личностного
                    роста. Мы ценим каждого сотрудника и стремимся создать комфортные условия для работы и развития.
                    Наши преимущества делают нас привлекательным работодателем для талантливых и амбициозных
                    специалистов.</p>


                <h2>Карьерный Рост</h2>
                <p>Мы предлагаем широкие возможности для карьерного роста и профессионального развития. Наши
                    сотрудники регулярно проходят обучение и участвуют в тренингах, что позволяет им постоянно
                    совершенствовать свои навыки и знания. Мы поддерживаем инициативу и стремление к новым достижениям.
                </p>
                <ul>
                    <li>Регулярные тренинги и семинары</li>
                    <li>Возможность участия в международных проектах</li>
                    <li>Поддержка наставников и опытных коллег</li>
                    <li>Прозрачная система карьерного роста</li>
                </ul>

                <h2>Комфортные условия работы</h2>
                <p>Мы заботимся о том, чтобы наши сотрудники работали в комфортных условиях. Современные офисы, гибкий
                    график работы и возможность удаленной работы — это лишь часть того, что мы предлагаем. Мы стремимся
                    создать атмосферу, в которой каждый сотрудник чувствует себя частью команды.</p>

                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/content/history_3.jpg" alt="" class="img-fluid services-img">


                <h2>Социальные гарантии</h2>
                <p>Мы предоставляем нашим сотрудникам полный пакет социальных гарантий, включая медицинское
                    страхование и оплачиваемый отпуск. Мы заботимся о здоровье и благополучии наших сотрудников,
                    предлагая различные программы поддержки и оздоровления.</p>



                <!-- END CONTENT -->

            </div>

        </div>

    </div>
</section><!-- End Conten Page Section -->

</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>