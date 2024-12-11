<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar Mysql");
addTodoList("Belajar Laravel");

var_dump($todoList);

// if (count($todoList) == 3) {
//     echo 'OK. Program bisa jalan';
// }
//  untuk testing secara otomatis bukan secara manual