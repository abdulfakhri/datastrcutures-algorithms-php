<?php
//create node structure = data structure
class Node {

    public  $data;
    public  $prev;
    public  $next;
}
// the algorithm
class LinkedList
{

    public $head;

    public function __construct()
    {
        $this->head;
    }

    //display link contents
    public function display()
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

    //method to add elements at the end of the list
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
            if ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
        }
    }

    //Delete the first node
    public function delete_first()
    {
        //Check the head if its null or not 
        if ($this->head != null) {

            //1.If head is not null create a temp node pointing to the head 
            $temp = $this->head;

            //2.Move the head node to the next of the head list
            $this->head = $this->head->next;

            //3.Delete the temp node 
            $temp = null;

            //4.If the head is not null, then make the prev of the new head as null
            if ($this->head != null) {
                $this->head->prev = null;
            }
        }
    }
};

//Write test for the code 
$first =  new Node();
$first->data =1;
$first->prev = null;
$first->next = null;

//Create instance of the linked_list
$myLinkedList = new LinkedList();
$myLinkedList->head=$first;



$myLinkedList->addElements(10);
$myLinkedList->addElements(11);
$myLinkedList->addElements(13);
$myLinkedList->addElements(12);
$myLinkedList->addElements(120);

//To print this list 
$myLinkedList->display();

echo "<br>";

$myLinkedList->delete_first();
$myLinkedList->display();
