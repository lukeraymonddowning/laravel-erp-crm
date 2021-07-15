<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\ERP\CRM\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    public $table = 'erp_crm_links';

    protected $fillable = [
        'url',
        'type',
        'internal',
        'meta',
        'contact_id',
    ];

    protected $casts = [
        'internal' => 'boolean',
        'meta' => AsArrayObject::class,
    ];

    public function contact(): BelongsTo
    {
        return $this->belongsTo(
            related: Contact::class,
            foreignKey: 'contact_id',
        );
    }
}
