<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\ERP\CRM\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use JustSteveKing\Laravel\ERP\CRM\Models\Concerns\HasUuid;

class Contact extends Model
{
    use HasUuid;
    use Notifiable;
    use SoftDeletes;

    public $table = 'erp_crm_contacts';

    protected $fillable = [
        'uuid',
        'prefix',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'known_as',
        'email',
        'job_title',
        'department',
        'birthday',
        'company_id'
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(
            related: Company::class,
            foreignKey: 'company_id',
        );
    }

    public function links(): HasMany
    {
        return $this->hasMany(
            related: Link::class,
            foreignKey: 'contact_id',
        );
    }
}
