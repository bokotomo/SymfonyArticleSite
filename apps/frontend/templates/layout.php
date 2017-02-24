<!DOCTYPE>
<html lang="ja">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php include_partial('global/Header') ?>
    <div id="contents">
      <?php echo $sf_content ?>
    </div>
    <?php include_partial('global/Footer') ?>
  </body>
</html>
