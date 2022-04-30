<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        return new Student([
            'nisn' => $row[1],
            'name' => $row[2],
            'nama_ortu' => $row[3],
            'tempat_tgl_lahir' => $row[4],
            'no_exam' => $row[5],
            'class' => $row[6],
            'status' => $row[7],
            'message' => $row[8],
        ]);
    }
}
