<?php
class Father{
    const mark = 99;
    function showMark(){
        echo self::mark;
    }
}
$obj = new Father;
$obj->showMark();

?>