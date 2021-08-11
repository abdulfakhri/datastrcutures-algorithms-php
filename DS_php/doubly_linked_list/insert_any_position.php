<?php
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
        $this->head;
    }

    public function print_list()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {

                if ($temp->next != null) {
                    echo $temp->data . " , ";
                } else {
                    echo $temp->data;
                }

                $temp = $temp->next;
            }
        } else {
            echo "List is empty.";
        }
    }

    public function insert_at($newItem, $position)
    {
        $newNode = new Node();
        $newNode->data = $newItem;
        $newNode->next = null;
        $newNode->prev = null;

        if ($position < 1) {
            echo "\nposition be >= 1";
        } elseif ($position == 1) {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;

            for ($i = 1; $i < $position - 1; $i++) {
                if($temp != null) {
                    $temp = $temp->next;
                }
            }


            $newNode->next = $temp->next;
            $newNode->prev = $temp;
            $temp->next = $newNode;

            if ($newNode->next != null) {
                $newNode->next->prev = $newNode;
            } else {
                echo "\nThe previous node is null";
            }
        }
    }
};

$mylist = new LinkedList();

$first = new Node();
$first->data = 10;
$first->next = null;
$first->prev = null;

$mylist->head = $first;

$second = new Node();
$second->data = 104;
$second->next = null;
$second->prev = $first;
$first->next = $second;

$third = new Node();
$third->data = 113;
$third->next = null;
$third->prev = $second;
$second->next = $third;

$mylist->insert_at(120.023, 4);

$mylist->print_list();
