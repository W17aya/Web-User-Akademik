<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function printz($arg) {
	echo "<br /><pre>";
	if(is_string($arg)) echo $arg;
	else print_r($arg);
	echo "</pre>";
	die();
}

function fetchArray($sql, $return="all", $mode="std") {
	$output = null;
	$CI 	=& get_instance();
	$query	= $CI->db->query($sql);
	if($query === false) {
		show_error('err', 500, 'KESALAHAN MENGOLAH DATA', 'error_db');
	}
	else {
		$fields = $query->list_fields();
		$meta	= $query->field_data();
		$rows	= $query->num_rows();
		$data	= $query->result_array();
		$query->free_result();

		if($rows>0) {
			switch ($return) {
				case "one":
					$keys	= array_keys($data[0]);
					$output	= $data[0][$keys[0]];
					break;
				case "row":
					$output = $data[0];
					break;
				case "all":
					$output = $data;
					break;
			}
			unset($data);
		}
		switch ($mode) {
			case "std":
				return $output;
				break;
			case "all":
				return array('rows'=>$output, 'nrows'=>$nrows, 'fields'=>$fields, 'meta'=>$meta);
				break;
			case 'sql':
				printz($sql);
				break;
			case "out":
				printz($output);
				break;
		}
	}
}
// end of file db_helper.php
/* Location: ./application/helper/db_helper.php */