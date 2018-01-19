<div id="<?php echo $key; ?> Message" class="<?php echo !empty($params['class']) ? $params['class'] : 'message'; ?>">


	<div class="alert alert-danger">


	<h4><?php foreach ($message as $element) 
	//echo($element[0]);
	 echo $this->Html->tag('ul', $element[0]);


	?> </div></h4>




</div>


									
								


