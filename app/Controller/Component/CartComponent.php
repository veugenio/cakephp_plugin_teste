<?php
App::uses('Component'   , 'Controller');
App::uses('Cart'        , 'Model');

class CartComponent extends Component {

    public function getCart()
    {
        return ClassRegistry::init('Cart');
    }

    public function finish()
    {
        return $this->getCart()->finish();
    }


} 