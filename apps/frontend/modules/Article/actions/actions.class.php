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
      $this->pageId = $request->getParameter('id');
      $this->articleDetail = Article::findPublishAricleById($this->pageId);
    }
  }

  public function executeContact(sfWebRequest $request)
  {
    $form = new ContactForm();
    $this->contactCompleFlag = false;
    if ($request->isMethod(sfRequest::POST))
    {
      $form->bind($request->getParameter($form->getName()));
      if ($form->isValid())
      {
        $this->contactCompleFlag = true;
        $mailer = $this->getMailer();
        $mailer->composeAndSend(
          'tst@mail.com',
          'sample@sample.com',
          'TestMail',
          'text'
        );
      }
    }
    $this->form = $form;
  }

  public function executeAdd(sfWebRequest $request)
  {
    $form = new AddArticleForm();
    if ($request->isMethod(sfRequest::POST))
    {
      $form->bind($request->getParameter($form->getName()));
      if ($form->isValid())
      {
        $postData = $request->getParameter('inquiry');
        Article::addAriticle($postData);
      }
    }
    $this->form = $form;
  }

  public function executeEdit(sfWebRequest $request)
  {
    $form = new AddArticleForm();
    if ($request->isMethod(sfRequest::GET))
    {
      $pageId = $request->getParameter('id');
      $articleDetail = Article::findPublishAricleById($pageId);
      $form->setDefault(
        "title", $articleDetail[0]["title"]
      );
      $form->setDefault(
        "text", $articleDetail[0]["text"]
      );
      $form->setDefault(
        "id", $pageId
      );
    }
    if ($request->isMethod(sfRequest::POST))
    {
      $form->bind($request->getParameter($form->getName()));
      if ($form->isValid())
      {
        $postData = $request->getParameter('inquiry');
        Article::editArticle($postData);
echo "ok";
        //$this->redirect('Article/detail');
      }
    }
    $this->form = $form;
  }

  public function executeAll(sfWebRequest $request)
  {
    $this->pageList = Article::findTopPagePublishAricles();
  }

}
