<?php

use App\LinkedList\LinkedList;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    public function testInsertAtBack()
    {
        $linkedList = new LinkedList();

        $linkedList->insertAtBack(1);
        $linkedList->insertAtBack(2);
        $linkedList->insertAtBack(3);

        $this->assertEquals(1, $linkedList->head->data);
        $secondNode = $linkedList->head->next;
        $this->assertEquals(2, $secondNode->data);
        $thirdNode = $secondNode->next;
        $this->assertEquals(3, $thirdNode->data);

        $this->assertNull($thirdNode->next);
    }

    public function testInsertAtFront()
    {
        $linkedList = new LinkedList();

        $linkedList->insertAtFront(1);
        $linkedList->insertAtFront(2);
        $linkedList->insertAtFront(3);

        $this->assertEquals(3, $linkedList->head->data);
        $secondNode = $linkedList->head->next;
        $this->assertEquals(2, $secondNode->data);
        $thirdNode = $secondNode->next;
        $this->assertEquals(1, $thirdNode->data);

        $this->assertNull($thirdNode->next);
    }

    public function testFindData()
    {
        $linkedList = new LinkedList();
        $this->assertNull($linkedList->findData(1));
        $linkedList->insertAtFront(3);
        $linkedList->insertAtFront(4);
        $linkedList->insertAtFront(5);
        $linkedList->insertAtFront(9);

        $this->assertNull($linkedList->findData(10));
    }

    public function testShift()
    {
        $linkedList = new LinkedList();
        $linkedList->insertAtBack(1);
        $linkedList->insertAtBack(2);

        $linkedList->insertAtBack(3);
        $linkedList->insertAtBack(4);

        $linkedList->shift();
        $this->assertEquals(2, $linkedList->head->data);
        $linkedList->shift();
        $this->assertEquals(3, $linkedList->head->data);

        $linkedList2 = new LinkedList();
        $linkedList2->shift();

        $this->assertNull($linkedList2->head);
    }
}
