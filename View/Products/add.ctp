<h3>Add new wine</h3>


<?php
echo $this->Form->create('Product');


echo $this->Form->input('prodNum',['label'=>'Number','value'=>123456]);

echo $this->Form->input('prodName',['label'=>'Name','value'=>'Foo Wine']);

echo $this->Form->input('prodColorID',['label'=>'Color','options'=>$colors]);

echo $this->Form->input('prodRegionID',['label'=>'Region','options'=>$regions]);

echo $this->Form->input('prodFormat',['label'=>'Format','options'=>['750'=>'750ml','1000'=>'1 lt',] ]);

echo $this->Form->input('prodSellPrice',['label'=>'Sell Price','value'=>56.85]);

echo $this->Form->end('SAVE');
?>