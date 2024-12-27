<?php

namespace App\Exports;

use App\Models\Search;
use Maatwebsite\Excel\Concerns\FromCollection;

class StatExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Search::all();
    }
}
