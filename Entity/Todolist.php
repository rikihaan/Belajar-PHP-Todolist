<?php

namespace Entity {
    class Todolist
    {
        private $todo;
        private $id;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        public function setId(int $id){
            $this->id=$id;
        }

        public function getId():int{
            return $this->id;
        }

        // for get property todo 
        public function getTodo(): string
        {
            return $this->todo;
        }

        // for set property todo
        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }
    }
}
