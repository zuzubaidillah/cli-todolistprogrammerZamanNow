<?php
/*
* Menampilkan data
* */
function removeTodoList(int $number)
{
    global $todolist;
    if ($number > sizeof($todolist) || $number == 0) {
        return false;
    }
    echo "<pre>";
    var_dump($todolist);

    for ($i = $number; $i < sizeof($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];

        var_dump($todolist);
        die();
    }
    unset($todolist[sizeof($todolist)]);
    return true;
}