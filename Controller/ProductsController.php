<?php

class ProductsController extends AppController
{
	
	public function wines()
	{	
		$this->Paginator->settings = [
                                        'limit'      => 30,
                                        'recursive'  => 2,
                                        'order'      => ['prodID'=>'DESC'],
                                        'fields'     => [
														'prodID','prodNum','prodName','prodPriceBuy',
														'Colorprod.colprodDesc','Region.regionName',
														'Region.regionCountryID', ]
                                     ];

		$products = $this->Paginator->paginate();

		$this->set(compact('products'));
	}

	public function view ($id)
	{
		$product = $this->Product->find('first',
						[
							'conditions' => "prodID = $id",
							'recursive'  => 2 ]);

		$this->set(compact('product'));
	}

	public function add ()
	{
		if ( $this->request->is('post') ) {
			$this->Product->create();
			$this->Product->save($this->request->data);
			$this->Flash->success('Wine added.');
			$this->redirect(['action'=>'wines']);
		}

		$regions = $this->Product->Region->find('list',[
						'limit'=>10,'fields'=>['regionID','regionName'] ]);
		$colors  = $this->Product->Colorprod->find('list',['fields'=>['colprodID','colprodDesc'] ]);

		$this->set(compact('regions','colors'));
	}

	public function service ($type = 'DESC')
	{

		$products = $this->Product->find('all',
									[	'limit'      => 10,
                                        'recursive'  => 2,
                                        'order'      => ['prodPriceBuy' => $type],
                                        'conditions' => ['prodPriceBuy <>' => 'NULL'],
                                        'fields'     => [
														'prodID','prodNum','prodName','prodPriceBuy',
														'Colorprod.colprodDesc','Region.regionName',
														'Region.regionCountryID', ]]);

		$returnObj = ['Error'=>'','Response'=>$products];
		
		$this->set('returnObj', $returnObj);
		//echo json_encode($returnObj);
		$this->layout = 'ajax';
		//die();
	}
}