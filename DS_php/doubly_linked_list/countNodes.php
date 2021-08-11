<?php
//create node structure =  data structure
class Node
{
    public $data;
    public $next;
    public $prev;
}

//created the linkedlist 

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head;
    }
    //print the linkedlist
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "\nThis is the list: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "\nThis is empty";
        }
    }
    //add elements to the list
    public function addElements($newElement)
    {
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null;
        $newNode->prev = null;
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

    //count list nodes 
    public function countNodes()
    {
        $temp = new Node();
        $temp = $this->head;
        $i = 0;

        while ($temp != null) {
            $i++;
            $temp = $temp->next;
        }
        return $i;
    }
};

$mylist = new LinkedList();
$mylist->addElements(1);
$mylist->addElements(2);
$mylist->addElements(3);
$mylist->addElements(4);

$mylist->printList();



echo "Number of elements: ".$mylist->countNodes();
