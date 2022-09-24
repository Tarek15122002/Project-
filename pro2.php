<?php
abstract class Person{
    abstract public function greet();
}
class English extends Person{
    public function greet (){
        return "hello";
    }
}
class Germen extends Person{
    public function greet (){
        return "hiiii";
    }
}
class French extends Person{
    public function greet (){
        return "Bonjour";
    }
}