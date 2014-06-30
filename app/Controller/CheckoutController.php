<?php
App::uses('AppController', 'Controller');

class CheckoutController extends AppController {

    public $components = array('Cart');

    public function finish()
    {
        $cart = $this->Cart->finish();
        $this->set('id', $cart->id);
    }
} 