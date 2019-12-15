<?php

namespace app\widgets\HistoryList;

use Yii;
use app\models\Sms;
use app\widgets\HistoryList\helpers\HistoryListHelper;

class HistoryItemCommonSms extends HistoryItemCommon
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
        return $this->model->sms->direction == Sms::DIRECTION_INCOMING ?
            Yii::t('app', 'Incoming message from {number}', [
                'number' => $this->model->sms->phone_from ?? ''
            ]) : Yii::t('app', 'Sent message to {number}', [
                'number' => $this->model->sms->phone_to ?? ''
            ]);
    }

    protected function getFooterDatetime()
    {
        return $this->model->ins_ts;
    }

    protected function getIconClass()
    {
        return 'icon-sms bg-dark-blue';
    }

    protected function getIconIncome()
    {
        return $this->model->sms->direction == Sms::DIRECTION_INCOMING;
    }
}
