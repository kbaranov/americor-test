<?php

namespace app\widgets\HistoryList;

use app\widgets\HistoryList\helpers\HistoryListHelper;

class HistoryItemCommonDefault extends HistoryItemCommon
{
    protected function getUser()
    {
        return $this->model->user;
    }

    protected function getBody()
    {
        return HistoryListHelper::getBodyByModel($this->model);
    }

    protected function getBodyDatetime()
    {
        return $this->model->ins_ts;
    }

    protected function getIconClass()
    {
        return 'fa-gear bg-purple-light';
    }
}
