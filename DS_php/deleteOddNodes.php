<?php
//create node strcture
class Node
{

    public $data;
    public $next;
    public $prev;
}

class Linkedlist
{

    public $head;

    public function __construct()
    {
        $this->head;
    }

    //print the list 
    public function printlist()
    {
        $temp = new Node();
        $temp = $this->head;

        if ($temp != null) {
            echo "this is the list: ";

            while ($temp != null) {
                echo $temp->data . ",";
                $temp = $temp->next;
            }
        }
    }

    //add elements
    public function addelements($newElement)
    {
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->prev = null;
        $newNode->next = null;

        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
        }
    }

    //delete odd nodes 
    public function deleteOddNodes()
    {
        //check if the head is null or not 
        if ($this->head != null) {

            //if head is not null then make next of head as new head and delete the prev head
            $temp = $this->head;
            $this->head = $this->head->next;
            $temp = null;

            if ($this->head != null) {
                // if the new head is not make prev of head as null 
                $this->head->prev = null;
                $evenNode = $this->head;
                $oddNode = $this->head->next;

                while ($evenNode != null && $oddNode != null) {
                    //3.while evenNode and oddNode are not null make next of evenNode as next of oddNode and free oddNode
                    $evenNode->next = $oddNode->next;
                    $oddNode = null;


                    //4. and make temp as evenNode and evenNode as next of evenNode
                    $temp = $evenNode;
                    $evenNode = $evenNode->next;

                    if ($evenNode != null) {
                        $evenNode->prev = $temp;
                        $oddNode = $evenNode->next;
                    }
                }
            }
        }
    }
};

$myLinkedList = new Linkedlist();
$myLinkedList->addElements(1);
$myLinkedList->addElements(2);
$myLinkedList->addElements(3);
$myLinkedList->addElements(4);
$myLinkedList->addElements(5);
$myLinkedList->addElements(6);

$myLinkedList->printlist();

$myLinkedList->deleteOddNodes();

$myLinkedList->printlist();
