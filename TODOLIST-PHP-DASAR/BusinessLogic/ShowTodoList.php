<?php

/**
 * Menampilkan todo list
 */
function showTodoList()
{
    // model lebih fokus ke penyimpanan data
    global $todoList;
    // view 
    echo "TODOLIST" . PHP_EOL;
    // controller
    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}