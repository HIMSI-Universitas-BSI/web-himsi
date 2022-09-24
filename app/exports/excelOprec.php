<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class excelOprec implements FromView, ShouldAutoSize, WithStyles
{
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function view(): View
    {
        return view('exports.excel.oprec', $this->data);
    }
    public function styles(Worksheet $sheet)
    {
    }
}
