<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportFreezone implements FromCollection, WithHeadings, WithMapping
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
            'About',
            'Benefits',
            'Registration Info',
            'Registration Video Link',
            'Rule Regulation Type',
            'Rule Regulation Info'
        ];
    }

    public function map($row): array
    {
        return [
            'Name' => $row->name,
            'About' => $row->about,
            'Benefits' => $row->benefits,
            'Registration Info' => $row->licence_registration_procedures_info,
            'Registration Video Link' => $row->licence_registration_procedures_video_link,
            'Rule Regulation Type' => $row->rule_regulation_type,
            'Rule Regulation Info' => $row->rule_regulation_info,
        ];
    }

}
