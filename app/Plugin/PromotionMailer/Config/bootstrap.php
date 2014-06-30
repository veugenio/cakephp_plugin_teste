<?php
App::uses('CakeEventManager', 'Event');
App::uses('Mailer', 'PromotionMailer.Model');
 CakeEventManager::instance()->attach(
    function($cart){
        $mailer = new Mailer();
        return $mailer->sendPromotionalMailOnFinishCart($cart);
        // array(Mailer, 'sendPromotionalMailOnFinishCart')
    },
    'Model.Cart.finish',
    array('passParams' => true)
);