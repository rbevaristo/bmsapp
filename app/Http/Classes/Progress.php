<?php

class Progress {
    private $progress = 0;
    private $model;
    public $value;
    public $percentage;
    public function __construct($model)
    {
        $this->model = $model;
        $this->progress();
        $this->setValue($this->progress);
        $this->setPercentage($this->progress);
    }
    
    private function progress()
    {
        $numberOfTasks = $this->model->count();
        $percentagePerTask = ($numberOfTasks > 0) ? 100 / $numberOfTasks : 0;

        foreach($this->model as $item) {
            if($item->status)
                $this->progress += $percentagePerTask;
        }
    }

    private function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return number_format($this->value,0);
    }

    private function setPercentage($value)
    {
        $this->percentage = $value;
    }

    public function getPercentage()
    {
        return number_format($this->percentage,2) . '%';
    }
}