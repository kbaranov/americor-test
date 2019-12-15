<?php

namespace app\widgets\HistoryList;

use app\models\Customer;

class HistoryItemStatusesChangeType extends HistoryItemStatusesChange
{
    protected function getModel()
    {
        return $this->model;
    }

    protected function getOldValue()
    {
        return Customer::getTypeTextByType($this->model->getDetailOldValue('type'));
    }

    protected function getNewValue()
    {
        return Customer::getTypeTextByType($this->model->getDetailNewValue('type'));
    }
}
