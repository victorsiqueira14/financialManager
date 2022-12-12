<?php

namespace App\Models;

use App\Models\Expense;
use App\Models\Revenue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    
    protected $table = 'categories';
    protected $fillable = [
        'user_id',
        'description'
    ];

    public function revenue()
    {
        return $this->hasMany(Revenue::class, 'category_id', 'id');
    }

    public function expense()
    {
        return $this->hasMany(Expense::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
