<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportCustomer implements FromCollection, WithHeadings, WithMapping
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
            'Name',
            'Email',
            'City',
            'State',
            'Country',
            'Pincode',
            'UAE Residence',
            'Mobile Number',
            'Status'
        ];
    }

    public function map($row): array
    {
        return [
            'Name' => $row->name,
            'Email' => $row->email,
            'City' => $row->city,
            'State' => $row->state,
            'Country' => $row->country,
            'Pincode' => $row->pincode,
            'UAE Residence' => ($row->uae_residence == 1) ? 'yes' : 'no',
            'Mobile Number' => $row->mobile_number,
            'Status' => ($row->status == 1) ? 'unblocked' : 'blocked',
        ];
    }

}
