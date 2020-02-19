<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student_addresses';

    protected $guarded = [];

    public $timestamps = false;

    public function student()
    {
        return $this->hasOne(Student::class, 'student_address_id', 'id');
    }
}
