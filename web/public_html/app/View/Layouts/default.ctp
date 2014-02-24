default
<?php echo $this->element('header')?>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<?php echo $this->element('nav');?>

			<div class="tabbable" id="portal-box">
				<?php echo $this->element('segment', array('segments' => $segments));?>	
				
				<div class="tab-content">
					<?php echo $this->element('block', array('blocks' => $blocks));?>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
