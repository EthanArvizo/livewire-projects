<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number1 = 0;
    public $number2 = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
        
    }

    public function calculate()
    {
        $num1 = (float) $this->number1;
        $num2 = (float) $this->number2;
        
        switch ($this->action) {
            case '-':
                $this->result = $num1 - $num2;
                break;
            case '+':
                $this->result = $num1 + $num2;
                break;
            case '*':
                $this->result = $num1 * $num2;
                break;
            case '/':
                $this->result = $num1 / $num2;
                break;
            case '%':
                $this->result = $num1 / 100 * $num2;
                break;
        }
    
    }

    public function updated($property)
    {
        // Check if either number1 or number2 is empty, then disable button
        if ($this->number1 == '' || $this->number2 == '') {
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }
}
