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
    //count nodes in the list
    public function countNodes()
    {
        //1. create a temp node pointing to head
        $temp = new Node();
        $temp = $this->head;

        //2. create a variable to count nodes
        $i = 0;

        //3. if the temp node is not null increase 
        //   i by 1 and move to the next node, repeat
        //   the process till the temp becomes null
        while ($temp != null) {
            $i++;
            $temp = $temp->next;
        }
        return $i;
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

//Display the content of the list.
$MyList->PrintList();

//number of nodes in the list
echo "No. of nodes: " . $MyList->countNodes();
