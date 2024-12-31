<?php

namespace App\View\Components\Mail;

use Illuminate\View\Component;

class RightTable extends Component
{
    public function __construct(
        public array $rows
    ) {}

    public function render()
    {
        return view('components.mail.right-table');
    }
}
