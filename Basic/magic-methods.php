<?php

 class User{
    private $name;
    private $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;

        echo "<br>" . __CLASS__ . " " . $this->name ." Start to instantiate <br>" ;
    }

    public function sayHello(){
        return "<br>" . $this->name . " Say Hi! <br>";
    }

    public function __destruct(){
        echo "<br>" . __CLASS__ . " " . $this->name . " End instantiate <br>";
    }

    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
    }

    
 }

 $user = new User('Sakib', 'dynamicteam2@proton.me');

 echo $user->sayHello();

 $user->__set('email', 'nazmunsakib81@gmail.com');
 echo $user->__get('email');

