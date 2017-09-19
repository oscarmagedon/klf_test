<?php
class RegionsController extends AppController {

	public function index()
	{
		$this->Paginator->settings = [
                                        'limit'      => 30,
                                        'order'      => ['regionName'=>'ASC'],
                                     ];

		$regions = $this->Paginator->paginate();
		$this->set(compact('regions'));
	}
}