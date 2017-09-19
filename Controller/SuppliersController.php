<?php

class SuppliersController extends AppController
{
	public function index()
	{
		$this->Paginator->settings = [
                                        'limit'      => 30,
                                        'order'      => ['regionName'=>'ASC'],
                                     ];

		$suppliers = $this->Paginator->paginate();
		$this->set(compact('suppliers'));
	}
}