<?php

namespace App\LinkedList;

use App\LinkedList\ListNode;

class LinkedList
{

    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function findData($data)
    {
        $node = null;
        $currentNode = $this->head;

        while ($currentNode->data != $data && $currentNode != null) {
            $currentNode = $currentNode->next;
        }

        return $currentNode;
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

    public function insertAtFront($data) : void
    {
        $newNode = new ListNode($data);

        if($this->head) {
            // head assigning to the newNode->next
            $newNode->next = $this->head;
            // New head is beginning from newNode
            $this->head = $newNode;
        } else {
            $this->head = $newNode;
        }
    }


}
