<?php

namespace App\Imports;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use App\Models\UnemploymentRate;

class DataImport implements ToModel, WithHeadingRow, withBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new UnemploymentRate($row);
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}

