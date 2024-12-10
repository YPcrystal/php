<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar Web");
addTodoList("Belajar Mysql");
addTodoList("Belajar Laravel");

ViewShowTodoList();