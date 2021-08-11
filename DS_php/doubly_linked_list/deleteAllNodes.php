<?php
//create the node structure = data strcuture
class Node
{
    public $data;
    public $prev;
    public $next;
}

//creating the linked list of nodes
class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head;
    }

    //prin the list of nodes
    public function printlist(){
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "the list is: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp= $temp->next;
            }
            echo "\n";
        } else {
            echo "the list is empty";
        }
    }

    //add elements at the end of the list
    public function addElements($newElement){
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next;
        $newNode->prev;

        if($this->head == null) {
            $this->head = $newNode;
        }else{
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev=$temp;
        }

    }

    //delete all the nodes in the list
    public function deleteAllNodes() {
        $temp = new Node();
        while ($this->head != null) {
            $temp = $this->head;
            $this->head = $this->head->next;
            $temp = null;
        }
       echo "All nodes deleted";
    }

};
//print the list of nodes
$myLinkedList = new LinkedList();

//add elements in the LinkedList
$myLinkedList->addElements(1);

$myLinkedList->addElements(2);

$myLinkedList->addElements(3);

$myLinkedList->addElements("Alex");

$myLinkedList->addElements(10);

$myLinkedList->printlist();

$myLinkedList->deleteAllNodes();

$myLinkedList->printlist();




