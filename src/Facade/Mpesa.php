<?php
namespace Mossey\Mpesa\Facade;

use Illuminate\Support\Facades\Facade;

class Mpesa extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Mpesa';
    }


}