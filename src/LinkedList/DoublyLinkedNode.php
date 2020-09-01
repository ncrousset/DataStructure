<?php


namespace App\LinkedList;


class DoublyLinkedNode
{
    public $data;

    public $next;

    public $back;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->back = null;
    }

}
