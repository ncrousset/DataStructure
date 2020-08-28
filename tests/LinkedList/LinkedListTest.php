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
}
