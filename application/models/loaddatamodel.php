<?php  

/**
* 
*/
class LoadDataModel extends CI_Model{
	
	function __construct()
	{
		# code...
	}

	public function loadData( $form_code = '', $get = array() ){

		if ( $form_code == '014_mou' ) {

			// get defect data form form 014_mou
			$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
			$query_result_defect = $this->db->query($query_defect);

			if ( $query_result_defect->num_rows() > 0){

				$result = array();
				$defect_data = $query_result_defect->result();

				$where = "";

				if (!empty($get)){

					if ( $get['period'] == 'default_range' ) {

				        	if ($get['default_range_value'] == 'today') {

				        		$where .= " WHERE inspect_date = CURDATE()";

				        	} elseif ($get['default_range_value'] == 'yesterday') {

				        		$where .= " WHERE inspect_date = DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

				        	} elseif ($get['default_range_value'] == 'this_week') {

				        		$where .= " WHERE WEEK(inspect_date) = WEEK(CURDATE() - INTERVAL 0 WEEK)";

				        	} elseif ($get['default_range_value'] == 'last_week') {

				        		$where .= " WHERE WEEK(inspect_date) = WEEK(CURDATE() - INTERVAL 1 WEEK)";

				        	} elseif ($get['default_range_value'] == 'this_month') {

				        		$where .= " WHERE MONTH(inspect_date) = MONTH(CURDATE() - INTERVAL 0 MONTH)";

				        	} elseif ($get['default_range_value'] == 'last_month') {

				        		$where .= " WHERE MONTH(inspect_date) = MONTH(CURDATE() - INTERVAL 1 MONTH)";

				        	} elseif ($get['default_range_value'] == 'this_year') {

				        		$where .= " WHERE YEAR(inspect_date) = YEAR(CURDATE() - INTERVAL 0 YEAR)";

				        	} elseif ($get['default_range_value'] == 'last_year') {

				        		$where .= " WHERE YEAR(inspect_date) = YEAR(CURDATE() - INTERVAL 1 YEAR)";

				        	}
				        

				    } else {

			            $where .= " WHERE (inspect_date BETWEEN '". $get['custom_range_start_value']
			                    ."' AND '". $get['custom_range_end_value'] ."')";
				        
				    }

				    // filter data.
					if (isset($get['filterscount'])){

						$filterscount = $get['filterscount'];
						
						if ($filterscount > 0){

							$where .= " AND (";
							$tmpdatafield = "";
							$tmpfilteroperator = "";
							for ($i=0; $i < $filterscount; $i++){
								// get the filter's value.
								$filtervalue = $get["filtervalue" . $i];
								// get the filter's condition.
								$filtercondition = $get["filtercondition" . $i];
								// get the filter's column.
								$filterdatafield = $get["filterdatafield" . $i];
								// get the filter's operator.
								$filteroperator = $get["filteroperator" . $i];
								
								if ($tmpdatafield == "")
								{
									$tmpdatafield = $filterdatafield;			
								}
								else if ($tmpdatafield <> $filterdatafield)
								{
									$where .= ")AND(";
								}
								else if ($tmpdatafield == $filterdatafield)
								{
									if ($tmpfilteroperator == 0)
									{
										$where .= " AND ";
									}
									else $where .= " OR ";	
								}
								
								// build the "WHERE" clause depending on the filter's condition, value and datafield.
					        	switch($filtercondition)
								{
									case "NOT_EMPTY":
									case "NOT_NULL":
										$where .= " " . $filterdatafield . " NOT LIKE '" . "" ."'";
										break;
									case "EMPTY":
									case "NULL":
										$where .= " " . $filterdatafield . " LIKE '" . "" ."'";
										break;
									case "CONTAINS_CASE_SENSITIVE":
										$where .= " BINARY  " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
										break;
									case "CONTAINS":
										$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
										break;
									case "DOES_NOT_CONTAIN_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
										break;
									case "DOES_NOT_CONTAIN":
										$where .= " " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
										break;
									case "EQUAL_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " = '" . $filtervalue ."'";
										break;
									case "EQUAL":
										$where .= " " . $filterdatafield . " = '" . $filtervalue ."'";
										break;
									case "NOT_EQUAL_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " <> '" . $filtervalue ."'";
										break;
									case "NOT_EQUAL":
										$where .= " " . $filterdatafield . " <> '" . $filtervalue ."'";
										break;
									case "GREATER_THAN":
										$where .= " " . $filterdatafield . " > '" . $filtervalue ."'";
										break;
									case "LESS_THAN":
										$where .= " " . $filterdatafield . " < '" . $filtervalue ."'";
										break;
									case "GREATER_THAN_OR_EQUAL":
										$where .= " " . $filterdatafield . " >= '" . $filtervalue ."'";
										break;
									case "LESS_THAN_OR_EQUAL":
										$where .= " " . $filterdatafield . " <= '" . $filtervalue ."'";
										break;
									case "STARTS_WITH_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
										break;
									case "STARTS_WITH":
										$where .= " " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
										break;
									case "ENDS_WITH_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
										break;
									case "ENDS_WITH":
										$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
										break;
								}
												
								if ($i == $filterscount - 1)
								{
									$where .= ")";
								}
								
								$tmpfilteroperator = $filteroperator;
								$tmpdatafield = $filterdatafield;			
							}
						
						}
					}

				}

				$query_detail = "SELECT * FROM ( 
									SELECT 
										master_id,
										inspect_date,
										item_code,
										employee_id,
										employee_name,";

				// looping to insert data for table 014_mou_detail following the defect list data
				foreach ($defect_data as $key => $defect) {

					$defect_code = $defect->defect_code;
					$query_detail .= "SUM(CASE WHEN defect_code = '$defect_code' THEN qty ELSE 0 END) AS $defect_code, ";
									
				}

				$query_detail .= "SUM(qty) AS item_defect,
									item_ok,
									update_by,
									update_time,
									gypsum_type 
									FROM 014_mou_detail 
									LEFT JOIN 014_mou ON 014_mou.id = 014_mou_detail.master_id 
									LEFT JOIN employee_master ON 014_mou.employee_id = employee_master.id  
									GROUP BY master_id
								) AS data_table ". $where;

				$query_result_detail = $this->db->query( $query_detail );
				$result = $query_result_detail->result();

				return $result;

			} else {

				return false;

			}

		} elseif ( $form_code == "pareto_defect" ) {

			$query = "SELECT * FROM pareto_defect";

			// filter data.
			if (isset($get['filterscount'])){

				$filterscount = $get['filterscount'];
				
				if ($filterscount > 0){

					$where = " WHERE (";
					$tmpdatafield = "";
					$tmpfilteroperator = "";
					for ($i=0; $i < $filterscount; $i++){
						// get the filter's value.
						$filtervalue = $get["filtervalue" . $i];
						// get the filter's condition.
						$filtercondition = $get["filtercondition" . $i];
						// get the filter's column.
						$filterdatafield = $get["filterdatafield" . $i];
						// get the filter's operator.
						$filteroperator = $get["filteroperator" . $i];
						
						if ($tmpdatafield == "")
						{
							$tmpdatafield = $filterdatafield;			
						}
						else if ($tmpdatafield <> $filterdatafield)
						{
							$where .= ")AND(";
						}
						else if ($tmpdatafield == $filterdatafield)
						{
							if ($tmpfilteroperator == 0)
							{
								$where .= " AND ";
							}
							else $where .= " OR ";	
						}
						
						// build the "WHERE" clause depending on the filter's condition, value and datafield.
			        	switch($filtercondition)
						{
							case "NOT_EMPTY":
							case "NOT_NULL":
								$where .= " " . $filterdatafield . " NOT LIKE '" . "" ."'";
								break;
							case "EMPTY":
							case "NULL":
								$where .= " " . $filterdatafield . " LIKE '" . "" ."'";
								break;
							case "CONTAINS_CASE_SENSITIVE":
								$where .= " BINARY  " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
								break;
							case "CONTAINS":
								$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
								break;
							case "DOES_NOT_CONTAIN_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
								break;
							case "DOES_NOT_CONTAIN":
								$where .= " " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
								break;
							case "EQUAL_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " = '" . $filtervalue ."'";
								break;
							case "EQUAL":
								$where .= " " . $filterdatafield . " = '" . $filtervalue ."'";
								break;
							case "NOT_EQUAL_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " <> '" . $filtervalue ."'";
								break;
							case "NOT_EQUAL":
								$where .= " " . $filterdatafield . " <> '" . $filtervalue ."'";
								break;
							case "GREATER_THAN":
								$where .= " " . $filterdatafield . " > '" . $filtervalue ."'";
								break;
							case "LESS_THAN":
								$where .= " " . $filterdatafield . " < '" . $filtervalue ."'";
								break;
							case "GREATER_THAN_OR_EQUAL":
								$where .= " " . $filterdatafield . " >= '" . $filtervalue ."'";
								break;
							case "LESS_THAN_OR_EQUAL":
								$where .= " " . $filterdatafield . " <= '" . $filtervalue ."'";
								break;
							case "STARTS_WITH_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
								break;
							case "STARTS_WITH":
								$where .= " " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
								break;
							case "ENDS_WITH_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
								break;
							case "ENDS_WITH":
								$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
								break;
						}
										
						if ($i == $filterscount - 1)
						{
							$where .= ")";
						}
						
						$tmpfilteroperator = $filteroperator;
						$tmpdatafield = $filterdatafield;			
					}
					// build the query.
					$query = "SELECT * FROM pareto_defect " . $where;			
				}
			}

			$query = $this->db->query($query);

			if ($query->num_rows() > 0){

				$result = $query->result();
				return $result;

			} else {

				return false;

			}

		} elseif ( $form_code == '004_jig' ) {

			// get defect data form form 014_mou
			$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
			$query_result_defect = $this->db->query($query_defect);

			if ( $query_result_defect->num_rows() > 0){

				$result = array();
				$defect_data = $query_result_defect->result();

				$where = "";

				if (!empty($get)){

					if ( $get['period'] == 'default_range' ) {

				        	if ($get['default_range_value'] == 'today') {

				        		$where .= " WHERE inspect_date = CURDATE()";

				        	} elseif ($get['default_range_value'] == 'yesterday') {

				        		$where .= " WHERE inspect_date = DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

				        	} elseif ($get['default_range_value'] == 'this_week') {

				        		$where .= " WHERE WEEK(inspect_date) = WEEK(CURDATE() - INTERVAL 0 WEEK)";

				        	} elseif ($get['default_range_value'] == 'last_week') {

				        		$where .= " WHERE WEEK(inspect_date) = WEEK(CURDATE() - INTERVAL 1 WEEK)";

				        	} elseif ($get['default_range_value'] == 'this_month') {

				        		$where .= " WHERE MONTH(inspect_date) = MONTH(CURDATE() - INTERVAL 0 MONTH)";

				        	} elseif ($get['default_range_value'] == 'last_month') {

				        		$where .= " WHERE MONTH(inspect_date) = MONTH(CURDATE() - INTERVAL 1 MONTH)";

				        	} elseif ($get['default_range_value'] == 'this_year') {

				        		$where .= " WHERE YEAR(inspect_date) = YEAR(CURDATE() - INTERVAL 0 YEAR)";

				        	} elseif ($get['default_range_value'] == 'last_year') {

				        		$where .= " WHERE YEAR(inspect_date) = YEAR(CURDATE() - INTERVAL 1 YEAR)";

				        	}
				        

				    } else {

			            $where .= " WHERE (inspect_date BETWEEN '". $get['custom_range_start_value']
			                    ."' AND '". $get['custom_range_end_value'] ."')";
				        
				    }

				    // filter data.
					if (isset($get['filterscount'])){

						$filterscount = $get['filterscount'];
						
						if ($filterscount > 0){

							$where .= " AND (";
							$tmpdatafield = "";
							$tmpfilteroperator = "";
							for ($i=0; $i < $filterscount; $i++){
								// get the filter's value.
								$filtervalue = $get["filtervalue" . $i];
								// get the filter's condition.
								$filtercondition = $get["filtercondition" . $i];
								// get the filter's column.
								$filterdatafield = $get["filterdatafield" . $i];
								// get the filter's operator.
								$filteroperator = $get["filteroperator" . $i];
								
								if ($tmpdatafield == "")
								{
									$tmpdatafield = $filterdatafield;			
								}
								else if ($tmpdatafield <> $filterdatafield)
								{
									$where .= ")AND(";
								}
								else if ($tmpdatafield == $filterdatafield)
								{
									if ($tmpfilteroperator == 0)
									{
										$where .= " AND ";
									}
									else $where .= " OR ";	
								}
								
								// build the "WHERE" clause depending on the filter's condition, value and datafield.
					        	switch($filtercondition)
								{
									case "NOT_EMPTY":
									case "NOT_NULL":
										$where .= " " . $filterdatafield . " NOT LIKE '" . "" ."'";
										break;
									case "EMPTY":
									case "NULL":
										$where .= " " . $filterdatafield . " LIKE '" . "" ."'";
										break;
									case "CONTAINS_CASE_SENSITIVE":
										$where .= " BINARY  " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
										break;
									case "CONTAINS":
										$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
										break;
									case "DOES_NOT_CONTAIN_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
										break;
									case "DOES_NOT_CONTAIN":
										$where .= " " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
										break;
									case "EQUAL_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " = '" . $filtervalue ."'";
										break;
									case "EQUAL":
										$where .= " " . $filterdatafield . " = '" . $filtervalue ."'";
										break;
									case "NOT_EQUAL_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " <> '" . $filtervalue ."'";
										break;
									case "NOT_EQUAL":
										$where .= " " . $filterdatafield . " <> '" . $filtervalue ."'";
										break;
									case "GREATER_THAN":
										$where .= " " . $filterdatafield . " > '" . $filtervalue ."'";
										break;
									case "LESS_THAN":
										$where .= " " . $filterdatafield . " < '" . $filtervalue ."'";
										break;
									case "GREATER_THAN_OR_EQUAL":
										$where .= " " . $filterdatafield . " >= '" . $filtervalue ."'";
										break;
									case "LESS_THAN_OR_EQUAL":
										$where .= " " . $filterdatafield . " <= '" . $filtervalue ."'";
										break;
									case "STARTS_WITH_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
										break;
									case "STARTS_WITH":
										$where .= " " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
										break;
									case "ENDS_WITH_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
										break;
									case "ENDS_WITH":
										$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
										break;
								}
												
								if ($i == $filterscount - 1)
								{
									$where .= ")";
								}
								
								$tmpfilteroperator = $filteroperator;
								$tmpdatafield = $filterdatafield;			
							}
						
						}
					}

				}


				$query_detail = "SELECT * FROM (
									SELECT 
										master_id,
										inspect_date,
										item_code,
										employee_id,
										employee_name,";

				// looping to insert data for table 014_mou_detail following the defect list data
				foreach ($defect_data as $key => $defect) {

					$defect_code = $defect->defect_code;
					$query_detail .= "SUM(CASE WHEN defect_code = '$defect_code' THEN qty ELSE 0 END) AS $defect_code, ";
									
				}

				$query_detail .= "SUM(qty) AS item_defect,
									item_ok,
									update_by,
									update_time 
									FROM 004_jig_detail 
									LEFT JOIN 004_jig ON 004_jig.id = 004_jig_detail.master_id 
									LEFT JOIN employee_master ON 004_jig.employee_id = employee_master.id  
									GROUP BY master_id
								) AS data_table ". $where;

				$query_result_detail = $this->db->query( $query_detail );
				$result = $query_result_detail->result();
				return $result;

			} else {

				return false;

			}

		} elseif ( $form_code == '002_jig' ) {

			// get defect data form form 014_mou
			$query_defect = "SELECT * FROM pareto_defect WHERE forms LIKE '%$form_code%' ";
			$query_result_defect = $this->db->query($query_defect);

			if ( $query_result_defect->num_rows() > 0){

				$result = array();
				$defect_data = $query_result_defect->result();

				$where = "";

				if (!empty($get)){

					if ( $get['period'] == 'default_range' ) {

				        	if ($get['default_range_value'] == 'today') {

				        		$where .= " WHERE inspect_date = CURDATE()";

				        	} elseif ($get['default_range_value'] == 'yesterday') {

				        		$where .= " WHERE inspect_date = DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

				        	} elseif ($get['default_range_value'] == 'this_week') {

				        		$where .= " WHERE WEEK(inspect_date) = WEEK(CURDATE() - INTERVAL 0 WEEK)";

				        	} elseif ($get['default_range_value'] == 'last_week') {

				        		$where .= " WHERE WEEK(inspect_date) = WEEK(CURDATE() - INTERVAL 1 WEEK)";

				        	} elseif ($get['default_range_value'] == 'this_month') {

				        		$where .= " WHERE MONTH(inspect_date) = MONTH(CURDATE() - INTERVAL 0 MONTH)";

				        	} elseif ($get['default_range_value'] == 'last_month') {

				        		$where .= " WHERE MONTH(inspect_date) = MONTH(CURDATE() - INTERVAL 1 MONTH)";

				        	} elseif ($get['default_range_value'] == 'this_year') {

				        		$where .= " WHERE YEAR(inspect_date) = YEAR(CURDATE() - INTERVAL 0 YEAR)";

				        	} elseif ($get['default_range_value'] == 'last_year') {

				        		$where .= " WHERE YEAR(inspect_date) = YEAR(CURDATE() - INTERVAL 1 YEAR)";

				        	}
				        

				    } else {

			            $where .= " WHERE (inspect_date BETWEEN '". $get['custom_range_start_value']
			                    ."' AND '". $get['custom_range_end_value'] ."')";
				        
				    }

				    // filter data.
					if (isset($get['filterscount'])){

						$filterscount = $get['filterscount'];
						
						if ($filterscount > 0){

							$where .= " AND (";
							$tmpdatafield = "";
							$tmpfilteroperator = "";
							for ($i=0; $i < $filterscount; $i++){
								// get the filter's value.
								$filtervalue = $get["filtervalue" . $i];
								// get the filter's condition.
								$filtercondition = $get["filtercondition" . $i];
								// get the filter's column.
								$filterdatafield = $get["filterdatafield" . $i];
								// get the filter's operator.
								$filteroperator = $get["filteroperator" . $i];
								
								if ($tmpdatafield == "")
								{
									$tmpdatafield = $filterdatafield;			
								}
								else if ($tmpdatafield <> $filterdatafield)
								{
									$where .= ")AND(";
								}
								else if ($tmpdatafield == $filterdatafield)
								{
									if ($tmpfilteroperator == 0)
									{
										$where .= " AND ";
									}
									else $where .= " OR ";	
								}
								
								// build the "WHERE" clause depending on the filter's condition, value and datafield.
					        	switch($filtercondition)
								{
									case "NOT_EMPTY":
									case "NOT_NULL":
										$where .= " " . $filterdatafield . " NOT LIKE '" . "" ."'";
										break;
									case "EMPTY":
									case "NULL":
										$where .= " " . $filterdatafield . " LIKE '" . "" ."'";
										break;
									case "CONTAINS_CASE_SENSITIVE":
										$where .= " BINARY  " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
										break;
									case "CONTAINS":
										$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
										break;
									case "DOES_NOT_CONTAIN_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
										break;
									case "DOES_NOT_CONTAIN":
										$where .= " " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
										break;
									case "EQUAL_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " = '" . $filtervalue ."'";
										break;
									case "EQUAL":
										$where .= " " . $filterdatafield . " = '" . $filtervalue ."'";
										break;
									case "NOT_EQUAL_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " <> '" . $filtervalue ."'";
										break;
									case "NOT_EQUAL":
										$where .= " " . $filterdatafield . " <> '" . $filtervalue ."'";
										break;
									case "GREATER_THAN":
										$where .= " " . $filterdatafield . " > '" . $filtervalue ."'";
										break;
									case "LESS_THAN":
										$where .= " " . $filterdatafield . " < '" . $filtervalue ."'";
										break;
									case "GREATER_THAN_OR_EQUAL":
										$where .= " " . $filterdatafield . " >= '" . $filtervalue ."'";
										break;
									case "LESS_THAN_OR_EQUAL":
										$where .= " " . $filterdatafield . " <= '" . $filtervalue ."'";
										break;
									case "STARTS_WITH_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
										break;
									case "STARTS_WITH":
										$where .= " " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
										break;
									case "ENDS_WITH_CASE_SENSITIVE":
										$where .= " BINARY " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
										break;
									case "ENDS_WITH":
										$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
										break;
								}
												
								if ($i == $filterscount - 1)
								{
									$where .= ")";
								}
								
								$tmpfilteroperator = $filteroperator;
								$tmpdatafield = $filterdatafield;			
							}
						
						}
					}

				}


				$query_detail = "SELECT * FROM (
									SELECT 
										master_id,
										inspect_date,
										inspect_time,
										item_code,
										machine_id,
										employee_id,
										employee_name,";

				// looping to insert data for table 014_mou_detail following the defect list data
				foreach ($defect_data as $key => $defect) {

					$defect_code = $defect->defect_code;
					$query_detail .= "SUM(CASE WHEN defect_code = '$defect_code' THEN qty ELSE 0 END) AS $defect_code, ";
									
				}

				$query_detail .= "SUM(qty) AS item_defect,
									item_ok,
									update_by,
									update_time 
									FROM 002_jig_detail 
									LEFT JOIN 002_jig ON 002_jig.id = 002_jig_detail.master_id 
									LEFT JOIN employee_master ON 002_jig.employee_id = employee_master.id  
									GROUP BY master_id
								) AS data_table ". $where;

				$query_result_detail = $this->db->query( $query_detail );
				$result = $query_result_detail->result();
				return $result;

			} else {

				return false;

			}

		} elseif ( $form_code == "data_item" ) {

			$where = "";

			// filter data.
			if (isset($get['filterscount'])){

				$filterscount = $get['filterscount'];
				
				if ($filterscount > 0){

					$where = " WHERE (";
					$tmpdatafield = "";
					$tmpfilteroperator = "";
					for ($i=0; $i < $filterscount; $i++){
						// get the filter's value.
						$filtervalue = $get["filtervalue" . $i];
						// get the filter's condition.
						$filtercondition = $get["filtercondition" . $i];
						// get the filter's column.
						$filterdatafield = $get["filterdatafield" . $i];
						// get the filter's operator.
						$filteroperator = $get["filteroperator" . $i];
						
						if ($tmpdatafield == "")
						{
							$tmpdatafield = $filterdatafield;			
						}
						else if ($tmpdatafield <> $filterdatafield)
						{
							$where .= ")AND(";
						}
						else if ($tmpdatafield == $filterdatafield)
						{
							if ($tmpfilteroperator == 0)
							{
								$where .= " AND ";
							}
							else $where .= " OR ";	
						}
						
						// build the "WHERE" clause depending on the filter's condition, value and datafield.
			        	switch($filtercondition)
						{
							case "NOT_EMPTY":
							case "NOT_NULL":
								$where .= " " . $filterdatafield . " NOT LIKE '" . "" ."'";
								break;
							case "EMPTY":
							case "NULL":
								$where .= " " . $filterdatafield . " LIKE '" . "" ."'";
								break;
							case "CONTAINS_CASE_SENSITIVE":
								$where .= " BINARY  " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
								break;
							case "CONTAINS":
								$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
								break;
							case "DOES_NOT_CONTAIN_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
								break;
							case "DOES_NOT_CONTAIN":
								$where .= " " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
								break;
							case "EQUAL_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " = '" . $filtervalue ."'";
								break;
							case "EQUAL":
								$where .= " " . $filterdatafield . " = '" . $filtervalue ."'";
								break;
							case "NOT_EQUAL_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " <> '" . $filtervalue ."'";
								break;
							case "NOT_EQUAL":
								$where .= " " . $filterdatafield . " <> '" . $filtervalue ."'";
								break;
							case "GREATER_THAN":
								$where .= " " . $filterdatafield . " > '" . $filtervalue ."'";
								break;
							case "LESS_THAN":
								$where .= " " . $filterdatafield . " < '" . $filtervalue ."'";
								break;
							case "GREATER_THAN_OR_EQUAL":
								$where .= " " . $filterdatafield . " >= '" . $filtervalue ."'";
								break;
							case "LESS_THAN_OR_EQUAL":
								$where .= " " . $filterdatafield . " <= '" . $filtervalue ."'";
								break;
							case "STARTS_WITH_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
								break;
							case "STARTS_WITH":
								$where .= " " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
								break;
							case "ENDS_WITH_CASE_SENSITIVE":
								$where .= " BINARY " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
								break;
							case "ENDS_WITH":
								$where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
								break;
						}
										
						if ($i == $filterscount - 1)
						{
							$where .= ")";
						}
						
						$tmpfilteroperator = $filteroperator;
						$tmpdatafield = $filterdatafield;			
					}
				
				}
			}

			// build the query.
			$query = "SELECT * FROM (
						SELECT 
						item_code,
						item_name,
						target_qty AS item_target,
						th.period_time AS item_target_period,
						th.last_update AS item_target_valid_from,
						wh.weight AS item_weight,
						wh.last_update AS item_weight_valid_from
						FROM 
						items i 
						left join target_history th on i.id = th.item_id 
						left join weight_history wh on i.id = wh.item_id 
						group by i.item_code 
						order by th.last_update, wh.last_update DESC
					) AS data_item " . $where;			

			$query = $this->db->query($query);

			if ($query->num_rows() > 0){

				$result = $query->result();
				return $result;

			} else {

				return false;

			}

		} elseif ( $form_code == 'employee_name' ) {
			//for ajax typehead
			// get defect data form form 014_mou
			$query = "SELECT id, employee_name FROM employee_master ";
			$query_result = $this->db->query($query);
			$result = $query_result->result();
			return $result;

		} elseif ( $form_code == 'item_name' ) {
			//for ajax typehead
			// get defect data form form 014_mou
			$query = "SELECT item_code, item_name FROM items ";
			$query_result = $this->db->query($query);
			$result = $query_result->result();
			return $result;

		}
		
	}

}
?>