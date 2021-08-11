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

    public function deleteEvenNodes(){
        //1. if head is not null create nodes -
        //   evenNode and oddNode
        if ($this->head != null) {

            $oddNode = $this->head;
            $evenNode = $this->head->next;

            //2. while oddNode and evenNode are not null
            //   make next of oddNode as next of evenNode   
            //   and free evenNode
            while ($oddNode != null && $evenNode != null) {
            }
            $oddNode->next = $evenNode->next;
            $evenNode = null;

            //3. and make oddNode as next of oddNode
            $oddNode = $oddNode->next;

            //4. Update oddNode and evenNode
            if($oddNode != null) {
                $evenNode = $oddNode->next;
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

// test the code 
$MyList = new LinkedList();

//Add five elements in the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(30);
$MyList->push_back(40);
$MyList->push_back(50);

//Display the content of the list.
$MyList->PrintList();

//delete even nodes of the list
$MyList->deleteEvenNodes();

echo "After deleting even nodes.\n";
//Display the content of the list.
$MyList->PrintList();

?>