<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;

class Postagem extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'postagens';

    // Relacionamento 1x1 para retornar o nome do artesão pela postagem
    public function artesao(): HasOne
    {
        return $this->hasOne(Artesao::class, 'id', 'artesao_id');
    }

    // Relacionamento 1x1 para retornar o nome do autor pela postagem
    public function autor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
