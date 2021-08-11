
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

    public function push_at($newElement, $position)
    {

        //1. allocate node to new element
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null;

        //2. check if the position is > 0
        if ($position < 1) {
            echo "\nposition must be >=1 ";
        } else if ($position == 1) {

            //3. if the position is 1, make next of the
            //   new node as head and new node as head

            $newNode->next = $this->head;
            $this->head = $newNode;
            echo "\n";
        } else {

            //4. Else, make a temp node and traverse to the 
            //   node previous to the position

            $temp = new Node();
            $temp = $this->head;

            for ($i = 1; $i < $position - 1; $i++) {

                if ($temp != null) {
                    $temp = $temp->next;
                    echo "\n";
                }
            }

            //5. If the previous node is not null, make 
            //   newNode next as temp next and temp next 
            //   as newNode.

            if ($temp != null) {
                $newNode->next = $temp->next;
                $temp->next = $newNode;
                echo "\n";
            }else{
                //6. When the previous node is null
                echo "\nThe previous node is null.";
            }
        }
    }
};

// test the code 
$MyList = new LinkedList();

//Add three elements in the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(30);
$MyList->PrintList();

//Insert an element at position 2
$MyList->push_at(100, 2);
$MyList->PrintList();


//Insert an element at position 1
$MyList->push_at(200, 1);
$MyList->PrintList();

//Insert an element at position 1
$MyList->push_at(2400, 4);
$MyList->PrintList();
?>