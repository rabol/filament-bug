<?php

namespace App;

use Filament\Support\Contracts\HasLabel;

enum UserLevelEnum : int implements HasLabel
{

    case None = 0;
    case Free = 10;
    case Standard = 20;
    case Premium = 30;
    case Admin = 999;

    //
    /**
     * @return string|null
     */
    public function getLabel(): string|null
    {

        return match ($this) {
            self::None => __('None'),
            self::Free => __('Free'),
            self::Standard => __('Standard'),
            self::Premium => __('Premium'),
            self::Admin => __('Admin'),
        };
    }
}
