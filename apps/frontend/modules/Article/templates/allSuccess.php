<?php foreach ($pageList as $page): ?>
<div id="article">
  <div id="article-image" style="background-image: url('<?php echo $page->getImageUrl() ?>');"></div>
  <div id="article-title">
    <?php echo link_to($page->getTitle(), '/article/web/article/detail', array(
    'query_string'=> 'id='.$page->getId(),
    'slug'=> $page->getSlug()
    )) ?>
  </div>
  <div id="article-date">
    <?php echo $page->getDateTimeObject('created_at')->format('Y年m月d日') ?>
  </div>
</div>
<?php endforeach; ?>
