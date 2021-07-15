<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\ERP\CRM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use JustSteveKing\Laravel\ERP\CRM\Models\Concerns\HasUuid;

class Company extends Model
{
    use HasUuid;
    use SoftDeletes;

    public $table = 'erp_crm_companies';

    protected $fillable = [
        'uuid',
        'name',
        'number',
        'type',
        'charges',
        'status',
        'has_insolvency_history',
        'registered_at',
    ];

    protected $casts = [
        'has_insolvency_history' => 'boolean',
        'registered_at' => 'datetime',
    ];

    public function contacts(): HasMany
    {
        return $this->hasMany(
            related: Contact::class,
            foreignKey: 'company_id',
        );
    }
}
