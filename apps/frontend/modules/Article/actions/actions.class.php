<?php

/**
 * Article actions.
 *
 * @package    article
 * @subpackage Article
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArticleActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeDetail(sfWebRequest $request)
  {
    if ($request->isMethod(sfRequest::GET))
    {
      $pageId = $request->getParameter('id');
      $this->articleDetail = Article::findPublishAricleById($pageId);
    }
  }

  public function executeContact()
  {

  }

  public function executeAdd(sfWebRequest $request)
  {

  }

  public function executeAll(sfWebRequest $request)
  {
    $this->pageList = Article::findTopPagePublishAricles();
  }

}
