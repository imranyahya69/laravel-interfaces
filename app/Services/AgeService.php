<?php

namespace App\Services;

use App\Interfaces\AgeInterface;

class AgeService implements AgeInterface
{
    public function getAge()
    {
        echo "My age is 30";
    }
}
