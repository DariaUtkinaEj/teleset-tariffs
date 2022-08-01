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

    public function contact($email = 'support@teleset-ufa.ru')
    {
        if ($this->validate()) {
            $composedMessage = Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->email => $this->name])
                ->setSubject('Заявка на подключение тарифа')
                ->setTextBody($this->message);
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
