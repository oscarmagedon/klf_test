<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		KLF Media Test ::
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(['cake.generic.css','klfstyle.css']);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Wines</h2>
		</div>
		<div class="main-menu">
			<ul>
				<li>
					<?php 
					echo $this->Html->link('Wine List',['controller'=>'products','action'=>'wines'])
					?>
				</li>
				<li>
					<?php 
					echo $this->Html->link('Suppliers',['controller'=>'suppliers','action'=>'index'])
					?>
				</li>
				<li>
					<?php 
					echo $this->Html->link('Regions',['controller'=>'regions','action'=>'index'])
					?>
				</li>
				<!--
				<li>
					..
				</li>
				<li>
					<?php 
					echo $this->Html->link('To-do',['controller'=>'pages','action'=>'display','todo'])
					?>
				</li>
				<li>
					<?php 
					echo $this->Html->link('Home',['controller'=>'pages','action'=>'display','home'])
					?>
				</li>
				-->
			</ul>
		</div>
		<div class="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="footer">
			Oscar Vegas
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
