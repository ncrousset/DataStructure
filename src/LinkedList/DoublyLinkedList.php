<?php


namespace App\LinkedList;

use App\LinkedList\DoublyLinkedNode;

class DoublyLinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function push($data) : void
    {
        $node = new DoublyLinkedNode($data);

        if($this->head != null) {
            $currentNode = $this->head;

            while($currentNode->next != null) {
                $currentNode = $currentNode->next;
            }

            $node->back = $currentNode;
            $currentNode->next = $node;
        } else {
            $this->head = $node;
        }
    }
}