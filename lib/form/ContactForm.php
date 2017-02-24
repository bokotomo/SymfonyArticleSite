<?php
class ContactForm extends BaseForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'name'  => new sfWidgetFormInput(array(
       ),array(
         'size'      => 30,
         'maxlength' => 40,
       )),
      'email' => new sfWidgetFormInput(array(
       ),array(
         'size'      => 30,
         'maxlength' => 40,
       )),
       'text'  => new sfWidgetFormTextarea(array(
       ),array(
         'cols'      => 40,
         'rows'      => 10,
       )),
    ));

    $this->widgetSchema->setLabels(array(
      'name'  => 'お名前',
      'email' => 'メールアドレス',
      'text'  => 'ご内容',
    ));

    $this->setValidators(array(
      'name'  => new sfValidatorString(array(
        'required'   => true,
        'max_length' => 20,
      ), array(
        'required'   => '未入力',
        'max_length' => '20文字以内で入力してください',
      )),
      'email' => new sfValidatorEmail(array(
        'required'   => true,
      ), array(
        'required'   => '未入力',
        'invalid'    => 'メールアドレスが正しくありません',
      )),
      'text'  => new sfValidatorString(array(
        'required'   => true,
        'max_length' => 1000,
      ), array(
        'required'   => '未入力',
        'max_length' => '1000文字以内で入力してください',
      )),
    ));
    $this->widgetSchema->setNameFormat('inquiry[%s]');
  }

}
