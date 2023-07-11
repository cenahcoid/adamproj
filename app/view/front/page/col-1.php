<!DOCTYPE html>
<html>
  <?php $this->getThemeElement('page/html/head', $__forward) ?>
  <body class="sb-nav-fixed">
    <?php $this->getThemeElement('page/html/navbar', $__forward)?>
    <?php $this->getThemeElement('page/html/offcanvas', $__forward)?>
    <?php $this->getThemeElement('page/html/footer', $__forward)?>
    <?php $this->getThemeContent() ?>

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <?php $this->getJsFooter(); ?>

    <!-- Load and execute javascript code used only in this page -->
      <?php $this->getJsContent(); ?>
  </body>
</html>