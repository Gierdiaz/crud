<?php

namespace App\Enums;

enum UserPosition: string
{
    case A = 'Desenvolvedor Back-end';
    case B = 'Desenvolvedor Front-end';

    public static function fromPosition(string $name)
    {
        foreach (self::cases() as $position) {
            if($name === $position->name) {
                return $position->value;
            }
        }

        return null;

    }

}