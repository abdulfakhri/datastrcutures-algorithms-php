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
        $this->head = null;
    }

    //Add new element at the end of the list
    public function push_back($newElement)
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

    //Delete all nodes by key
    public function pop_all($key)
    {
        $nodeToDelete = new Node();

        //1. if the head is not null and value stored at head
        //   is equal to key, keep on adjusting the head as
        //   head next, delete previous head and adjust links
        //   until new head becomes null or not equal to key
        while ($this->head != null && $this->head->data == $key) {
            $nodeToDelete = $this->head;
            $this->head = $this->head->next;
            $nodeToDelete = null;
            if ($this->head != null)
                $this->head->prev = null;
        }

        //2. create a temp node to traverse through the
        //   list and delete nodes with value equal to 
        //   key and adjust links accordingly
        $temp = $this->head;
        if ($temp != null) {
            while ($temp->next != null) {
                if ($temp->next->data == $key) {
                    $nodeToDelete = $temp->next;
                    $temp->next = $temp->next->next;
                    if ($temp->next != null)
                        $temp->next->prev = $temp;
                    $nodeToDelete = null;
                } else {
                    $temp = $temp->next;
                }
            }
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

$myList = new LinkedList();
$myList->push_back(1);
$myList->push_back(2);
$myList->push_back(3);
$myList->push_back(2);
$myList->push_back(4);
$myList->push_back(5);
$myList->push_back(2);
$myList->push_back(45);

$myList->PrintList();

////Delete all occurrences of 2
echo  "<br>";

$myList->pop_all(2);
$myList->pop_all(4);
$myList->PrintList();

