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

    //add new node at the fron of the list
    public function push_front($newElement)
    {
        //1. allocate a new node
        $newNode = new Node();

        //2. assign data element
        $newNode->data = $newElement;

        //3. make next node of new node as head
        $newNode->next = $this->head;

        //4. make new node as head
        $this->head = $newNode;
    }

};


// test the code 
$MyList = new LinkedList();

//Add three elements at the start of the list.
$MyList->push_front(10);
$MyList->push_front(20);
$MyList->push_front(30);
$MyList->push_front(50);
$MyList->push_front(3.01);
$MyList->push_front("First Node");
$MyList->PrintList();

?>
