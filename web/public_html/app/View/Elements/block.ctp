<div class="tab-pane active" id="panel-main">
	<br/>
	<?php foreach($blocks as $key => $val): ?>
	<div class="panel panel-info block">
	  <div class="panel-heading">
	  	<h3 class="panel-title"><?php echo $val['Block']['name']?></h3>
	  </div>
	  <div class="panel-body">
	  	  <?php foreach($blockItems[$val['Block']['id']] as $itemKey => $itemVal):?>
	      	<a href="<?php echo $itemVal['BlockItem']['url'];?>"><?php echo $itemVal['BlockItem']['name']?></a>
	      <?php endforeach;?>
	  </div>
	</div>
</div>