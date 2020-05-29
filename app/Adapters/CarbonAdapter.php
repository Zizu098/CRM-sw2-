<?php

namespace App\Adapters;
use App\Company;
use App\Repositories\Todo\TodoRepository;
use Carbon\Carbon;

class CarbonAdapter implements ICarbonAdapter
{
	private $carbon;
	public function __construct(Carbon $carbon){
		$this->carbon = $carbon;
	}

	public function now()
    {
        return $this->carbon->now();
    }
}