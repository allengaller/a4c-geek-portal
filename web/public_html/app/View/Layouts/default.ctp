
<?php echo $this->element('header')?>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<?php echo $this->element('nav');?>

			<div class="tabbable" id="portal-box">
				<?php echo $this->element('segment');?>	
				
				<div class="tab-content">
					<?php echo $this->element('block');?>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
