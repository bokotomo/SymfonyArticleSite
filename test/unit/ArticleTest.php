<?php
include dirname(__FILE__).'/../../../bootstrap/unit.php';
new sfDatabaseManager($configuration);
Doctrine_Core::loadData(sfConfig::get('sf_data_dir').'/fixtures');
$test = new lime_test(5);

newcountCheck($test, 5);

$title = 'Lime Test Title';
$imageUrl = 'Lime Test imageUrl';
$text = 'Lime Test Text';

$art = new Article();
$art->setTitle($title);
$art->setImageUrl($imageUrl);
$art->setText($text);

$testArticle = ArticleTable::getInstance()->createQuery('p')
  ->where('p.title = ?', $title)
  ->execute();

if (count($testArticles) == 1)
{
  $test->is($testArticles[0]->getTitle(), $title, 'Title is OK');
  $test->is($testArticles[0]->getImageUrl(), $imageUrl, 'image_url is OK');
  $test->is($testArticles[0]->getText(), $text, 'Text is OK');
}
else
{
  $test->fail('Article count error.');
}
/*
articleCountCheck($test, 6);

$art->delete();

articleCountCheck($test, 5);

function articleCountCheck($test, $num)
{
  $new

}
*/
