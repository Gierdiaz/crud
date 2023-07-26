<?php

namespace App\Helpers;

use App\Enums\UserPosition;

if (!function_exists('getPositionUser')) {
    function getPositionUser(string $position): string {
        return UserPosition::fromPosition($position);
    }
}