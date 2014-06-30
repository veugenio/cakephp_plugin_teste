<?php

App::uses('AppModel', 'Model');
class Cart extends AppModel {
    public $id = 12344555563;
    private $client;
    private $status;
    private $items;

    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    public function add(Product $product)
    {
        $this->items[] = $product;
        return true;
    }

    public function finish()
    {
        $this->status = 'finished';
        $event = new CakeEvent('Model.Cart.finish', $this, array(
            'order' => $this
        ));
        $this->getEventManager()->dispatch($event);
        return $this;
    }

} 