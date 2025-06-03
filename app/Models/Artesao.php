<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Artesao extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'artesaos'; // ou o nome real da tabela, se diferente
}
