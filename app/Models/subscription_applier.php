<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription_applier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'username',
        'email',
        'subscription_type',
        'imageUrl' ];
}
