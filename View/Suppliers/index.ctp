<h3>Suppliers</h3>

<table>
	<tr>
		<th>
			<?php 
			echo $this->Paginator->sort('suppID', 'ID') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('suppName', 'Name') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('suppAddr1', 'Address') 
			?>
		</th>
		<th>
			<?php 
			echo $this->Paginator->sort('suppEmail', 'Email') 
			?>
		</th>
		<th> - </th>
	</tr>
	<?php 
	foreach ( $suppliers as $supplier ) :
	?>
		<tr>
			<td><?php echo $supplier['Supplier']['suppID'] ?></td>
			<td><?php echo $supplier['Supplier']['suppName'] ?></td>
			<td><?php echo $supplier['Supplier']['suppAddr1'] ?></td>
			<td><?php echo $supplier['Supplier']['suppEmail'] ?></td>
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