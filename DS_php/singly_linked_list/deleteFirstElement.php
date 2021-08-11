<?php
//node structure
class Node
{
    public $data;
    public $next;
}


class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }
    //Add new element at the end of the list
    public function push_back($newElement)
    {
        $newNode = new Node();
        $newNode->data = $newElement;
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
        }
    }

    public function pop_front()
    {
        if ($this->head != null) {

            //1. if head is not null, create a
            //   temp node pointing to head
            $temp = $this->head;

            //2. move head to next of head
            $this->head = $this->head->next;

            //3. delete temp node
            $temp = null;
        }
    }

    //display the content of the list
    public function PrintList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
};

// test the code 
$MyList = new LinkedList();

//Add four elements in the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(30);
$MyList->push_back(40);
$MyList->PrintList();

//Delete the first node
$MyList->pop_front();
$MyList->PrintList();
