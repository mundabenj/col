<?php
class layouts {
    public function heading() {
        print "<h1>Welcome to BBIT E</h1>";
    }
    public function footer() {
        print "<footer>Copyrights &copy; " . date("Y") . " BBIT E. All rights reserved.</footer>";
    }   
}