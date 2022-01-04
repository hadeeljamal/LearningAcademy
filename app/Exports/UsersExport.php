<?php

namespace App\Exports;
use App\Models\User;
use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return Student::all();
    }
}
