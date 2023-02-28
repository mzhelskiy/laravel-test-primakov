<?php

namespace App\Services;

use App\Models\Question;

class QuestionService extends \App\Services\AbstractService
{
    /**
     * Класс модели
     *
     * @return string
     */
    protected function model(): string
    {
        return Question::class;
    }

    public function getAll()
    {
        return $this->query()->with('options')->get();
    }
}
