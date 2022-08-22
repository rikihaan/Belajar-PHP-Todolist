<?php

namespace Service{

    use Repository\TodoListRepository;

    interface TodoListService{
        
        function showTodoList():void;
        function addTodoList(string $todo):void;
        function removeTodoList(int $number):void;
    }

    class TodoListServiceImpl implements TodoListService{

        private TodoListRepository $todoListRepository ;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoLisRepository=$todoListRepository;
        }
        function showTodoList(): void
        {

            echo "TODOLIST" . PHP_EOL;
            foreach ($this->todoListRepository->findAll() as $number => $value) {
                echo "$number. $value->dTodoList" . PHP_EOL;
            }
        }

        function addTodoList(string $todo): void
        {
            
        }

        function removeTodoList(int $number): void
        {
            
        }
    }
}