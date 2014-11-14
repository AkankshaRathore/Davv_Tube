<?php 
/**
 * PHP Grid Component
 *
 * @author Abu Ghufran <gridphp@gmail.com> - http://www.phpgrid.org
 * @version 1.4.6
 * @license: see license.txt included in package
 */
 
error_reporting(E_ALL&~E_NOTICE&~E_DEPRECATED);                                                                                                                                                                                                                                                                                                                                                                                    class jqgrid
{ 	var $options = array(); 
	var $select_command; 	
	var $table; 	
	var $actions; 
	var $V7ed201fa;
	var $V82e89bfb; 
	var $events;	
 function jqgrid($V874bee68 = null)
	{
 if (!isset($_SESSION) || !is_array($_SESSION)) 
	session_start();
	$this->V82e89bfb= "mysql";
 	$Vff4a0084["datatype"] = "json";
	$Vff4a0084["rowNum"] = 20;
 	$Vff4a0084["width"] = 900;
	$Vff4a0084["height"] = 350;
	$Vff4a0084["rowList"] = array(10,20,30);
	$Vff4a0084["viewrecords"] = true;
	$Vff4a0084["scrollrows"] = true;
	$Vff4a0084["url"] = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
	$Vff4a0084["editurl"] = $Vff4a0084["url"];
	$Vff4a0084["cellurl"] = $Vff4a0084["url"];  
	$Vff4a0084["scroll"] = 0;
	$Vff4a0084["sortable"] = true;
	$Vff4a0084["cellEdit"] = false;
	$Vff4a0084["add_options"] = array("closeAfterAdd"=>true);
	$Vff4a0084["edit_options"] = array("closeAfterEdit"=>true);
	$this->options = $Vff4a0084;
	$this->actions["showhidecolumns"] = true;
	$this->actions["inlineadd"] = false;
	$this->actions["search"] = "";
	$this->actions["export"] = false;
}
 private function strip($V2063c160)
	{
	 if(get_magic_quotes_gpc() != 0)
	 { if(is_array($V2063c160))
		  if ( array_is_associative($V2063c160) )
			 { foreach( $V2063c160 as $V8ce4b16b=>$V9e3669d1)
				 $Vafb0f4ba[$V8ce4b16b] = stripslashes($V9e3669d1);$V2063c160 = $Vafb0f4ba;
			  }
		  else  for($V363b122c = 0; $V363b122c < sizeof($V2063c160); $V363b122c++)
			 $V2063c160[$V363b122c] = stripslashes($V2063c160[$V363b122c]);
	else $V2063c160 = stripslashes($V2063c160);
	}
	return $V2063c160;}			
 private function construct_where($V03c7c0ac)
	{ 
	$V48c03a14 = "";
	$Vcca5019f = array( 'eq'=>" = ", 'ne'=>" <> ", 'lt'=>" < ", 'le'=>" <= ", 'gt'=>" > ", 'ge'=>" >= ", 'bw'=>" LIKE ", 'bn'=>" NOT LIKE ", 'in'=>" IN ", 'ni'=>" NOT IN ", 'ew'=>" LIKE ", 'en'=>" NOT LIKE ", 'cn'=>" LIKE " , 'nc'=>" NOT LIKE " );
	if ($V03c7c0ac) {
	 $Vdecafcb6 = json_decode($V03c7c0ac,true);
		if(is_array($Vdecafcb6))
		 {
			 $Ved780ed8 = $Vdecafcb6['groupOp'];
			$Va4f86f7b = $Vdecafcb6['rules'];
			$V865c0c0b =0;
			foreach($Va4f86f7b as $V3c6e0b8a=>$V3a6d0284)
			  { 
				foreach($this->options["colModel"] as $V73d4fc33)
				 {
					 if ($V3a6d0284['field'] == $V73d4fc33["name"] && !empty($V73d4fc33["dbname"]))
						 {
							 $V3a6d0284['field'] = $V73d4fc33["dbname"];
								break;
						}
				}
			$V06e3d36f = $V3a6d0284['field'];
			$V11d8c28a = $V3a6d0284['op'];
			$V9e3669d1 = $V3a6d0284['data'];
			if(isset($V9e3669d1) && isset($V11d8c28a))
				 {
				 $V865c0c0b++; 
				 $V9e3669d1 = $this->to_sql($V06e3d36f,$V11d8c28a,$V9e3669d1);
				 if ($V865c0c0b == 1) $V48c03a14 = " AND ";
					else $V48c03a14 .= " " .$Ved780ed8." ";
				switch ($V11d8c28a)
				 {
				  case 'in' : case 'ni' : $V48c03a14 .= $V06e3d36f.$Vcca5019f[$V11d8c28a]." (".$V9e3669d1.")";
					break;
				 default: $V48c03a14 .= $V06e3d36f.$Vcca5019f[$V11d8c28a].$V9e3669d1;}}}}}
		return $V48c03a14;	}		
 private function to_sql($V06e3d36f, $oper, $V3a6d0284)
 	{ 
	 if($oper=='bw' || $oper=='bn')
	 return "'" . addslashes($V3a6d0284) . "%'";
	else if ($oper=='ew' || $oper=='en') 
	return "'%" . addcslashes($V3a6d0284) . "'";
	else if ($oper=='cn' || $oper=='nc') return "'%" . addslashes($V3a6d0284) . "%'";
	else return "'" . addslashes($V3a6d0284) . "'";}	
 function set_events($V47c80780)
	{ $this->events = $V47c80780;}
 function get_dropdown_values($Vac5c74b6)
	{ $V341be97d = array();
  		if ($this->V7ed201fa)
		 $Vb4a88417 = $this->V7ed201fa->Execute( $Vac5c74b6 ) or die("Couldn't execute query. ".$this->V7ed201fa->ErrorMsg()." - $Vac5c74b6");
		else
		  $Vb4a88417 = mysql_query($Vac5c74b6);
		if ($this->V7ed201fa)
		 { $V47c80780 = $Vb4a88417->GetRows();
			 foreach($V47c80780 as $V3a2d7564) $V341be97d[] = $V3a2d7564["k"].":".$V3a2d7564["v"];}
				else { while($V3a2d7564 = mysql_fetch_array($Vb4a88417,MYSQL_ASSOC))
					 { $V341be97d[] = $V3a2d7564["k"].":".$V3a2d7564["v"];}}
				 $V341be97d = implode($V341be97d,";");
	return $V341be97d;}	
 function set_actions($V47c80780)
	{ 
	if (empty($V47c80780))
	 $V47c80780 = array(); 
	  if (empty($this->actions))
	 $this->actions = array(); 
	 foreach($V47c80780 as $V8ce4b16b=>$V9e3669d1)
		 if (is_array($V9e3669d1))
	 { if (!isset($this->actions[$V8ce4b16b])) 
		$this->actions[$V8ce4b16b] = array();
		 $V47c80780[$V8ce4b16b] = array_merge($V47c80780[$V8ce4b16b],$this->actions[$V8ce4b16b]);}
	   $this->actions = array_merge($this->actions,$V47c80780);
	}
 function set_options($options)
	{ 
	if (empty($V47c80780)) 
		$V47c80780 = array();
	if (empty($this->options))
		 $this->options = array(); 
	 foreach($options as $V8ce4b16b=>$V9e3669d1)
	 if (is_array($V9e3669d1))
	 { if (!isset($this->options[$V8ce4b16b])) 
		$this->options[$V8ce4b16b] = array(); 
		$options[$V8ce4b16b] = array_merge($options[$V8ce4b16b],$this->options[$V8ce4b16b]);
	}
	 $this->options = array_merge($this->options,$options);}	
 function set_columns($V07d43db2 = null)
	{ if (!$this->table && !$this->select_command) die("Please specify tablename or select command"); 
	 if (!$this->select_command && $this->table)
	{
 		if($this->table==emp)
	 		$this->select_command = "SELECT * FROM ".$this->table;
		if($this->table==contest)
	 		$this->select_command = "SELECT * FROM ".$this->table;
	}	
  if (stristr($this->select_command,"WHERE") === false)
	 {  if (($V83878c91 = stripos($this->select_command,"GROUP BY")) !== false)
		 { $Vea2b2676 = substr($this->select_command,0,$V83878c91);$V7f021a14 = substr($this->select_command,$V83878c91);
			$this->select_command = $Vea2b2676." WHERE 1=1 ".$V7f021a14;
		}
	    else $this->select_command .= " WHERE 1=1";
	}
	  $this->select_command = preg_replace("/(\r|\n)/"," ",$this->select_command);
		$this->select_command = preg_replace("/[ ]+/"," ",$this->select_command);
	  $Vac5c74b6 = $this->select_command . " LIMIT 1 OFFSET 0"; 
	 $Vac5c74b6 = $this->Fe9b3c794($Vac5c74b6,$this->V82e89bfb);
	 if ($this->V7ed201fa)
	 { $Vb4a88417 = $this->V7ed201fa->Execute( $Vac5c74b6 ) or die("Couldn't execute query. ".$this->V7ed201fa->ErrorMsg()." - $Vac5c74b6");
	   $V47c80780 = $Vb4a88417->FetchRow();
	   foreach($V47c80780 as $V8ce4b16b=>$V3a2d7564)
		 $V8fa14cdd[] = $V8ce4b16b;
	}else
	 { 
		 $Vb4a88417 = mysql_query($Vac5c74b6) or die("Couldn't execute query. ".mysql_error()." - $Vac5c74b6");
		 $Vb19f58c3 = mysql_num_fields($Vb4a88417);
		 for ($V865c0c0b=0; $V865c0c0b < $Vb19f58c3; $V865c0c0b++)
		  {
			 $V8fa14cdd[] = mysql_field_name($Vb4a88417, $V865c0c0b);
		 }
	}
	  if (!$V07d43db2)
	 {
		 foreach($V8fa14cdd as $V4a8a08f0)
		 { 
			$Vd89e2ddb["title"] = ucwords(str_replace("_"," ",$V4a8a08f0));
		   	$Vd89e2ddb["name"] = $V4a8a08f0;
			$Vd89e2ddb["index"] = $V4a8a08f0;
			$Vd89e2ddb["editable"] = true;
			$Vd89e2ddb["editoptions"] = array("size"=>20);
			$Vcb719520[] = $Vd89e2ddb;
		}
	}
	 if (!$V07d43db2)
	 $V07d43db2 = $Vcb719520;
	  for($V865c0c0b=0;$V865c0c0b<count($V07d43db2);$V865c0c0b++)
	 {
	 $V07d43db2[$V865c0c0b]["name"] = str_replace(".","::",$V07d43db2[$V865c0c0b]["name"]);
	$V07d43db2[$V865c0c0b]["index"] = $V07d43db2[$V865c0c0b]["name"]; 
	if (isset($V07d43db2[$V865c0c0b]["formatter"]) && $V07d43db2[$V865c0c0b]["formatter"] == "date" && empty($V07d43db2[$V865c0c0b]["formatoptions"]))
	 $V07d43db2[$V865c0c0b]["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'Y-m-d'); 
	if (isset($V07d43db2[$V865c0c0b]["formatter"]) && $V07d43db2[$V865c0c0b]["formatter"] == "date")
	 $V07d43db2[$V865c0c0b]["editoptions"]["dataInit"] = "function(o){link_dtpicker(o);}";
	}
	  $this->options["colModel"] = $V07d43db2;
	foreach($V07d43db2 as $V4a8a08f0)
	 {
		 $this->options["colNames"][] = $V4a8a08f0["title"];
	  }
	}	
 function render($Vab930cbb)
	{ 
	if (isset($_REQUEST["subgrid"]))
	 $Vab930cbb .= "_".$_REQUEST["subgrid"];
	  if (!$this->options["colNames"])
	 	$this->set_columns();
		 if (isset($_POST['oper']))
		 {
			 $V11d8c28a = $_POST['oper'];
			 $V8d777f38 = $_POST;
			 $Vb80bb774 = $V8d777f38['id'];
		         $V2dab5f16 = $this->options["colModel"][0]["index"];
			 switch($V11d8c28a)
			 {
				 case "add": unset($V8d777f38['id']);
					     unset($V8d777f38['oper']);
						 $V74c9e6d4 = array();
						foreach($V8d777f38 as $V8ce4b16b=>$V9e3669d1)
						 {
							  if (strstr($V8ce4b16b,"::") !== false)
								 list($Vfa816edb,$V8ce4b16b) = explode("::",$V8ce4b16b);
								$V8ce4b16b = addslashes($V8ce4b16b);
								$V9e3669d1 = addslashes($V9e3669d1);
								$Vd1548b8d[] = "$V8ce4b16b";
								$Ve0320a58[] = "'$V9e3669d1'";
						}
						 $Va5dbc014 = "(".implode(",",$Vd1548b8d).") VALUES (".implode(",",$Ve0320a58).")"; 
						$Vac5c74b6 = "INSERT INTO {$this->table} $Va5dbc014";
						if ($this->V7ed201fa)
						 { 
							$this->V7ed201fa->Execute($Vac5c74b6) or die("Couldn't execute query. ".$this->V7ed201fa->ErrorMsg()." - $Vac5c74b6");
							$V2e574ab0 = $this->V7ed201fa->Insert_ID();
						}else
						 {
							 mysql_query($Vac5c74b6) or die("Couldn't execute query. ".mysql_error()." - $Vac5c74b6");
							$V2e574ab0 = mysql_insert_id();
							}  if ($Vb80bb774 == "new_row") die($V2dab5f16."#".$V2e574ab0);
						break;
				 case "edit": unset($V8d777f38['id']);
					      unset($V8d777f38['oper']);
					      $V74c9e6d4 = array();
					      foreach($V8d777f38 as $V8ce4b16b=>$V9e3669d1)
					      {
						  if (strstr($V8ce4b16b,"::") !== false)
							 list($Vfa816edb,$V8ce4b16b) = explode("::",$V8ce4b16b);
							 $V8ce4b16b = addslashes($V8ce4b16b);
							 $V9e3669d1 = addslashes($V9e3669d1);
							 $V74c9e6d4[] = "$V8ce4b16b='$V9e3669d1'";
					     }
					 $V74c9e6d4 = "SET ".implode(",",$V74c9e6d4);
				 if (strstr($V2dab5f16,"::") !== false)
				 {
					 $V2dab5f16 = explode("::",$V2dab5f16);
					 $V2dab5f16 = $V2dab5f16[1];}
					 $Vac5c74b6 = "UPDATE {$this->table} $V74c9e6d4 WHERE $V2dab5f16 = '$Vb80bb774'"; 
					 if ($this->V7ed201fa)
					 $this->V7ed201fa->Execute($Vac5c74b6) or die("Couldn't execute query. ".$this->V7ed201fa->ErrorMsg()." - $Vac5c74b6");
					else mysql_query($Vac5c74b6) or die("Couldn't execute query. ".mysql_error()." - $Vac5c74b6");break; 
		 case "del":
					  if (strstr($V2dab5f16,"::") !== false)
					 { 
						$V2dab5f16 = explode("::",$V2dab5f16);
						$V2dab5f16 = $V2dab5f16[1];
					 } 
					$Vb80bb774 = "'".implode("','",explode(",",$Vb80bb774))."'";
					$Vac5c74b6 = "DELETE FROM {$this->table} WHERE $V2dab5f16 IN ($Vb80bb774)";
					if ($this->V7ed201fa)
					 $this->V7ed201fa->Execute($Vac5c74b6) or die("Couldn't execute query. ".$this->V7ed201fa->ErrorMsg()." - $Vac5c74b6");
					else mysql_query($Vac5c74b6) or die("Couldn't execute query. ".mysql_error()." - $Vac5c74b6");
					break;
					} die;
					} 
					 $V6148bbf9 = ""; 
					if (!isset($_REQUEST['_search']))
					 $_REQUEST['_search'] = ""; 
					$V9d9a9e7d = $this->strip($_REQUEST['_search']);
					if($V9d9a9e7d=='true')
					  { 
						 $V39b7b22d = $this->strip($_REQUEST['searchField']);
						 $V07d43db2 = array();
						 foreach($this->options["colModel"] as $Vd89e2ddb) $V07d43db2[] = $Vd89e2ddb["index"];
						  if (!$V39b7b22d)
 						 {
							 $V29d719b2 = $this->strip($_REQUEST['filters']);
							 $V6148bbf9 = $this->construct_where($V29d719b2);
						}
						  else 
 						{
							 if(in_array($V39b7b22d,$V07d43db2))  
						{	
							 $V930b8af8 = $this->strip($_REQUEST['searchString']);
							 $V2acdba16 = $this->strip($_REQUEST['searchOper']);
						         $V6148bbf9 .= " AND ".$V39b7b22d;
							 switch ($V2acdba16)
							 {
								  case "eq": if(is_numeric($V930b8af8))
										 {
											 $V6148bbf9 .= " = ".$V930b8af8;
										 }
									     else
										 {
											 $V6148bbf9 .= " = '".$V930b8af8."'";
										 }
								    		 break;
								  case "ne": if(is_numeric($V930b8af8))
										 {
											 $V6148bbf9 .= " <> ".$V930b8af8;
										 }
									     else
										 {
											 $V6148bbf9 .= " <> '".$V930b8af8."'";
										 }
											break;
								case "lt": if(is_numeric($V930b8af8)) 
									{
										 $V6148bbf9 .= " < ".$V930b8af8;
									}
									 else
									 {
										 $V6148bbf9 .= " < '".$V930b8af8."'";
									 }
										break;
								case "le": if(is_numeric($V930b8af8))
								 {
									 $V6148bbf9 .= " <= ".$V930b8af8;}
									 else { 
									$V6148bbf9 .= " <= '".$V930b8af8."'";}break;
								case "gt": if(is_numeric($V930b8af8))
										 { $V6148bbf9 .= " > ".$V930b8af8;}
									 else { $V6148bbf9 .= " > '".$V930b8af8."'";}break;
								case "ge": if(is_numeric($V930b8af8)) 
									{ $V6148bbf9 .= " >= ".$V930b8af8;}
									 else { $V6148bbf9 .= " >= '".$V930b8af8."'";}break;
								case "ew": $V6148bbf9 .= " LIKE '%".$V930b8af8."'";break;
								case "en": $V6148bbf9 .= " NOT LIKE '%".$V930b8af8."'";break;
								case "cn": $V6148bbf9 .= " LIKE '%".$V930b8af8."%'";break;
								case "nc": $V6148bbf9 .= " NOT LIKE '%".$V930b8af8."%'";break;
								case "in": $V6148bbf9 .= " IN (".$V930b8af8.")";break;
								case "ni": $V6148bbf9 .= " NOT IN (".$V930b8af8.")";break;
								case "bw": default: $V930b8af8 .= "%";
								$V6148bbf9 .= " LIKE '".$V930b8af8."'";break;}}}
	  $_SESSION["jqgrid_filter"] = $V6148bbf9;
}elseif($V9d9a9e7d=='false')
  {
	 $_SESSION["jqgrid_filter"] = '';
 } 
 if (isset($_GET['page'])) 
	{ 
		$page = $_GET['page'];  
		$Vaa9f73ee = $_GET['rows'];
	        $sidx = $_GET['sidx']; 
	        $sord = $_GET['sord']; 
	        if(!$sidx)
			 $sidx = 1;
		if(!$Vaa9f73ee) 
			$Vaa9f73ee = 20;
		$sidx = str_replace("::",".",$sidx);
		  if (($V83878c91 = stripos($this->select_command,"GROUP BY")) !== false)
		 {
			 $Vc89ab233 = preg_replace("/SELECT (.*) FROM/i","SELECT 1 as c FROM",$this->select_command);
		         $V83878c91 = stripos($Vc89ab233,"GROUP BY");
			 $V4f50fef9 = substr($Vc89ab233,0,$V83878c91);
			 $V576a4f30 = substr($Vc89ab233,$V83878c91);
			 $Vc89ab233 = "SELECT count(*) as c FROM ($V4f50fef9 $V6148bbf9 $V00928fab) as o";
		}else
		 {
			 $Vc89ab233 = $this->select_command.$V6148bbf9;
			 $Vc89ab233 = "SELECT count(*) as c FROM (".$Vc89ab233.") as table_count";
		}
		 if ($this->V7ed201fa)
		 {
			 $Vb4a88417 = $this->V7ed201fa->Execute($Vc89ab233) or die("Couldn't execute query. ".$this->V7ed201fa->ErrorMsg()." - $Vc89ab233");
			 $Vf1965a85 = $Vb4a88417->FetchRow();
			 $Vf1965a85 = $Vf1965a85[0];
		}
		else
		 {
			 $Vb4a88417 = mysql_query($Vc89ab233) or die("Couldn't execute query. ".mysql_error()." - $Vc89ab233");
			 $Vf1965a85 = mysql_fetch_array($Vb4a88417,MYSQL_ASSOC);
		}
		$Ve2942a04 = $Vf1965a85['c'];
		if( $Ve2942a04 > 0 )
		 {
			 $Vae0fe0cc = ceil($Ve2942a04/$Vaa9f73ee);
		}
		 else
		 { $Vae0fe0cc = 0;}
		if ($page > $Vae0fe0cc) 
			$page=$Vae0fe0cc;
			$Vea2b2676 = $Vaa9f73ee*$page - $Vaa9f73ee;
	        if ($Vea2b2676<0)
			 $Vea2b2676 = 0;
         	$Vfb5270b9 = new stdClass();
		 $Vfb5270b9->page = $page;
		 $Vfb5270b9->total = $Vae0fe0cc;
		 $Vfb5270b9->records = $Ve2942a04;
		if (($V83878c91 = stripos($this->select_command,"GROUP BY")) !== false)
		 {
			 $V4f50fef9 = substr($this->select_command,0,$V83878c91);$V00928fab = substr($this->select_command,$V83878c91);
			 $V9778840a = "$V4f50fef9 $V6148bbf9 $V00928fab ORDER BY $sidx $sord LIMIT $Vaa9f73ee OFFSET $Vea2b2676";
		 }else
		 {
			 $V9778840a = $this->select_command.$V6148bbf9." ORDER BY $sidx $sord LIMIT $Vaa9f73ee OFFSET $Vea2b2676";
		 }
			$V9778840a = $this->Fe9b3c794($V9778840a,$this->V82e89bfb); 
		if ($this->V7ed201fa) { $Vb4a88417 = $this->V7ed201fa->Execute( $V9778840a ) or die("Couldn't execute query. ".$this->V7ed201fa->ErrorMsg()." - $V9778840a");
			$rows = $Vb4a88417->GetRows();
		if (count($rows) > $Vaa9f73ee) $rows = array_slice($rows,count($rows) - $Vaa9f73ee);
		}
		else {
		 $rows = array();
		$Vb4a88417 = mysql_query( $V9778840a ) or die("Couldn't execute query. ".mysql_error()." - $V9778840a");
		 while($Vf1965a85 = mysql_fetch_array($Vb4a88417,MYSQL_ASSOC))
		 $rows[] = $Vf1965a85;
		}
		  if (!empty($this->events["on_data_display"]))
		 {
			 $V7df4935f = $this->events["on_data_display"][0];
			 $Vbe8f8018 = $this->events["on_data_display"][1];
			 $V7aa28ed1 = $this->events["on_data_display"][2]; 
			 if ($Vbe8f8018) call_user_method($V7df4935f,$Vbe8f8018,array("params" => &$rows));
			 else call_user_func($V7df4935f,array("params" => &$rows)); 
			 if (!$V7aa28ed1) break;
		}
		 foreach ($rows as $Vf1965a85)
		 {
			  foreach($this->options["colModel"] as $V4a8a08f0)
			 {
				 $V6f6c99bb = str_replace(".","::",$V4a8a08f0["name"]); 
					if (isset($V4a8a08f0["default"]) && !isset($Vf1965a85[$V6f6c99bb]))
					 $Vf1965a85[$V6f6c99bb] = $V4a8a08f0["default"];
					  if (!empty($V4a8a08f0["default"]))
						 {  foreach($this->options["colModel"] as $V73d4fc33)
							 {
								 $V2fd4bca9 = str_replace(".","::",$V73d4fc33["name"]);
								 $Vf32353ea = urlencode($Vf1965a85[$V2fd4bca9]);
								 $V4a8a08f0["default"] = str_replace("{".$V73d4fc33["name"]."}", $Vf32353ea, $V4a8a08f0["default"]);
							 }
						    $V4b43b0ae = true;
						    if (!empty($V4a8a08f0["condition"]))
					 	    eval("\$V4b43b0ae = ".$V4a8a08f0["condition"].";");
						    $Vf1965a85[$V6f6c99bb] = ( $V4b43b0ae ? $V4a8a08f0["default"] : '');
						} 
			 if (!empty($V4a8a08f0["link"])) 
			{  	
				foreach($this->options["colModel"] as $V73d4fc33)
				 {
				        $V2fd4bca9 = str_replace(".","::",$V73d4fc33["name"]);
					$Vf32353ea = urlencode($Vf1965a85[$V2fd4bca9]);
				  	$V4a8a08f0["link"] = str_replace("{".$V73d4fc33["name"]."}", $Vf32353ea, $V4a8a08f0["link"]);
				}
				 if (!empty($V4a8a08f0["linkoptions"])) 	
					$V815be97d = $V4a8a08f0["linkoptions"];
 					$Vf1965a85[$V6f6c99bb] = "<a $V815be97d href='{$V4a8a08f0["link"]}'>{$Vf1965a85[$V6f6c99bb]}</a>";
			}
			  if (isset($V4a8a08f0["formatter"]) && $V4a8a08f0["formatter"] == "image")
			 { 
				$V815be97d = array();
				foreach($V4a8a08f0["formatoptions"] as $V8ce4b16b=>$V9e3669d1) 
				$V815be97d[] = "$V8ce4b16b='$V9e3669d1'";
				$V815be97d = implode(" ",$V815be97d);
				$Vf1965a85[$V6f6c99bb] = "<img $V815be97d src='".$Vf1965a85[$V6f6c99bb] ."'>";
			}
			  if (isset($V4a8a08f0["formatter"]) && $V4a8a08f0["formatter"] == "password")
				 $Vf1965a85[$V6f6c99bb] = "*****";
		 }
		foreach($Vf1965a85 as $V8ce4b16b=>$V4b43b0ae) 
			$Vf1965a85[$V8ce4b16b] = stripslashes($Vf1965a85[$V8ce4b16b]);
 		$Vfb5270b9->rows[] = $Vf1965a85;} echo json_encode($Vfb5270b9);die;
	}
	  $this->options["pager"] = '#'.$Vab930cbb."_pager";
	 $this->options["jsonReader"] = array("repeatitems" => false, "id" => "0");
	 if ($this->actions["edit"] === false || $this->actions["delete"] === false || $this->options["cellEdit"] === true)
	 $this->actions["rowactions"] = false; 
	if ($this->actions["rowactions"] !== false) 
	{
		  $V8fa14cdd = false;$V7238ac6d = false;
		foreach($this->options["colModel"] as &$V4a8a08f0) { if ($V4a8a08f0["name"] == "act") 
		{ 
			$V7238ac6d = &$V4a8a08f0;
		}
		 if (!empty($V4a8a08f0["width"])) 
		{ $V8fa14cdd = true;}
	}
	  if ($V8fa14cdd) 
		$V2d9ba424 = array("name"=>"act", "align"=>"center", "index"=>"act", "width"=>"30", "sortable"=>false, "search"=>false);
	 else
		$V2d9ba424 = array("name"=>"act", "align"=>"center", "index"=>"act", "sortable"=>false, "search"=>false);
	 if (!$V7238ac6d)
	 { 
		$this->options["colNames"][] = "Actions";
		$this->options["colModel"][] = $V2d9ba424;
	 }
	else
	 $V7238ac6d = array_merge($V2d9ba424,$V7238ac6d);
	}  
	$Vc68271a6 = json_encode_jsfunc($this->options);$Vc68271a6 = substr($Vc68271a6,0,strlen($Vc68271a6)-1);
  	if ($this->actions["rowactions"] !== false) 
	{
	 $Vc68271a6 .= ",'gridComplete': function(){ var ids = jQuery('#$Vab930cbb').jqGrid('getDataIDs');
	for(var i=0;i < ids.length;i++)
	{
	 var cl = ids[i];
 	 be = ' <a title=\"Edit this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$Vab930cbb\').editRow(\''+cl+'\',true);
 	 jQuery(this).parent().hide(); jQuery(this).parent().next().show(); \">Edit</a>';
  	 de = ' | <a title=\"Delete this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$Vab930cbb\').delGridRow(\''+cl+'\'); \">Delete</a>'; 
	se = ' <a title=\"Save this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$Vab930cbb\').saveRow(\''+cl+'\');
 	jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Save</a>';
  	ce = ' | <a title=\"Restore this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#$Vab930cbb\').restoreRow(\''+cl+'\');
 	jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Cancel</a>';  
 	if (ids[i] == 'new_row')
	 {
	 se = ' <a title=\"Save this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#{$Vab930cbb}_ilsave\').click();
 	jQuery(this).parent().hide(); jQuery(this).parent().prev().show();\">Save</a>';
  	ce = ' | <a title=\"Restore this row\" href=\"javascript:void(0);\" onclick=\"jQuery(\'#{$Vab930cbb}_ilcancel\').click();
 	jQuery(this).parent().hide(); 
	jQuery(this).parent().prev().show();\">Cancel</a>';
  	jQuery('#$Vab930cbb').jqGrid('setRowData',ids[i],{act:'<span style=display:none id=\"edit_row_'+cl+'\">'+be+de+'</span>'+'<span id=\"save_row_'+cl+'\">'+se+ce+'</span>'});
	}
	else jQuery('#$Vab930cbb').jqGrid('setRowData',ids[i],{act:'<span id=\"edit_row_'+cl+'\">'+be+de+'</span>'+'<span style=display:none id=\"save_row_'+cl+'\">'+se+ce+'</span>'});
	}	 }"; 
 }
  if ($this->actions["edit"] !== false && $this->options["cellEdit"] !== true)
 {
 $Vc68271a6 .= ",'ondblClickRow':function(id) { if(id && id!==lastSel){  jQuery('#$Vab930cbb').restoreRow(lastSel);
  jQuery('#edit_row_'+lastSel).show();jQuery('#save_row_'+lastSel).hide();   lastSel=id;  } jQuery('#$Vab930cbb').editRow(id, true, function(){}, function(){ jQuery('#edit_row_'+id).show();jQuery('#save_row_'+id).hide();return true;},null,null,null,null, function(){ jQuery('#edit_row_'+id).show();jQuery('#save_row_'+id).hide();return true;});   jQuery('#edit_row_'+id).hide();jQuery('#save_row_'+id).show();}";
}
 $Vc68271a6 .= ",'onSelectRow': function(id)  {  }"; 
 $Vc68271a6 .= "}";
 ob_start();?> 
