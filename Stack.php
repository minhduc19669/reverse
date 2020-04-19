<?php

namespace Reverse;
class Stack
{
    public $stack = [];
    public $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function push($value)
    {
        if ($this->isFull()){
            return 'array full';
        }else{
            array_push($this->stack,$value);
        }
        return $this->stack;
    }
    public function pop(){
        $newArray=[];
        if ($this->isEmpty()){
            return 'Nothing to take';
        }else{
            for ($i=0;$i<$this->limit;$i++){
                array_push($newArray,array_shift($this->stack));
                array_reverse($newArray,true);
                }
            }
        return $this->stack= array_reverse($newArray,true);
    }
    public function top(){
        if (!$this->isEmpty()){
            array_pop($this->stack);
        }else{
            return "nothing to say";
        }
        return $this->stack;
    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function isFull(){
        if (count($this->stack)==$this->limit){
            return true;
        }else{
            return false;
        }
    }
    public function getStack(){
        return implode(',',$this->stack);
    }
}