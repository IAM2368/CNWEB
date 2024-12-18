<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    // Các trường được phép gán giá trị hàng loạt
    protected $fillable = ['title', 'description', 'long_description', 'completed'];
}