<table id="<?php echo $Vab930cbb?>"></table>
 <div id="<?php echo $Vab930cbb."_pager"?>"></div>
  <script> jQuery(document).ready(function(){ <?php echo $this->F300015ed($Vab930cbb,$Vc68271a6);?> });	 </script>	
 <?php return ob_get_clean();}	 function F300015ed($Vab930cbb,$Vc68271a6)	{	?> var lastSel;var grid_<?php echo $Vab930cbb?> = jQuery("#<?php echo $Vab930cbb?>").jqGrid(<?php echo $Vc68271a6?>); jQuery("#<?php echo $Vab930cbb?>").jqGrid('navGrid','#<?php echo $Vab930cbb."_pager"?>', { edit: <?php echo ($this->actions["edit"] === false)?"false":"true"?>, add: <?php echo ($this->actions["add"] === false)?"false":"true"?>, del: <?php echo ($this->actions["delete"] === false)?"false":"true"?> }, <?php echo json_encode_jsfunc($this->options["edit_options"])?>, <?php echo json_encode_jsfunc($this->options["add_options"])?>, {}, {multipleSearch:<?php echo ($this->actions["search"] == "advance")?"true":"false"?>});  <?php if ($this->actions["inlineadd"] !== false) { ?> jQuery('#<?php echo $Vab930cbb?>').jqGrid('inlineNav','#<?php echo $Vab930cbb."_pager"?>',{"addtext":"Inline","edit":false,"save":true,"cancel":true, "addParams":{"aftersavefunc":function (id, res) {  res = res.responseText.split("#");try { $(this).jqGrid('setCell', id, res[0], res[1]);$("#"+id, "#"+this.p.id).removeClass("jqgrid-new-row").attr("id",res[1] );} catch (asr) {}  jQuery('#<?php echo $Vab930cbb?>').trigger("reloadGrid",[{page:1}]);}},"editParams":{"aftersavefunc":function (id, res) {  res = res.responseText.split("#");try { $(this).jqGrid('setCell', id, res[0], res[1]);$("#"+id, "#"+this.p.id).removeClass("jqgrid-new-row").attr("id",res[1] );} catch (asr) {}  jQuery('#<?php echo $Vab930cbb?>').trigger("reloadGrid",[{page:1}]);}}});<?php } ?>  <?php if ($this->actions["autofilter"] !== false) { ?>  jQuery("#<?php echo $Vab930cbb?>").jqGrid('filterToolbar',{stringResult: true,searchOnEnter : false});  <?php } ?> <?php if ($this->actions["showhidecolumns"] !== false) { ?>  jQuery("#<?php echo $Vab930cbb?>").jqGrid('navButtonAdd',"#<?php echo $Vab930cbb."_pager"?>",{caption:"Columns",title:"Hide/Show Columns", buttonicon :'ui-icon-note', onClickButton:function(){ jQuery("#<?php echo $Vab930cbb?>").jqGrid('setColumns');  }  });<?php } ?>  function link_dtpicker(el) { setTimeout(function(){ if(jQuery.ui)  {  if(jQuery.ui.datepicker)  {  jQuery(el).after('<button>Calendar</button>').next().button({icons:{primary: 'ui-icon-calendar'}, text:false}).css({'font-size':'69%'}).click(function(e){jQuery(el).datepicker('show');return false;});jQuery(el).datepicker({"disabled":false,"dateFormat":"yy-mm-dd"});jQuery('.ui-datepicker').css({'font-size':'69%'});}  }},100);}jQuery("#<?php echo $Vab930cbb?>").jqGrid('gridResize',{});<?php	}function Fe9b3c794($Vac5c74b6,$Vd77d5e50)	{ if (strpos($Vd77d5e50,"mssql") !== false) { $Vac5c74b6 = preg_replace("/SELECT (.*) LIMIT ([0-9]+) OFFSET ([0-9]+)/i","select top ($Vc81e728d+$Veccbc87e) $Vc4ca4238",$Vac5c74b6);}return $Vac5c74b6;}}if (!function_exists('json_encode')) {	require_once 'JSON.php';function json_encode($V61dd86c2)	{ global $Vb3e1e617;if (!isset($Vb3e1e617)) { $Vb3e1e617 = new Services_JSON();}return $Vb3e1e617->encode($V61dd86c2);}function json_decode($V61dd86c2)	{ global $Vb3e1e617;if (!isset($Vb3e1e617)) { $Vb3e1e617 = new Services_JSON();}return $Vb3e1e617->decode($V61dd86c2);}}function pr($V47c80780, $Vf24f62ee=0){	echo "<pre>";print_r($V47c80780);echo "</pre>";	if ($Vf24f62ee) die;} function json_encode_jsfunc($Va43c1b0a=array(), $V4b5bea44=array(), $Vc9e9a848=0){	foreach($Va43c1b0a as $V3c6e0b8a=>$V2063c160)	{ if (is_array($V2063c160)) { $V2cb9df98 = json_encode_jsfunc($V2063c160, $V4b5bea44, 1);$Va43c1b0a[$V3c6e0b8a]=$V2cb9df98[0];$V4b5bea44=$V2cb9df98[1];}else { if (substr($V2063c160,0,8)=='function') { $V19b0bee6="#".uniqid()."#";$V4b5bea44[$V19b0bee6]=$V2063c160;$Va43c1b0a[$V3c6e0b8a]=$V19b0bee6;}}}if ($Vc9e9a848==1)	{ return array($Va43c1b0a, $V4b5bea44);}else	{ $V7648c463 = json_encode($Va43c1b0a);foreach($V4b5bea44 as $V3c6e0b8a=>$V2063c160) { $V7648c463 = str_replace('"'.$V3c6e0b8a.'"', $V2063c160, $V7648c463);}return $V7648c463;}}
