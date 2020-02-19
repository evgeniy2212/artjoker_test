<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    protected $guarded = [];

    public $timestamps = false;


    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function address()
    {
        return $this->belongsTo(StudentAddress::class, 'student_address_id', 'id');
    }
}
