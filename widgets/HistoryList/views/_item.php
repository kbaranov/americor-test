<?php

use app\models\History;
use app\models\search\HistorySearch;
use app\widgets\HistoryList\HistoryItemCommonCall;
use app\widgets\HistoryList\HistoryItemCommonDefault;
use app\widgets\HistoryList\HistoryItemCommonTask;
use app\widgets\HistoryList\HistoryItemCommonSms;
use app\widgets\HistoryList\HistoryItemCommonFax;
use app\widgets\HistoryList\HistoryItemStatusesChangeQuality;
use app\widgets\HistoryList\HistoryItemStatusesChangeType;

/** @var $model HistorySearch */

switch ($model->event) {

    case History::EVENT_CREATED_TASK:
    case History::EVENT_COMPLETED_TASK:
    case History::EVENT_UPDATED_TASK:
        $item = new HistoryItemCommonTask($model);
        $template = '_item_common';
        break;

    case History::EVENT_INCOMING_SMS:
    case History::EVENT_OUTGOING_SMS:
        $item = new HistoryItemCommonSms($model);
        $template = '_item_common';
        break;

    case History::EVENT_OUTGOING_FAX:
    case History::EVENT_INCOMING_FAX:
        $item = new HistoryItemCommonFax($model);
        $template = '_item_common';
        break;

    case History::EVENT_CUSTOMER_CHANGE_TYPE:
        $item = new HistoryItemStatusesChangeType($model);
        $template = '_item_statuses_change';
        break;

    case History::EVENT_CUSTOMER_CHANGE_QUALITY:
        $item = new HistoryItemStatusesChangeQuality($model);
        $template = '_item_statuses_change';
        break;

    case History::EVENT_INCOMING_CALL:
    case History::EVENT_OUTGOING_CALL:
        $item = new HistoryItemCommonCall($model);
        $template = '_item_common';
        break;

    default:
        $item = new HistoryItemCommonDefault($model);
        $template = '_item_common';
        break;
}

echo $this->render($template, $item->assemble());
