<?php

class HtmlEntry extends AbstractEntry{

    public function getChildren(){
        return $this->_children;
    }
    public function add($file){
        $this->_children[] = $file;
    }
    public function toHtml(){

    }
}
