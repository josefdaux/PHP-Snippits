<?php

/*Defines function for making names lower case and captialized at start.*/
function text_adjustment_func (a1, a2, a3) {
	first_name = ucfirst(strtolower(a1));
	middle_name = ucfirst(strtolower(a2));
	last_name = ucfirst(strtolower(a3));
	
	return array (first_name, middle_name, last_name)
}

?>