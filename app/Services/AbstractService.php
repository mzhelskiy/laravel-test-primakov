<?php

namespace App\Services;

abstract class AbstractService
{
    /**
     * Название класса модели
     *
     * @return String
     */
    abstract protected function model(): string;

    protected function query(): \Illuminate\Database\Eloquent\Builder
    {
        return app($this->model())->query();
    }

    /**
     * Возвращает все сущности
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->query()->get();
    }
}
