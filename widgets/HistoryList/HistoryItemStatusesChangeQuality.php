<?php

namespace app\widgets\HistoryList;

use app\models\Customer;

class HistoryItemStatusesChangeQuality extends HistoryItemStatusesChange
{
    protected function getModel()
    {
        return $this->model;
    }

    protected function getOldValue()
    {
        return Customer::getQualityTextByQuality($this->model->getDetailOldValue('quality'));
    }

    protected function getNewValue()
    {
        return Customer::getQualityTextByQuality($this->model->getDetailNewValue('quality'));
    }
}
