<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

/*    protected  $fillable = ['confirm_code', 'activated', '...'];

    protected  $hidden = ['confirm_code', '...'];

    protected  $casts = ['activated' => 'boolean'];*/
    protected $guarded = [];
//    protected $fillable = ['title', 'body', 'thumnail'];
//    둘 중에 하나만 써놓으면 됨 guarded는 이것만 허용할거야(공백인 경우 전부 허용) fillable은 이것만 허용할 거야(공백일 경우 전부 금지)

}
