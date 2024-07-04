<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function items()
    {
        return $this->belongsToMany(
            item::class, 'haves', 'user_id', 'item_id')
            ->withPivot('have');
    }

    public function masters()
    {
        return $this->hasMany(Master::class);
    }
}
