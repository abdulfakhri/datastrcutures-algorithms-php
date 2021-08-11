<?php
//create the node structure = data structure
class Node
{
    public $data;
    public $next;
    public $prev;
}

//create the algorithm or linked list

class Algorithm
{
    public $head;

    public function __construct()
    {
        $this->head;
    }

    //Add element in the print
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


    //To print the list 
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;

        if ($temp != null) {

            echo "This is the list: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }

    //Delete element in the given position
    public function deleteElement($position)
    {
        if ($position < 1) {
            echo "\nposition should be >= 1.";
        } else if ($position == 1 && $this->head != null) {
            $nodeToDelete = $this->head;
            $this->head = $this->head->next;
            $nodeToDelete = null;
            if ($this->head != null)
                $this->head->prev = null;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null && $temp->next != null) {
                $nodeToDelete = $temp->next;
                $temp->next = $temp->next->next;
                if ($temp->next->next != null)
                    $temp->next->next->prev = $temp->next;
                $nodeToDelete = null;
            } else {
                echo "\nThe node is already null.";
            }
        }
    }
};
//writing unit test cases for the code
$myList = new Algorithm();

$myList->addElements(1);
$myList->addElements(2);
$myList->addElements(3);
$myList->addElements(4);
$myList->addElements(5);
$myList->addElements("Mon");
$myList->addElements(4.3);
$myList->addElements(true);


$myList->printList();

//Delete an element in a given position

$myList->deleteElement(2);
$myList->deleteElement(4);
$myList->deleteElement(5);
$myList->printList();
