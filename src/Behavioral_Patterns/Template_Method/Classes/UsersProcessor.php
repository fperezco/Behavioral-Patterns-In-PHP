<?php

namespace App\Behavioral_Patterns\Template_Method\Classes;

abstract class UsersProcessor
{
    protected $users = array();

    /**
     * Template method with different steps and hooks
     * @return void
     */
    public function processUsers() : void{
        $this->users = $this->retrieveUserLists();
        $this->saveUsersIntoSystem();
        $this->hook1();
        $this->returnResultsReport();
        $this->saveActionToLog();
    }

    abstract function retrieveUserLists(): array;

    public function saveUsersIntoSystem()
    {
        foreach($this->users as $user){
            echo "saving user " . $user;
        }
    }

    abstract function hook1(): void;

    abstract function returnResultsReport(): void;

    public function saveActionToLog()
    {
        //save all users in to a log file for example
    }
}