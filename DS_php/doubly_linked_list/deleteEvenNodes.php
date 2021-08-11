<?php
//node structure 
class Node {

    public $data;
    public $next;
    public $prev;

}

//creating the linked list of nodes
class LinkedList
{
    public $head;

    public function __construct()
    {
        $this->head;
    }

    //print the linked list
    public function printlist()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp !=null) {
            echo "this is the list: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "list is empty";
        }
    }

    //add elements to the LinkedList
    public function addElement($newElement)
    {
        $newNode = new Node();
        $newNode->data=$newElement;
        $newNode->next = null;
        $newNode->prev = null;

        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp= $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
        }
    }

    //delete even nodes of the list
    public function deleteEvenNodes()
    {
        if ($this->head != null) {
            $oddNode = $this->head;
            $evenNode = $this->head->next;
            while ($oddNode != null && $evenNode != null) {
                $oddNode->next = $evenNode->next;
                $evenNode = null;

                $temp = $oddNode;
                $oddNode = $oddNode->next;
                if ($oddNode != null) {
                    $oddNode->prev = $temp;
                    $evenNode = $oddNode->next;
                }
            }
        }
    } 
};


$myList = new LinkedList();

$myList->addElement(3);
$myList->addElement(4);
$myList->addElement("Wed");
$myList->addElement(5);
$myList->addElement(7);
$myList->addElement(8);

//Print the list
$myList->printList();

$myList->deleteEvenNodes();
echo "<br>";
$myList->printList();