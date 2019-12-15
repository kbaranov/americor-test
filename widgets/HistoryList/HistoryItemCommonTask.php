<?php

namespace app\widgets\HistoryList;

use app\widgets\HistoryList\helpers\HistoryListHelper;

class HistoryItemCommonTask extends HistoryItemCommon
{
    protected function getUser()
    {
        return $this->model->user;
    }

    protected function getBody()
    {
        return HistoryListHelper::getBodyByModel($this->model);
    }

    protected function getFooter()
    {
        return isset($this->model->task->customerCreditor->name) ? "Creditor: " . $this->model->task->customerCreditor->name : '';
    }

    protected function getFooterDatetime()
    {
        return $this->model->ins_ts;
    }

    protected function getIconClass()
    {
        return 'fa-check-square bg-yellow';
    }
}
