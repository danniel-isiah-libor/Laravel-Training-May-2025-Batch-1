<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Register extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.register', [
            'email' => strtolower($this->email)
        ]);
        // return <<<'blade'
        //     <div>
        //         <h1>Register</h1>
        //     </div>
        // blade;
    }
}
