<?php

require_once __DIR__."/Entity/Todolist.php";
require_once __DIR__."/Repository/TodolistRepository.php";
require_once __DIR__."/Service/TodoListService.php";
require_once __DIR__."/Helper/InputHelper.php";
require_once __DIR__."/View/TodoListView.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

$todoListRepository = new TodoListRepositoryImpl();
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();
