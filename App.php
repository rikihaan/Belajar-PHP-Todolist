<?php

require_once __DIR__."/Entity/Todolist.php";
require_once __DIR__."/Repository/TodolistRepository.php";
require_once __DIR__."/Service/TodoListService.php";
require_once __DIR__."/Helper/InputHelper.php";
require_once __DIR__."/View/TodoListView.php";
require_once __DIR__."/Config/Database.php";

use Config\Database;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

$connection = Database::getConnection();
$todoListRepository = new TodoListRepositoryImpl($connection);
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();
