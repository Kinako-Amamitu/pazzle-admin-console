<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;

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
