<?php
require_once __DIR__."/../Entity/TodoList.php";
require_once __DIR__."/../Repository/TodoListRepository.php";
require_once __DIR__."/../Service/TodoListService.php";

// use todolist Service ImplsD
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use Entity\Todolist;

function testShowTodoList(){

    // memanggil service todoList
    // todolist Service memiliki contructor Parameternya bertype TodolistRepositosry, untuk itu kita buat repositry nya
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todolist[]= new Todolist("Belajar Javascrip");
    $todoListRepository->todolist[]= new Todolist("Belajar PHP OOP");
    $todoListRepository->todolist[]= new Todolist("Belajar GOLANG");
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->showTodoList();
    
}

function testAddTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("BELAJAR PHP OOP");
    $todoListService->addTodoList("BELAJAR GOLANG");
    $todoListService->addTodoList("BELAJAR JAVASCRIPT");
    $todoListService->showTodoList();
    
}

function testRemoveTodoList(){
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("BELAJAR PHP OOP");
    $todoListService->addTodoList("BELAJAR GOLANG");
    $todoListService->addTodoList("BELAJAR JAVASCRIPT");
    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
    $todoListService->removeTodoList(2);
    $todoListService->showTodoList();
    $todoListService->removeTodoList(3);
    $todoListService->showTodoList();
    
}

testRemoveTodoList();