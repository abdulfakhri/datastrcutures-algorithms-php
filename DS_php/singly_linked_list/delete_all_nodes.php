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
    //delete all nodes of the list
    public function deleteAllNodes()
    {
        //1. create a temp node
        $temp = new Node();

        //2. if the head is not null make temp as head and 
  //   move head to head next, then delete the temp,
  //   continue the process till head becomes null
            while ($this->head != null) {
                $this->head = $temp;
                $this->head = $this->head->next;
                $temp = null;
            }

        echo "All nodes are deleted successfully.\n";  
      
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

//delete all nodes of the list
$MyList->deleteAllNodes();

//Display the content of the list.
$MyList->PrintList();

?>