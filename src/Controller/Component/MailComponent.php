<?php
/**
 * Created by PhpStorm.
 * User: takumiendoh
 * Date: 2018/05/26
 * Time: 2:23
 */


namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Mailer\Email;


class MailComponent extends Component
{

    public function add_user($send_to,$link)
    {
        $email = new Email('default');
        $email->setTransport("ses");
        $email->setTo($send_to)
            ->setFrom("takumi.endoh111@gmail.com")
            ->setSubject("会員登録ありがとうございます。24時間以内に認証を完了してください")
            ->setTemplate("add_user")
            ->setViewVars(["value"=>$link])
            ->send();
    }

}
