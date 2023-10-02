<?php

namespace App\Exceptions;

use Exception;

class PageNotFoundException extends Exception
{
    protected $message = 'Aparentemente a página não existe!';

    public function render()
    {
        return response()->view('error/error', ['code' => 404]);
    }
}
