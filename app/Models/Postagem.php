<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//USE para Relacionamento 1x1
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;

class Postagem extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'postagens';

        //Relacionamento 1x1 para retornar o nome da categoria ao puxar o ID pela postagem
        public function categoria(): HasOne
        {
            return $this->hasOne(Categoria::class, 'id', 'categoria_id');
        }

        //Relacionamento 1x1 para retornar o nome do autor ao puxar o ID pela postagem
        public function autor(): HasOne
        {
            return $this->hasOne(User::class, 'id', 'user_id');
        }

}
