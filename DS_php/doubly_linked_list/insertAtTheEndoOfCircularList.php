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

    //display the content of the list
    public function PrintList()
    {
        $temp = new Node();
        $temp = $this->head;

        if ($temp != null) {
            echo "The list contains: ";
            while (true) {
                echo $temp->data . " ";
                $temp = $temp->next;
                if ($temp == $this->head)
                    break;
            }
            echo "\n";
        } else {
            echo "list is empty";
        }
    }

    //Add new element at the end of the list
    public function push_back($newElement)
    {
        //1. allocate node
        $newNode = new Node();

        //2. assign data element
        $newNode->data = $newElement;

        //3. assign null to the next and prev
        //   of the new node
        $newNode->next = null;
        $newNode->prev = null;
        //4. Check the list is empty or not,
        //   if empty make the new node as head
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
            $newNode->prev = $this->head;
        } else {
            //5. Else, traverse to the last node
            $temp = new Node();
            $temp = $this->head;

            while ($temp->next !== $this->head) {
                $temp = $temp->next;
            }
             //6. Adjust the links
             $temp->next = $newNode;
             $newNode->next = $this->head;
             $newNode->prev =$temp;
             $this->head->prev = $newNode;

        }
    }
};
// test the code 
$MyList = new LinkedList();

//Add three elements at the end of the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(30);
$MyList->push_back(100.34);
$MyList->push_back("Fri");
$MyList->PrintList();
?>