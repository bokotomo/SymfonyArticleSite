<?php
class AddArticleForm extends BaseForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'title'  => new sfWidgetFormInput(array(
       ),array(
         'size'      => 30,
         'maxlength' => 40,
       )),
       'text'  => new sfWidgetFormTextarea(array(
       ),array(
         'cols'      => 40,
         'rows'      => 10,
       )),
       'id'  => new sfWidgetFormInputHidden(array(
       ),array(
       )),
    ));

    $this->widgetSchema->setLabels(array(
      'title'  => 'タイトル',
      'text'  => '本文',
    ));

    $this->setValidators(array(
      'title'  => new sfValidatorString(array(
        'required'   => true,
        'max_length' => 20,
      ), array(
        'required'   => '未入力',
        'max_length' => '20文字以内で入力してください',
      )),
      'text'  => new sfValidatorString(array(
        'required'   => true,
        'max_length' => 1000,
      ), array(
        'required'   => '未入力',
        'max_length' => '1000文字以内で入力してください',
      )),
      'id'  => new sfValidatorString(),
    ));
    $this->widgetSchema->setNameFormat('inquiry[%s]');
  }

}
