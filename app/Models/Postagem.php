<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OwenIt\Auditing\Contracts\Auditable;

class Postagem extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'postagens';

    // Postagem pertence a um artesão
    public function artesao(): BelongsTo
    {
        return $this->belongsTo(Artesao::class, 'artesao_id', 'id');
    }

    // Postagem pertence a um autor (usuário)
    public function autor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
