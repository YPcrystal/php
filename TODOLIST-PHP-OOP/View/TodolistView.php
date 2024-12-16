<?php

namespace View {
    
    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService) {
            $this->todolistService = $todolistService;
        }
        function showTodolist(): void {
            while (true) {
                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todolist" . PHP_EOL;
                echo "2. Hapus Todolist" . PHP_EOL;
                echo "4. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilihan");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function addTodolist(): void {
            echo "MENAMBAH TODOLIST" . PHP_EOL;

            $todo = InputHelper::input("Todolist (x untuk batal)");

            if ($todo == "x") {
                echo "Batal menambah todolist" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void {
            echo "MENGHAPUS TODOLIST" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            if ($pilihan == "x") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}