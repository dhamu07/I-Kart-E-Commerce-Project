<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category([
            //
        ]);
        $i = 1;
        foreach($row as $rw){
            dump($rw);
            dump($i);
            if($rw[0] != null){
                $data = [
                    'parent_id' => 0,
                    'name' => $rw[0],
                    'status' => 'Active'
                ];
                // dump($rw[0]);
            }
            // elseif($rw[1] != null){
            //     $data = [
            //         'parent_id' => $i,
            //         'name' => $rw[1],
            //     ];
            // }
        $i++;
        }
        dd();

    }
}
