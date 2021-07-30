<?php
//node structure
class Node
{
    public $data;
    public $prev;
    public $next;
}

class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head;
    }

    //print the list elements
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;

        if ($temp != null) {
            echo "Linked List : ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "the list is empty. \n";
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

    //Search an element in the list 
    public function searchElement($searchElement)
    {
        $temp = new Node();
        $temp = $this->head;
        $found = 0;
        $i = 0;

        if ($temp != null) {
            while ($temp != null) {
                $i++;
                if ($temp->data == $searchElement) {
                    $found++;
                    break;
                }
                $temp = $temp->next;
            }
            if ($found == 1) {
                echo $searchElement . " is found at index = " . $i . "\n";
            } else {
                echo $searchElement . " not found  " . "\n";
            }
        }
    }
};

$mylist = new LinkedList();
$mylist->addElements(10);
$mylist->addElements(20);
$mylist->addElements(30);
$mylist->addElements(40);

$mylist->printList();

//search for element in the list
$mylist->searchElement(10);
$mylist->searchElement(20);
$mylist->searchElement(30);

$mylist->searchElement(0);

?>