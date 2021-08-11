<?php
// node structure
class Node
{

    public $data;
    public $next;
    public $prev;
}

//creating the linked list 
class LinkedList
{
    public $head;
    //constructor to create an empty LinkedList
    public function __construct()
    {

        $this->head = null;
    }
};

//Create an empty LinkedList
$myLinkedList = new LinkedList();

//Add the first node.
$first = new Node();
$first->data = 10;
$first->next = null;
$first->next = null;
//linking with head node
$myLinkedList->head = $first;

//Add second node.
$second = new Node();
$second->data = 20;
$second->next = null;
$second->prev = $first;
$first->next = $second;

//Add third node.
$third = new Node();
$third->data = 30;
$third->next = null;
//linking with second node.
$third->prev = $second;
$second->next = $third;

echo $third->data;


