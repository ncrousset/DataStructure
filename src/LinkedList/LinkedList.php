<?php

namespace App\LinkedList;

use App\LinkedList\ListNode;

class LinkedList
{

    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function insertAtBack($data) : void
    {
        $newNode = new ListNode($data);

        if($this->head) {
            //Finding last node
            $currentNode = $this->head;
            while($currentNode->next != null) {
                $currentNode = $currentNode->next;
            }
            //Add node to the lastNode' next
            $currentNode->next = $newNode;
        } else {
            $this->head = $newNode;
        }
    }
}
