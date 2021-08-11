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

    //Add new element at the end of the list
    public function push_back($newElement)
    {
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null;
        if ($this->head == null) {
            //for first element in the list
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

    //Delete last node of the list
    public function pop_back()
    {
        if ($this->head != null) {

            //1. if head in not null and next of head
            //   is null, release the head
            if ($this->head->next == null) {
                $this->head = null;
            } else {

                //2. Else, traverse to the second last 
                //   element of the list
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next->next != null)
                    $temp = $temp->next;

                //3. Change the next of the second 
                //   last node to null and delete the
                //   last node
                $lastNode = $temp->next;
                $temp->next = null;
                $lastNode = null;
            }
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

//Delete the last node
$MyList->pop_back();
$MyList->PrintList();
?>