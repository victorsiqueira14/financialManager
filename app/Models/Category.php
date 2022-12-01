<?php

namespace App\Models;

use App\Models\Expense;
use App\Models\Revenue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    protected $table = 'categories';

    public function revenue()
    {
        return $this->hasMany(Revenue::class);
    }

    public function expense()
    {
        return $this->expense(Expense::class);
    }
}
