<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::factory()
            ->afterCreating(function ($question) {
                if (in_array($question->type, [Question::TYPE_RADIO, Question::TYPE_CHECKBOX])) {
                    QuestionOption::factory()->count(rand(3, 6))->create(['question_id' => $question->id]);
                }
            })
            ->count(10)
            ->create();
    }
}
