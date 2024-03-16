<?php

namespace App\Imports;

use App\Models\DistanceLocation;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportExcelDirection implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        // Lakukan manipulasi data dan simpan ke dalam model atau tabel yang sesuai
        return new DistanceLocation([
            'drop_point' => $row[0],
            'kabupaten' => $row[1],
            'kecamatan' => $row[2],
            'kelurahan' => $row[3],
            'jarak' => $row[4],
            // ...
        ]);
    }
}
