<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class loginModel extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = "id";
    public $incrementing = false;
    public $timestamps = false;
}
