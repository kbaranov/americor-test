<?php

namespace app\widgets\HistoryList;

use app\models\History;

abstract class HistoryItemCommon
{
    protected $model;

    public function assemble()
    {
        return [
            'user' => $this->getUser(),
            'body' => $this->getBody(),
            'bodyDatetime' => $this->getBodyDatetime(),
            'content' => $this->getContent(),
            'footer' => $this->getFooter(),
            'footerDatetime' => $this->getFooterDatetime(),
            'iconClass' => $this->getIconClass(),
            'iconIncome' => $this->getIconIncome(),
        ];
    }

    public function __construct(History $model)
    {
        $this->model = $model;
    }

    protected function getUser()
    {
        return false;
    }

    protected function getBody()
    {
        return false;
    }

    protected function getBodyDatetime()
    {
        return false;
    }

    protected function getContent()
    {
        return false;
    }

    protected function getFooter()
    {
        return false;
    }

    protected function getFooterDatetime()
    {
        return false;
    }

    protected function getIconClass()
    {
        return false;
    }

    protected function getIconIncome()
    {
        return false;
    }
}
