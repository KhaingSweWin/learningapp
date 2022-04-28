<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
  //  protected $table="subjects";
  //  protected $primaryKey="subject_id";
  //  public $timestamps=false;
  protected $fillable=['name','description','age','seat','fee','time'];
}
