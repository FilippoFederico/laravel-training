<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // for mass assignment

    // 1) fillable example
    // protected $fillable = ['name', 'email', 'active'];

    // 2) guarded example
    protected $guarded = [];
    
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    
    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }
}
