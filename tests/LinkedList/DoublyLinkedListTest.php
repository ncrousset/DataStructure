<?php

use App\LinkedList\DoublyLinkedList;
use PHPUnit\Framework\TestCase;

class DoublyLinkedListTest extends TestCase
{
    public function testPush() {
        $doublyLinkedList = new DoublyLinkedList();

        $doublyLinkedList->push(10);
        $doublyLinkedList->push(3);
        $doublyLinkedList->push(9);

        $head = $doublyLinkedList->head;

        $this->assertEquals(10, $head->data);
        $this->assertNull($head->data->back);
        $head = $head->next;
        $this->assertEquals(3, $head->data);
        $this->assertEquals(10, $head->back->data);

    }

    public function testPop()
    {
        $doublyLinkedList = new DoublyLinkedList();

        $doublyLinkedList->push(10);
        $doublyLinkedList->push(3);
        $doublyLinkedList->push(9);

        $doublyLinkedList->pop();

        $head = $doublyLinkedList->head;


        $this->assertEquals(10, $head->data);
        $head = $head->next;
        $this->assertEquals(3, $head->data);
        $head = $head->next;
        $this->assertNull($head);

    }

    public function testNext()
    {
        $doublyLinkedList = new DoublyLinkedList();

        $doublyLinkedList->push(10);
        $doublyLinkedList->push(3);
        $doublyLinkedList->push(9);

        $this->assertEquals(10, $doublyLinkedList->head->data);
        $doublyLinkedList->next();
        $this->assertEquals(3, $doublyLinkedList->head->data);
        $doublyLinkedList->next();
        $this->assertEquals(9, $doublyLinkedList->head->data);
        $doublyLinkedList->next();
        $this->assertEquals(9, $doublyLinkedList->head->data);
    }
}
