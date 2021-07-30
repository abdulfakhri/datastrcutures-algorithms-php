<?php
//node structure
class Node
{
    public $data;
    public $next;
    public $prev;
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
        $newNode->prev = null;
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->prev = $temp;
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
    //Delete first node by key
    public function pop_first($key)
    {
        $temp = $this->head;
        if ($temp != null) {
            if ($temp->data == $key) {
                $nodeToDelete = $this->head;
                $this->head = $this->head->next;
                $nodeToDelete = null;
                if ($this->head != null)
                    $this->head->prev = null;
            } else {
                while ($temp->next != null) {
                    if ($temp->next->data == $key) {
                        $nodeToDelete = $temp->next;
                        $temp->next = $temp->next->next;
                        if ($temp->next != null)
                            $temp->next->prev = $temp;
                        $nodeToDelete = null;
                        break;
                    }
                    $temp = $temp->next;
                }
            }
        }
    }
};

// test the code
$MyList = new LinkedList();

//Add five elements at the end of the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(30);
$MyList->push_back(60);
$MyList->push_back(50);
$MyList->PrintList();

//Delete the node with key value of 20
$MyList->pop_first(10);
$MyList->pop_first(20);
$MyList->pop_first(30);
$MyList->PrintList();
