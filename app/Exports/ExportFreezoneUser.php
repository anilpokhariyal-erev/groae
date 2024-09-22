<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportFreezoneUser implements FromCollection, WithHeadings, WithMapping
{

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect($this->data);
    }

    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Mobile Number',
            'Designation',
            'Status'
        ];
    }

    public function map($row): array
    {
        return [
            'First Name' => $row->first_name,
            'Last Name' => $row->last_name,
            'Email' => $row->email,
            'Mobile Number' => $row->mobile_number,
            'Designation' => $row->designation,
            'Status' => ($row->status == 1) ? 'unblocked' : 'blocked',
        ];
    }

}
