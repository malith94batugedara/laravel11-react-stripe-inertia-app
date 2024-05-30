<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
       'status',
       'price',
       'credit',
       'session_id',
       'user_id',
       'package_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
