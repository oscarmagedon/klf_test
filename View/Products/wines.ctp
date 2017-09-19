<h3>Wines</h3>

<div style="padding: 10px; font-size: 120%">
	<?php
	echo $this->Html->link('Add Product',['action'=>'add']);
	?>
	| API SERVICES ::
	<?php
	echo $this->Html->link('10 more expensive',['action'=>'service'],['target'=>'_blank']);
	?>
	|
	<?php
	echo $this->Html->link('10 cheaper',['action'=>'service','ASC'],['target'=>'_blank']);
	?>
</div>


<table>
	<tr>
		<th>
			<?php 
			echo $this->Paginator->sort('prodID', 'ID') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('prodNum', 'Number') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('prodName', 'Name') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('Colorprod.colprodDesc', 'Color') 
			?>
		</th>
		<th>
			Country
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('Region.regionName', 'Region') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('prodPriceBuy', 'Price') 
			?>
		</th>
		<th> - </th>
	</tr>
	<?php 
	foreach ( $products as $product ) :
	?>
		<tr>
			<td><?php echo $product['Product']['prodID'] ?></td>
			<td><?php echo $product['Product']['prodNum'] ?></td>
			<td><?php 
				echo substr($product['Product']['prodName'],0,20) . '...'; 
				?>
			</td>
			<td><?php echo $product['Colorprod']['colprodDesc'] ?></td>
			<td><?php 
					if ( isset ($product['Region']['Country']) )
						echo $product['Region']['Country']['CountryName'] 
				?>
			</td>
			<td><?php echo $product['Region']['regionName'] ?></td>
			<td><?php echo $product['Product']['prodPriceBuy'] ?></td>
			<td>
				<?php
				echo $this->Html->link('more',['action'=>'view',$product['Product']['prodID']]);
				?>
			</td>
		</tr>
	<?php 
	endforeach;
	?>
</table>

<div class="paginator">
	<?php
	    echo $this->Paginator->prev(
		  '<< Previous',
		  array('class' => 'pagination-previous'),
		  null,
		  array('class' => 'pagination-previous prev disabled')
		);

	    echo "&nbsp; |<span class='pagination-list'>";

	    // Shows the page numbers
	    echo $this->Paginator->numbers(array('class' => 'pagination-link'));

	    echo "</span> |&nbsp;";
	    
	    
	     echo $this->Paginator->next(
	      'Next »',
	      array('class' => 'pagination-next'),
	      null,
	      array('class' => 'pagination-previous next disabled')
	    );

	    ?>
</div>