<?php

namespace App\Repositories\Todo;
use App\Company;
use App\Repositories\Todo\TodoRepository;
class EloquentToday implements TodoRepository
{
	private $model;
	public function __construct(Company $model){
		$this->model = $model;
	}

	public function paginate($number)
    {
        return $this->model->paginate($number);
    }

    public function getById($id){
		return $this->model->find($id);
	}

}