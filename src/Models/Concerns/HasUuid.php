<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\ERP\CRM\Models\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        static::creating(
            fn (Model $model) =>
            $model->uuid = Str::uuid()->toString(),
        );
    }
}
