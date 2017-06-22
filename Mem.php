<?php

include "PersistenceInterface.php";


class Mem Implements PersistenceInterface{
   protected $type;//type of object
    protected $prototype;
    protected $search;
    protected $buf;

    public function __construct($item){
        $this->type = gettype($item);
        $this->prototype = $item;
        $this->buf [$item->Asin]= $item;
    }

    public function Count() {
        return count($this->buf);
    }

    public function Create($item){
        $this->buf[$item->Asin] = $item;

    }

    public function Read($id) {
        $target = $this->prototype.Search($id, $this->buf);
        return $target;
    }

    public function ReadAll() {
        return $this->buf;
    }

    public function Update($id, $values) {

    }

    public function Delete($id) {
        unset($this->buf[$id]);
    }


}