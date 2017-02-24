<?php foreach ($pageList as $page): ?>
<div id="article">
  <div id="article-image" style="background-image: url('<?php echo $page->getImageUrl() ?>');"></div>
  <div id="article-title">
    <?php echo link_to($page->getTitle(), 'detail_page', array(
    'id'=>$page->getId(),
    'slug'=> $page->getSlug()
    )) ?>
  </div>
  <div id="article-date">
    <?php echo $page->getDateTimeObject('created_at')->format('Y年m月d日') ?>
  </div>
</div>
<?php endforeach; ?>
