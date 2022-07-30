<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sunbreak extends Model
{
  protected $fillable = [
      'id',
      'title',
      'buki',
      'soubi1',
      'soubi2',
      'soubi3',
      'soubi4',
      'soubi5',
      'gender',
      'contact',
      'series',
      'photo',
  ];
}