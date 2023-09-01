<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class page_dialog extends Component
{
    //public $dialog_data;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $message, public string $type) {

    }

    public function shouldRender(): bool
    {
        return Str::length($this->message) > 0;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page_dialog');
    }
}
