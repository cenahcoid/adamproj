<!DOCTYPE html>
<html>

<body>
  <div class="container">
    <h2>
      Jika Ingin Kembali <a style="text-decoration: none; color: black;" href="<?= base_url() ?>">Back To Homepage</a>
    </h2>
  </div>

  <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
  <?php $this->getJsFooter(); ?>

  <!-- Load and execute javascript code used only in this page -->
  <script>
    $(document).ready(function(e) {
      <?php $this->getJsReady(); ?>
    });
    <?php $this->getJsContent(); ?>
  </script>
</body>

</html>