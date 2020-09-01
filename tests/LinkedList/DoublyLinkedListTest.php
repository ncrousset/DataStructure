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
}
