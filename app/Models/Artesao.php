<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OwenIt\Auditing\Contracts\Auditable;

class Artesao extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'artesaos';

    protected $fillable = [
        'nome',
        'biografia',
        'email',
        'cidade',
        'fotografia',
    ];

    /**
     * Limita o tamanho dos dados auditados para evitar erro de tamanho.
     */
    public function transformAudit(array $data): array
    {
        if (isset($data['old_values'])) {
            $data['old_values'] = $this->truncateAuditData($data['old_values']);
        }

        if (isset($data['new_values'])) {
            $data['new_values'] = $this->truncateAuditData($data['new_values']);
        }

        return $data;
    }

    /**
     * Trunca os valores para no máximo 500 caracteres.
     */
    protected function truncateAuditData(array $data): array
    {
        return collect($data)->map(function ($value) {
            return is_string($value) && strlen($value) > 500
                ? substr($value, 0, 500) . '...'
                : $value;
        })->toArray();
    }

    public function postagens(): HasMany
    {
        return $this->hasMany(Postagem::class, 'artesao_id', 'id');
    }
}
