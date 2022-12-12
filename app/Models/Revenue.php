<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Revenue extends Model
{
    use HasFactory;

    protected $table = 'revenues';
    protected $fillable = [
        'user_id',
        'category_id',
        'date',
        'revenue_description',
        'value'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}


