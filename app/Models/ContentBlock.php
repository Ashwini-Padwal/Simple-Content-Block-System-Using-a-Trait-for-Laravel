<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentBlock extends Model
{
    use HasFactory;
    
    protected $fillable = ['type', 'content', 'blockable_id', 'blockable_type'];

    public function blockable()
    {
        return $this->morphTo();
    }
}
