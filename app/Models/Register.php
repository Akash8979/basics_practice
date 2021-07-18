<?php

namespace App\Models;

use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['fname', 'lname', 'email', 'gender', 'department', 'password'];

    //====local scope===
    public function scopeUser($query)
    {
        return $query->where('department', '=', 2);
    }

    //=====================global scope
    /**
    //  * The "booted" method of the model.
    //  *
    //  * @return void
    //  */
    // protected static function booted()
    // {
    //     static::addGlobalScope(new UserScope);
    // }
}
