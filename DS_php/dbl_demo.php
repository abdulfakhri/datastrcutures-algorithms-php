<?php
//create the list of days of the week

//create node structure = data structure = list
class Node
{
    public $data;
    public $prev;
    public $next;
}

class NodeList
{
    public $head;

    //constructor of the list
    public function __construct()
    {
        $this->head = null;
    }

    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;

        if ($temp != null) {
            echo "Days of Week: ";

            while ($temp != null) {
                if ($temp->data != null) {
                    echo $temp->data . " , ";
                } else {
                    echo $temp->data . " ";
                }

                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "something is wrong";
        }
    }
};

//Add the first Node
$first = new Node();
$first->data = "Sat";
$first->next = null;
$first->prev = null;

$mylinked = new Nodelist();
$mylinked->head = $first;

//Add to the linkedlist
$second = new Node();
$second->data = "Sun";
//linking first and second node
$second->prev = $first;
$first->next = $second;

//Add third node to the linkedlist
$third = new Node();
$third->data="Mon";
$third->prev = $second;
$second->next = $third;


$forth = new Node();
$forth->data="Tuse";
$forth->prev = $third;
$third->next = $forth;


$fifth = new Node();
$fifth->data="Wed";
$fifth->prev = $forth;
$forth->next = $fifth;

$sixth = new Node();
$sixth->data="Thu";
$sixth->prev =$fifth;
$fifth->next = $sixth;

$seventh = new Node();
$seventh->data = "Fri";
$seventh->prev =$sixth;
$sixth->next = $seventh;
$seventh->next = null;

$mylinked->printList();
