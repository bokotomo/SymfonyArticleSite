<div id="article-detail">
  <?php foreach ($articleDetail as $data): ?>

  <div id="article-detail-image" style="background-image: url('<?php echo $data->getImageUrl() ?>');"></div>

  <div id="article-detail-title">
    <?php echo $data->getTitle() ?>
  </div>

  <div id="article-detail-date">
    <?php echo $data->getDateTimeObject('created_at')->format('Y年m月d日') ?>
  </div>


  <div id="article-detail-text">
    <?php echo $data->getText() ?>
  </div>

  <?php endforeach; ?>
</div>
