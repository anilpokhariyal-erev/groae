<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportProcessDocument implements FromCollection, WithHeadings, WithMapping
{

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function collection()
    {
        return collect($this->data);
    }

    public function headings(): array
    {
        return [
            'Status',
            'Freezone',
            'License Type',
            'No of Visa Required',
            'No of Shareholder',
            'Document Type',
            'Document Name',
            'Customer Name',
            'Customer Email',
            'Customer Mobile',
            'Customer City',
            'Customer State',
            'Customer Country',
            'Customer Pincode',
        ];
    }

    public function map($row): array
    {
        return [
            'Status' => $row->status,
            'Freezone' => $row->freezone?$row->freezone->name:'',
            'License Type' => $row->license_type,
            'No of Visa Required' => $row->no_of_visa_required,
            'No of Shareholder' => $row->no_of_shareholder,
            'Document Type' => $row->document_type,
            'Document Name' => $row->document_name,
            'Customer Name' => $row->customer ? $row->customer->name:'',
            'Customer Email' => $row->customer ? $row->customer->email:'',
            'Customer Mobile' => $row->customer ? $row->customer->mobile:'',
            'Customer City' => $row->customer ? $row->customer->city:'',
            'Customer State' => $row->customer ? $row->customer->state:'',
            'Customer Country' => $row->customer ? $row->customer->country:'',
            'Customer Pincode' => $row->customer ? $row->customer->pincode:''
        ];
    }

}
