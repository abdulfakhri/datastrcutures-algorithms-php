<?php
//node structure
class Node
{
    public $data;
    public $next;
    public $prev;
}

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head;
    }

    //Add new element at the start of the list
    public function push_front($newElement)
    {
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null;
        $newNode->prev = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $this->head->prev = $newNode;
            $newNode->next = $this->head;
            $this->head = $newNode;
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

$first =new Node();
$first->data = 'hi';
$first->prev = null;
$first->next = null;

$MyList->head = $first;

$second =new Node();
$second->data = 'second';
$second->prev=$first;
$first->next=$second;

//Add three elements at the start of the list.
$MyList->push_front(30);
$MyList->push_front(10);
$MyList->push_front(20);
$MyList->push_front(1220);
$MyList->push_front("Fri");
$MyList->push_front(true);
$arr=array("12","11");
$MyList->push_front(20.23);
$MyList->push_front($arr[1]);

$MyList->PrintList();
