

<footer id="footer" class="footer">
    <div class="copyright">
      Дашборд: место, где данные обретают смысл.
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php
use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
 
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");


  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/main.js");
  ?>
</body>

</html>
