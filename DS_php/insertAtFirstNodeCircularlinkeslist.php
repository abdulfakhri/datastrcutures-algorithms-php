<?php
//node structure
class Node
{
    public $data;
    public $next;
    public $prev;
}

class LinkedList {
  public $head;

    public function __construct()
    {
        $this->head = null;
    }

    //Print the list
    public function printList(){
        $temp = new Node();
        $temp = $this->head;
        if($temp != null){
             echo "This is the list: ";
            while(true){
                echo $temp->data . " ";
                $temp = $temp->next;
                if($temp == $this->head)
                    break;
            }
            echo "\n";

        }else{
            echo "list is empty : ";
        }
    }

    //Add new element at the start of the list
    public function push_front($newElement){
        $newNode = new Node();
        $newNode->data=$newElement;
        $newNode->next = null;
        $newNode->prev = null;

        if($this->head == null){

            $this->head = $newNode;
            $newNode->next = $this->head;
        }else{
            $temp = new Node();
            $temp= $this->head;
            while($temp->next !== $this->head){
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
    }
};

// test the code  
$MyList = new LinkedList();

//Add three elements at the start of the list.
$MyList->push_front(10);
$MyList->push_front(20);
$MyList->push_front(30);
$MyList->PrintList();
echo "<br>";
$MyList->push_front(60);
$MyList->PrintList();