<?php

namespace app\widgets\HistoryList;

use app\models\History;

abstract class HistoryItemStatusesChange
{
    protected $model;

    public function assemble()
    {
        return [
            'model' => $this->getModel(),
            'oldValue' => $this->getOldValue(),
            'newValue' => $this->getNewValue(),
        ];
    }

    public function __construct(History $model)
    {
        $this->model = $model;
    }

    protected function getModel()
    {
        return false;
    }

    protected function getOldValue()
    {
        return false;
    }

    protected function getNewValue()
    {
        return false;
    }
}
