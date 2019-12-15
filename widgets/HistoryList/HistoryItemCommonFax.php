<?php

namespace app\widgets\HistoryList;

use Yii;
use app\widgets\HistoryList\helpers\HistoryListHelper;
use yii\helpers\Html;

class HistoryItemCommonFax extends HistoryItemCommon
{
    protected function getUser()
    {
        return $this->model->user;
    }

    protected function getBody()
    {
        return HistoryListHelper::getBodyByModel($this->model) . ' - ' .
            (isset($model->fax->document) ? Html::a(
                Yii::t('app', 'view document'),
                $this->model->fax->document->getViewUrl(),
                [
                    'target' => '_blank',
                    'data-pjax' => 0
                ]
            ) : '');
    }

    protected function getFooter()
    {
        return Yii::t('app', '{type} was sent to {group}', [
            'type' => $this->model->fax ? $this->model->fax->getTypeText() : 'Fax',
            'group' => isset($model->fax->creditorGroup) ? Html::a($this->model->fax->creditorGroup->name, ['creditors/groups'], ['data-pjax' => 0]) : ''
        ]);
    }

    protected function getFooterDatetime()
    {
        return $this->model->ins_ts;
    }

    protected function getIconClass()
    {
        return 'fa-fax bg-green';
    }
}
