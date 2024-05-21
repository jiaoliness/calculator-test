<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Calculate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate {input}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculator';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $string = $this->argument('input');

        if (preg_match('/([\d.]+)sqrt/', $string, $m) !== 0) {

            echo sqrt($m[1]);
            return sqrt($m[1]);

        } else if (preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $string, $m) !== 0) {

            $operator = $m[2];

            switch ($operator) {
                case '+':
                    $p = $m[1] + $m[3];
                    break;
                case '-':
                    $p = $m[1] - $m[3];
                    break;
                case '*':
                    $p = $m[1] * $m[3];
                    break;
                case '/':
                    $p = $m[1] / $m[3];
                    break;
            }

            echo $p;
            return $p;
        }

    }
}
