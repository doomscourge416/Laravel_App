<?php
namespace App\Services;

class ExampleService {

    public function getAllUsers() {
        return User::all(); 
    }

    public function getMessage():string {
        return "Hello, World from Example Service!";
    }

}

?>
