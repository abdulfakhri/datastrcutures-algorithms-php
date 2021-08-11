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


    public function pop_last($key)
    {

        //1. if head is not null create three nodes
        //   lastNode - to track last node with value
        //   equal to key, previousToLast - to track 
        //   node previous to lastNode, temp - to
        //   traverse through the list
        if ($this->head != null) {
            $temp = new Node();
            $previousToLast = null;
            $lastNode = null;

            //2. traverse through the list and keep on updating
            //   lastNode and previousToLast whenever find a node
            //   with value equal to the specified key
            if ($this->head->data == $key)
                $lastNode = $this->head;

            $temp = $this->head;
            while ($temp->next != null) {
                if ($temp->next->data == $key) {
                    $previousToLast = $temp;
                    $lastNode = $temp->next;
                }
                $temp = $temp->next;
            }

            //3. Delete the lastNode and update all links
            if ($lastNode != null) {
                if ($lastNode == $this->head) {
                    $this->head = $this->head->next;
                    $lastNode = null;
                } else {
                    $previousToLast->next = $lastNode->next;
                    if ($previousToLast->next != null)
                        $previousToLast->next->prev = $previousToLast;
                    $lastNode = null;
                }
            }
        }
    } 
};

$myLink = new LinkedList();

$myLink->push_back(1);
$myLink->push_back(2);
$myLink->push_back(3);
$myLink->push_back(2);
$myLink->push_back(4);

$myLink->PrintList();
echo "<br>";
$myLink->pop_last(2);
$myLink->PrintList();