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

    public function push_back($newElement)
    {
        //1. allocate node
        $newNode = new Node();

        //2. assign data element
        $newNode->data = $newElement;

        //3. assign null to the next of new node
        $newNode->next = null;

        //4. Check the Linked List is empty or not,
        //   if empty make the new node as head 

        if ($this->head == null) {
            $this->head = $newNode;
        } else {

            //5. Else, traverse to the last node
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }

            //6. Change the next of last node to new node
            $temp->next = $newNode;
        }
    }
};

// test the code 
$MyList = new LinkedList();

//Add three elements at the end of the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(30);
$MyList->push_back(30.34);
$MyList->push_back(1.2);
$MyList->PrintList();