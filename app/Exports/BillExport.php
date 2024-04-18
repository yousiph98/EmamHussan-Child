<?php

namespace App\Exports;

use App\Models\Bill;
use App\Models\Kid;
use App\Models\Marital;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BillExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $employees=Bill::query()
        ->leftjoin('employees', 'employees.id', '=', 'bills.employee_id')
        ->leftjoin('departments', 'departments.id', '=', 'employees.department_id')
        ->select(['employees.name as EmpName','employees.num_card' ,'departments.name as SectionName',
        DB::raw('(SELECT COUNT(*) FROM kids WHERE kids.bill_id = bills.id  and block_id is null) AS Kids'),'employees.id as EmpId'
        ])
        ->get();
                return $employee;
        }

    }
    public function headings(): array
    {
        return [
            "الاسم",
            "رقم الباج",
            "القسم",
            "عدد الاطفال",
            "ID",
        ];

    }
}
