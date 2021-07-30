<?php
// node structure= data structure
class Node
{
    public $data;
    public $next;
    public $prev;
}

//algorithm , linkedlist operation 
class LinkedList
{

    public $head;

    //constrcutor to create an empty linked_list
    public function __construct()
    {
        $this->head = null;
    }

    //algorithm for display the content of the linked_list
    public function display()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "The linked_list data:";

            while ($temp != null) {
                if ($temp->data != null) {
                    echo $temp->data . ",";
                }else{
                    echo $temp->data . " ";
                }

                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty. \n";
        }
    }
};

//test the code 

$myLinkedList = new LinkedList();

//Add first Node.
$first = new Node();
$first->data = 10;
$first->prev = null;
$first->next = null;

//linking to the head 
$myLinkedList->head = $first;

//Add second Node.
$second = new Node();
$second->data = 20;
$second->next = null;

//linking to the first node.
$second->prev = $first;
$first->next = $second;

//Add third Node.
$third = new Node();
$third->data = 30;
$third->prev = $second;
$third->next = null;

$second->next = $third;

//print the content of the list 
$myLinkedList->display();
