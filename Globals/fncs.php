<?php
class fncs{
    // method to set messages
    public function setMsg($name, $value, $class){
        if(is_array($value)){
            $_SESSION[$name] = $value;
        } else {
            $_SESSION[$name] = "<div class='alert alert-$class' role='alert'>$value</div>";
        }
    }

    // function to get  and clear messages from the session
    public function getMsg($name){
        if(isset($_SESSION[$name])){
            $msg = $_SESSION[$name];
            unset($_SESSION[$name]);
            return $msg;
        }
        return null;
    }
}