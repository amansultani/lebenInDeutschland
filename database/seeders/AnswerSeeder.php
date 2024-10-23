<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    
    public function run(): void
    {
        $csvFilePath = database_path('seeders/data/answers.csv');
        
        
        if (File::exists($csvFilePath)) {
            
            $file = fopen($csvFilePath, 'r');

           
            fgetcsv($file);

           
            while (($data = fgetcsv($file)) !== FALSE) {
                
                Answer::create([
                    'question_id'        => $data[1], 
                    'answer_text_de'     => $data[2] ?? null,
                    'answer_text_en'     => $data[3] ?? null,
                    'answer_text_dari'   => $data[4] ?? null,
                    'answer_text_pashto' => $data[5] ?? null,
                    'is_correct'         => $data[6] ?? 0,
                ]);
            }

            fclose($file);
        } else {
           
            $this->command->error('CSV file not found at: ' . $csvFilePath);
        }
    }
}
