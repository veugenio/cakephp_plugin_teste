<?php
class Mailer {

    public function sendPromotionalMailOnFinishCart($cart)
    {
        $cart->id = 'hahah';
        return $cart;
    }

} 