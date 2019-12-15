<?php

namespace app\widgets\HistoryList;

use app\models\Call;
use app\widgets\HistoryList\helpers\HistoryListHelper;

class HistoryItemCommonCall extends HistoryItemCommon
{
    protected function getUser()
    {
        return $this->model->user;
    }

    protected function getBody()
    {
        return HistoryListHelper::getBodyByModel($this->model);
    }

    protected function getContent()
    {
        return $this->model->call->comment ?? '';
    }

    protected function getFooter()
    {
        return isset($this->model->call->applicant) ? "Called <span>{$this->model->call->applicant->name}</span>" : null;
    }

    protected function getFooterDatetime()
    {
        return $this->model->ins_ts;
    }

    protected function getIconClass()
    {
        return ($this->model->call && $this->model->call->status == Call::STATUS_ANSWERED)
            ? 'md-phone bg-green'
            : 'md-phone-missed bg-red';
    }

    protected function getIconIncome()
    {
        return $this->model->call
            && $this->model->call->status == Call::STATUS_ANSWERED
            && $this->model->call->direction == Call::DIRECTION_INCOMING;
    }
}
