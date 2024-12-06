<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
class ItemImport implements ToModel, WithStartRow, WithUpserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       

        return  new Item([
            'id'=>$row[0],
            'name'=>$row[1],
            'producer'=>$row[2],
            'barcode'=>$row[3],
            'price'=>$row[4]
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
    public function uniqueBy()
    {
        return 'id';
    }
}
