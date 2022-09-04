<?php
require_once __DIR__."/../Entity/TodoList.php";
require_once __DIR__."/../Repository/TodoListRepository.php";
require_once __DIR__."/../Service/TodoListService.php";
require_once __DIR__."/../Config/Database.php";

// use todolist Service ImplsD

use Config\Database;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use Entity\Todolist;

function testShowTodoList(){

    // memanggil service todoList
    // todolist Service memiliki contructor Parameternya bertype TodolistRepositosry, untuk itu kita buat repositry nya
    $connection = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    // $todoListService->addTodoList("BELAJAR PHP OOP");
    // $todoListService->addTodoList("BELAJAR GOLANG");
    // $todoListService->addTodoList("BELAJAR JAVASCRIPT");
    $todoListService->showTodoList();
    
}

function testAddTodoList(){
    $connection = Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("BELAJAR PHP OOP");
    $todoListService->addTodoList("BELAJAR GOLANG");
    $todoListService->addTodoList("BELAJAR JAVASCRIPT");
    // $todoListService->showTodoList();
    
}

function testRemoveTodoList(){
    $connection=Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    echo $todoListService->removeTodoList(5).PHP_EOL;
    echo $todoListService->removeTodoList(4).PHP_EOL;
    echo $todoListService->removeTodoList(3).PHP_EOL;
    echo $todoListService->removeTodoList(3).PHP_EOL;
    echo $todoListService->removeTodoList(1).PHP_EOL;
}

testShowTodoList();