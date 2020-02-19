<?php

namespace App\Repositories;

use App\Models\Student as Model;

/**
 * Class StudentRepository
 *
 * @package App\Repositories
 */
class StudentRepository extends CoreRepository {

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
    public function getStudentList()
    {
        $columns = ['id', 'name', 'surname', 'email', 'course_id'];

        $result = $this->startConditions()
                       ->select($columns)
                       ->with(['course:id,course_name,university'])
                       ->get();

        return $result;
    }

    /**
     * @param array
     * @return mixed
     */
    public function getStudentsForExport($ids)
    {
        $result = $this->startConditions()
                       ->find($ids)
                       ->toArray();

        return $result;
    }

    /**
     * @return integer
     */
    public function getStudentsAmount()
    {
        $result = $this->startConditions()
                       ->all()
                       ->count();

        return $result;
    }
}
