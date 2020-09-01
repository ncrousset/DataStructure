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

            $node->back = $currentNode; // assign bback head to back
            $currentNode->next = $node;
        } else {
            $this->head = $node;
        }
    }

    public function pop() : void
    {
        if($this->head != null) {
            $currentNode = $this->head;

            while($currentNode->next != null) {
                $currentNode = $currentNode->next;
            }

            $currentNode->back->next = null;
            $currentNode = null;
        }
    }

    public function next() : void
    {
        if($this->head !=  null && $this->head->next != null) {
            $this->head = $this->head->next;
        }
    }

    public function prev() : void
    {
        if($this->head != null && $this->head->back != null) {
            $this->head = $this->head->back;
        }
    }

}
