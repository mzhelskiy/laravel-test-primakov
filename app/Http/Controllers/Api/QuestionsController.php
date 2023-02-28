<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\QuestionResource;
use App\Services\QuestionService;
use Illuminate\Routing\Controller as BaseController;

class QuestionsController extends BaseController
{
    /**
     * Сервис работы с вопросами
     *
     * @var QuestionService
     */
    protected $service;

    public function __construct(QuestionService $service)
    {
        $this->service = $service;
    }

    public function __invoke()
    {
        return QuestionResource::collection($this->service->getAll());
    }
}
