<?php

namespace App\Repositories\Todo;

    interface TodoRepository
{
	public function paginate($number);
	public function getById($id);
}