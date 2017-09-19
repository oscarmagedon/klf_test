<?php

class Product extends AppModel {
	
	public $useTable = 'Products';

	public $belongsTo = [
							'Colorprod' => ['foreignKey' => 'prodColorID'],
							'Region'    => ['foreignKey' => 'prodRegionID']
						];    

}