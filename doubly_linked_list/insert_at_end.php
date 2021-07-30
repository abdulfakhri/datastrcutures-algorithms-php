<?php
//create node strcuture
class Node {
    public $data;
    public $next;
    public $prev;
}

class LinkedList {

    public $head;

    public function __construct() {
        $this->head;
    }

    public function display() {
        $temp = new Node();
        $temp= $this->head;

        if($temp !=null){
            echo "This is the List:\n";
            while($temp != null){
               echo $temp->data ." , ";
               $temp = $temp->next;
            }
            echo "\n";
        }else{
            echo "The list is empty.\n";
        }
    }

    //push elements at the end of the list
    public function push_back($newElement) {

        $newNode= new Node();
        $newNode->data = $newElement;
        $newNode->next=null;
        $newNode->prev=null;

        if($this->head == null){
            $this->head = $newNode;
        }else{
            $temp = new Node();
            $temp = $this->head;

            while($temp->next != null){
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
        }
    }
};

$mylist = new LinkedList();

$firstNode = new Node();
$firstNode->data = 'sat';
$firstNode->prev = null;
$firstNode->next = null;

$mylist->head=$firstNode;

$secondNode = new Node();
$secondNode->data = "sun";
$secondNode->next= null;
$secondNode->prev=$firstNode;
$firstNode->next=$secondNode;

$mylist->push_back(100);
$mylist->push_back(12);
$mylist->push_back(162);
$mylist->push_back(1002);

$mylist->display();

