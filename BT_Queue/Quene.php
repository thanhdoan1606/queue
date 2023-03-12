<?php
include_once "Node.php";
class Quene
{
    public $font = null;
    public $back = null;

    public function isEmpty()
    {
        return is_null($this->font);
    }
    public function enquene($value)
    {
        $oldback = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if($this->isEmpty()){
            $this->font = $this->back;        
        } else {
            $oldback->next = $this->back;
        }
    }

    public function dequene()
    {
        if($this->isEmpty()){
            return null;
        }

        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}

?>