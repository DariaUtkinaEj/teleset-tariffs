<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ContactForm extends Model
{
    public $name;
    public $email;
    public $message;
    public $check;

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
            [['check'], 'in', 'range' => [14]]
        ];
    }

    public function contact($email = 'teleset.noreply@yandex.ru')
    {
        if ($this->validate()) {
            $composedMessage = Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject('Заявка на подключение тарифа')
                ->setHtmlBody(
                    "<h1>Имя заявителя: $this->name</h1>" .
                                "<h2>Почта заявителя: $this->email</h2>" .
                                "<h3>Сообщение</h3>" .
                                "<p>$this->message</p>"
                );

                return $composedMessage->send();
        }
        return false;
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Представьтесь',
            'email' => 'Ваш email',
            'message' => 'Оставьте сообщение'
        ];
    }
}
