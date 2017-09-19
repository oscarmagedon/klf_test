<?php

class Region extends AppModel {
	
	public $useTable   = 'Regions';

	public $primaryKey = 'regionID';

	
	public $belongsTo  = [
							'Country' => [
											'foreignKey' => 'regionCountryID',
											'primaryKey' => 'CountryID']
						];
	
}