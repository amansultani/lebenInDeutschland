<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFilePath = database_path("seeders/data/questions.csv");

        if(File::exists($csvFilePath)) {
            $file = fopen($csvFilePath,"r");
            fgetcsv($file);

            while (($data = fgetcsv($file)) !== false) {
                Question::create([
                    'question_text_de'   => $data[1] ?? null,
                    'question_text_en'   => $data[2] ?? null,
                    'question_text_dari' => $data[3] ?? null,
                    'question_text_pashto'=> $data[4] ?? null,
                    'category'           => $data[5] ?? null,
                    'state'              => $data[6] ?? null,
                    'image'              => $data[7] ?? null,
                ]);
            }
            fclose($file);
        
        }   else {
            $this->command->error('CSV file not found at:' . $csvFilePath);
        }
    }
    
}
