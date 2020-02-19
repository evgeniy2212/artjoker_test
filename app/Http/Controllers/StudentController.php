<?php

namespace App\Http\Controllers;

use App\Repositories\StudentRepository;

class StudentController extends Controller
{
    private $repository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->repository = $studentRepository;
    }

    /**
     * View all students found in the database
     */
    public function index()
    {
        $students = $this->repository->getStudentList();
        $students_amount = $this->repository->getStudentsAmount();

        return view('students', compact('students', 'students_amount'));
    }
}
