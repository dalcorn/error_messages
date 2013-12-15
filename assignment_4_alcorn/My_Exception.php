<?php
 
class My_Exception extends Exception {


    public function My_Exception($lang, $line) {      
        if($lang == "English"){
        $this->$line = $line;
        $errors = file('english.txt');
        echo $errors[$line-1];
        }else if($lang =="French"){
          $this->$line = $line;
        $errors = file('french.txt');
        echo $errors[$line-1];  
        }else if($lang == "German"){
            $this->$line = $line;
        $errors = file('german.txt');
        echo $errors[$line-1];
        }  
    }
  }  

    