<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

<main class="main">

<!-- Conten Page Section -->
<section class="content-page section">

    <div class="container">
        <div class="row gy-5">

            <div class="col-lg-4">

                <div class="service-box">
                    <div class="services-list">
                        <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Пункт меню 1</span></a>
                        <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Пункт меню 2 -
                                активный</span></a>
                        <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Пункт меню 3</span></a>
                        <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Пункт меню 4</span></a>
                    </div>
                </div>

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
                        <h1>Заголовок страницы</h1>
                        <p>Короткий текст для страницы под H1</p>
                        <nav class="breadcrumbs">
                            <ol>
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">Раздел 1</a></li>
                                <li><a href="#">Раздел 1.1</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- End Content Page Title -->

                <!-- CONTENT -->
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/services.jpg" alt="" class="img-fluid services-img">
                <h2>Преимущества и особенности наших инженерных решений</h2>
                <h3>Преимущества и особенности наших инженерных решений</h3>
                <p>
                    В современном мире промышленные предприятия сталкиваются с множеством вызовов, связанных с
                    эффективностью и надежностью производственных процессов. Наша компания предлагает передовые
                    инженерные решения, которые помогут вам справиться с этими задачами.
                </p>
                <p>Основные преимущества наших решений:</p>
                <ul>
                    <li>Мы используем технологии, которые позволяют
                            значительно снизить энергопотребление.</li>
                    <li>Наши решения обеспечивают стабильную работу
                            оборудования даже в самых сложных условиях.</li>
                    <li>Мы адаптируем наши решения под конкретные нужды вашего
                            предприятия.</li>
                </ul>
                <p>
                    Мы уверены, что наши решения помогут вам достичь новых высот в производительности и эффективности.
                    Свяжитесь с нами, чтобы узнать больше о том, как мы можем помочь вашему бизнесу.
                </p>
                <!-- END CONTENT -->

            </div>

        </div>

    </div>
</section><!-- End Conten Page Section -->

</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>