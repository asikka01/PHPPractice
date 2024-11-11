<?php
        $count = isset($_GET['number']) ? intval($_GET['number']) : 0;

        function generateFibonacci($n) {
                $sequence = [];
                $a = 0;
                $b = 1;

                for ($i = 0; $i < $n; $i++) {
                        $sequence[] = $a;
                        $next = $a + $b;
                        $a = $b;
                        $b = $next;
                }

                return $sequence;
        }

        $fibonacciSequence = generateFibonacci($count);

        header('Content-Type: application/json');
        echo json_encode(["data" => $fibonacciSequence]);
?>