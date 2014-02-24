seg
<ul class="nav nav-tabs">
	<?php foreach($segments as $key => $val): ?>
		<li><a href="<?php echo '#panel-'.$val['Segment']['name'];?>" data-toggle="tab"><?php echo $val['Segment']['name'];?></a></li>
	<?php endforeach;?>
</ul>