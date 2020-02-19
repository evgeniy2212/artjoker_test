<?php

namespace App\Repositories;

use App\Models\Course as Model;

/**
 * Class CourseRepository
 *
 * @package App\Repositories
 */
class CourseRepository extends CoreRepository {

    /**
     * @return string
     */
    public function getModelClass()
    {
        return Model::class;
    }

    /**
     * @return mixed
     */
    public function getTotalAmountAttendanceForExport()
    {
        $attendances = $this->startConditions()
                            ->select('id')
                            ->withCount(['students'])
                            ->get();

        $totalAmount = $this->countTotalAttendance($attendances);

        return $totalAmount;
    }

    /**
     * @return array
     */
    public function getCoursesAmountAttendanceForExport()
    {
        $columns = ['id', 'course_name', 'university'];

        $attendances = $this->startConditions()
                            ->select($columns)
                            ->withCount(['students'])
                            ->get()
                            ->toArray();

        return $attendances;
    }

    private function countTotalAttendance($attendances){
        $att_cnt = 0;
        $attendances->each(function ($item) use(&$att_cnt){
            $att_cnt += $item->students_count;
        });

        $result = ['attendance' => $att_cnt];

        return $result;
    }
}
