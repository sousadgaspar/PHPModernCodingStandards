<?php

/*

    This is an axample of how we can use a chaining object

*/

class CodingDay {


    public $dayOfTheWeek;

    public $completeLastDay;

    public $missingDays;

    

    private $task;


    public function __construct(Task $task) 
    {

        $this->task = $task;

    }


    public function completeTask () 
    {

        $this->task->complete();

        return $this;

    }


    public function saveTask () {

        $this->task->save();

        return $this;

    }

}




class Task {


    private $description;

    private $isSaved = false;

    private $isCompleted = false;



    public function __construct ($description) 
    {

        $this->descrition = $description;

    }


    public function complete() 
    {

        $this->isCompleted = true;

    }


    public function save() 
    {
        
         $this->isSaved = true;

    }


}




$day = new CodingDay(new Task("finish the app bootstrap"));

var_dump($day->completeTask()->saveTask());