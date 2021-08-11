<?php

class CreateQueue
{
    public $front;
    public $rear;

    public $queue = array();

    function __construct()
    {
        $this->rear = -1;
        $this->front = -1;
    }
    // create a function to check whether 
    // the queue is empty or not
    public function isEmpty()
    {
        if ($this->rear == $this->front) {
            echo "Queue is empty";
        } else {
            echo "Queue is not empty";
        }
    }

    //create a function to add new element 
    public function EnQueue($x)
    {
        $this->queue[++$this->rear] = $x;
        echo $x." is added into the queue. \n";
    }

     //create a function to delete front element 
     public function DeQueue(){
         if($this->rear == $this->front) {
             echo "Queue is empty";
         }else{
             $x = $this->queue[++$this->front];
             echo $x." is deleted from the queue. \n";
         }
     }

     //create a function to get front element  
     public function frontElement(){
         if($this->rear == $this->front){
             echo "Queue is empty. \n";
         }else{
             return $this->queue[$this->front+1];
         }
     }

    //create a function to get rear element
    public function rearElement()
    {
        if($this->rear == $this->front){

            echo "Queue is Empty. \n";
        
        }else{
            return $this->queue[$this->rear];
        }
    }

}

//test the code
$MyQueue = new CreateQueue();
$MyQueue->EnQueue(10);
echo "<br>";
$MyQueue->EnQueue(20);
echo "<br>";
$MyQueue->EnQueue(30);
echo "<br>";
$MyQueue->EnQueue(40);
echo "<br>";
$MyQueue->DeQueue();
$MyQueue->isEmpty();
?>