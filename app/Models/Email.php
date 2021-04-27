<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;

class Email extends Model
{
    use HasFactory;
    
    use Filterable;

    private static $whiteListFilter = [
        'sender',
        'to',
        'subject'
    ];

    
    protected $hidden = ['updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
