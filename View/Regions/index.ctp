<h3>Regions</h3>

<table>
	<tr>
		<th>
			<?php 
			echo $this->Paginator->sort('regionID', 'ID') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('regionName', 'Name') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('Country.CountryName', 'Country') 
			?>
		</th>
		<th> - </th>
	</tr>
	<?php 
	foreach ( $regions as $region ) :
	?>
		<tr>
			<td><?php echo $region['Region']['regionID'] ?></td>
			<td><?php echo $region['Region']['regionName'] ?></td>
			<td><?php 
					if ( isset ($region['Country']) )
						echo $region['Country']['CountryName'] 
				?>
			</td>
			<td>
				-
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