<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Student extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'students';
    protected $fillable = ['name', 'email', 'age'];
}