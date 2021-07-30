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

    //constructor to create an empty LinkedList
    public function __construct()
    {
        $this->head = null;
    }
    //display the content of the list
    public function PrintList()
    {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null){
            echo "This is the list : ";
            while($temp != null){
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        }else{
            echo "This list is empty : ";
        }
    }

};

$MyList = new LinkedList();

//create first node 
$firstNode = new Node();
$firstNode->data =1;
$firstNode->next = null;

//add first node to the linked list
$MyList->head = $firstNode;

//create second node
$secondNode = new Node();
$secondNode->data = 2;

//link first node to the second node
$firstNode->next = $secondNode;

//create third node
$thirdNode = new Node();
$thirdNode->data = 3;
$thirdNode->next =null;

//linking second node to third node
$secondNode->next = $thirdNode;

$MyList->PrintList();

?>
