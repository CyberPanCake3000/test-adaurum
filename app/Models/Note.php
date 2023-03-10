<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'company_id', 'property', 'note'];

    protected $casts = [
        'created_at' => 'datetime:d.m.Y H:m',
        'updated_at' => 'datetime:d.m.Y H:m',
    ];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
