<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//USE para Relacionamento 1x1
use Illuminate\Database\Eloquent\Relations\HasOne;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\Artesao;

class Postagem extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'postagens';

        //Relacionamento 1x1 para retornar o nome da artesao ao puxar o ID pela postagem
        public function artesao(): HasOne
        {
            return $this->hasOne(Artesao::class, 'id', 'artesao_id');
        }

        //Relacionamento 1x1 para retornar o nome do autor ao puxar o ID pela postagem
        public function autor(): HasOne
        {
            return $this->hasOne(User::class, 'id', 'user_id');
        }

        public function getImagensConteudoAttribute()
        {
            preg_match_all('/<img[^>]+src="([^">]+)"/i', $this->descricao, $matches);
            return $matches[1] ?? [];
        }


}
