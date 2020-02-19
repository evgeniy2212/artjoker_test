<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function uploadStudentCsv(){
        $path = $this->getPath('student');

        if($path){
            return response()->download($path);
        } else {
            return back()->withErrors(['msg' => 'No student`s exported files!']);
        }
    }

    public function uploadTotalAttendanceCsv(){
        $path = $this->getPath('total_attendance');

        if($path){
            return response()->download($path);
        } else {
            return back()->withErrors(['msg' => 'No total attendance`s exported files!']);
        }
    }

    public function uploadCoursesAttendanceCsv(){
        $path = $this->getPath('course_attendance');

        if($path){
            return response()->download($path);
        } else {
            return back()->withErrors(['msg' => 'No course attendance`s exported files!']);
        }
    }

    private function getPath(string $filename = ''){
        $filename = $filename.'.csv';
        $path = Storage::disk('public')->exists($filename) ?
                Storage::disk('public')->path($filename) :
                false;

        return $path;
    }
}
