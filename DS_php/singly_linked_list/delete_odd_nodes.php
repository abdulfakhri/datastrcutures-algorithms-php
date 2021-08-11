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

    //delete the oddnodes 
    public function deleteOddNodes()
    {
        //1. if head is not null, make next of head as
        //   new head and delete previous head
        if ($this->head != null) {

            $temp = $this->head;
            $this->head = $this->head->next;
            $temp = null;
             //2. if the new head is not null create 
            //   nodes - evenNode and oddNode
            if ($this->head != null) {

                $evenNode = $this->head;
                $oddNode = $this->head->next;

                 //3. while evenNode and oddNode are not null
                //   make next of evenNode as next of oddNode 
                 //   and free oddNode 

                while($evenNode != null && $oddNode != null) {

                    //4. and make evenNode as next of evenNode
                    $evenNode = $evenNode->next;

                    //5. Update evenNode and oddNode
                    if ($evenNode != null
                    )
                    $oddNode = $evenNode->next;


                }


            }
        }
    }
};

// test the code 
$MyList = new LinkedList();

//Add five elements in the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(110);
$MyList->push_back(30);
$MyList->push_back(40);
$MyList->push_back(402);
$MyList->push_back("Fri");
$MyList->push_back(50);

//Display the content of the list.
$MyList->PrintList();

//delete odd nodes of the list
$MyList->deleteOddNodes();

echo "After deleting odd nodes.\n";
//Display the content of the list.
$MyList->PrintList();
?>