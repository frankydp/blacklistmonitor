<?php

class _MeasurePerformance {
	/*
	$m = new _MeasurePerformance();
	//do sometime
	$m->work(1);
	$m->work(1);
	echo $m->totalAvgPerformance;
	*/
	public $startTime;
	public $counter = 0;
	public $avgPerformance = '';
	public $runTime = 0;

	public function _MeasurePerformance(){
		self::__construct();
	}

	public function __construct(){
		$this->startTime = microtime(true);
	}

	public function work($counterAddFloat = 1){
		$this->counter = $this->counter + (float)$counterAddFloat;
	}
	public function endWork(){
		$this->runTime = microtime(true) - $this->startTime;
		$this->avgPerformance = number_format(($this->counter/$this->runTime), 2, '.', '');
	}

}
