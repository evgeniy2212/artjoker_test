<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExportDataRequest;
use App\Helpers\Contracts\ExportData;
use App\Repositories\CourseRepository;
use App\Repositories\StudentRepository;

class ExportController extends Controller
{
    private $exportData;
    private $studentRepository;
    private $courseRepository;

    public function __construct(ExportData $exportData,
                                StudentRepository $studentRepository,
                                CourseRepository $courseRepository)
    {
        $this->exportData = $exportData;
        $this->studentRepository = $studentRepository;
        $this->courseRepository = $courseRepository;
    }

    /**
     * Exports all student data to a CSV file
     */
    public function exportStudentsToCSV(ExportDataRequest $request)
    {
        $studentIds = $request->input('itemIds');
        $students = $this->studentRepository->getStudentsForExport($studentIds);
        $exportResult = $this->exportData->export($students, 'student');

        if($exportResult){
            return redirect()->route('students')
                             ->withSuccess(['Student export completed successfully!']);
        } else {
            return back()->withErrors(['msg' => 'Student export didn`t complete!']);
        }
    }

    /**
     * Exports the total amount of students that are taking each course to a CSV file
     */
    public function exportTotalAttendanceToCSV()
    {
        $attendanceAmount = $this->courseRepository->getTotalAmountAttendanceForExport();
        $exportResult = $this->exportData->export($attendanceAmount, 'total_attendance');

        if($exportResult){
            return redirect()->route('students')
                             ->withSuccess(['Total amount attendance export completed successfully!']);
        } else {
            return back()->withErrors(['msg' => 'Total amount attendance export didn`t complete!']);
        }
    }

    /**
     * Exports the amount of students that are taking each course to a CSV file
     */
    public function exportCoursesAttendanceToCSV()
    {
        $attendanceAmount = $this->courseRepository->getCoursesAmountAttendanceForExport();
        $exportResult = $this->exportData->export($attendanceAmount, 'course_attendance');

        if($exportResult){
            return redirect()->route('students')
                             ->withSuccess(['Courses attendance export completed successfully!']);
        } else {
            return back()->withErrors(['msg' => 'Courses attendance export didn`t complete!']);
        }
    }
}
