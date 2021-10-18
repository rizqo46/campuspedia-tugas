<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverLettersModel extends Model
{
    use HasFactory;
    protected $table = "cover_letters";
    protected $fillable = ['uuid', 'name', 'email', 'position_to_apply', 'company_to_apply', 'experience'];
}
