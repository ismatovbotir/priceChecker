<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Search;

class Item extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function search(){
        return $this->hasOne(Search::class);
    }
}
