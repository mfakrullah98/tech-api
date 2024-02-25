<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;


class ImportCsvData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:import-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from csv file to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = public_path('data.csv');

        if(!file_exists($filePath)) {
            $this->error('File not found');
            return;
        }
        try{
            Excel::import(new DataImport,$filePath);
            $this->info('Data imported successfully');
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
