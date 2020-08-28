<?php


namespace App\LinkedList;


class ListNode
{
    public $data;

    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

}
