<?php
	include('db.php');
	date_default_timezone_set('America/Santiago');
	
	$fechaI = date('d/m/Y');
	$fechaI2 = date('j/m/Y');	
	$horario = date('H:i:s');
	
	$data[] = array('Employee','Valor');
	$sql = "SELECT * FROM post1 where fecha = '$fechaI' or fecha = '$fechaI2' and hora > '07:30:00' and potencia_total <> ''";
	$query = mysql_query($sql);
	if ($query > 0 ){
		while($result = mysql_fetch_array($query)){		
			$Getfloat0 = Getfloat($result['potencia_total']);		
			if($Getfloat0 > 0 and $Getfloat0 < 1800){
				$data[] = array($result['hora'],$Getfloat0);	
			}
		}
	}else{
		$data[] = array($horario,0);
		$data[] = array($horario,0);		
	}

	//$data = array($data);			
	echo json_encode($data);
	
	function Getfloat($str) {
	if(strstr($str, ".")) {
    $str = str_replace(",", "", $str);
    $str = str_replace(",", ".", $str);
	$str = str_replace("a", "", $str);
	$str = str_replace("e", "", $str);
	$str = str_replace("i", "", $str);
	$str = str_replace("o", "", $str);
	$str = str_replace("u", "", $str);
	$str = str_replace("A", "", $str);
	$str = str_replace("E", "", $str);
	$str = str_replace("I", "", $str);
	$str = str_replace("O", "", $str);
	$str = str_replace("U", "", $str);
	$str = str_replace("b", "", $str);
	$str = str_replace("c", "", $str);
	$str = str_replace("d", "", $str);
	$str = str_replace("f", "", $str);
	$str = str_replace("g", "", $str);
	$str = str_replace("h", "", $str);
	$str = str_replace("i", "", $str);
	$str = str_replace("j", "", $str);
	$str = str_replace("k", "", $str);
	$str = str_replace("l", "", $str);
	$str = str_replace("m", "", $str);
	$str = str_replace("n", "", $str);
	$str = str_replace("ñ", "", $str);
	$str = str_replace("p", "", $str);
	$str = str_replace("q", "", $str);
	$str = str_replace("r", "", $str);
	$str = str_replace("s", "", $str);
	$str = str_replace("t", "", $str);
	$str = str_replace("v", "", $str);
	$str = str_replace("w", "", $str);
	$str = str_replace("x", "", $str);
	$str = str_replace("y", "", $str);
	$str = str_replace("z", "", $str);
	$str = str_replace("B", "", $str);
	$str = str_replace("C", "", $str);
	$str = str_replace("D", "", $str);
	$str = str_replace("F", "", $str);
	$str = str_replace("G", "", $str);
	$str = str_replace("H", "", $str);
	$str = str_replace("J", "", $str);
	$str = str_replace("K", "", $str);
	$str = str_replace("L", "", $str);
	$str = str_replace("M", "", $str);
	$str = str_replace("N", "", $str);
	$str = str_replace("Ñ", "", $str);
	$str = str_replace("P", "", $str);
	$str = str_replace("Q", "", $str);
	$str = str_replace("R", "", $str);
	$str = str_replace("S", "", $str);
	$str = str_replace("T", "", $str);
	$str = str_replace("V", "", $str);
	$str = str_replace("W", "", $str);
	$str = str_replace("X", "", $str);
	$str = str_replace("Y", "", $str);
	$str = str_replace("Z", "", $str);
	$str = str_replace("|", "", $str);
	$str = str_replace("°", "", $str);
	$str = str_replace("¬", "", $str);
	$str = str_replace("!", "", $str);
	$str = str_replace("#", "", $str);
	$str = str_replace("$", "", $str);
	$str = str_replace("%", "", $str);
	$str = str_replace("&", "", $str);
	$str = str_replace("/", "", $str);
	$str = str_replace("(", "", $str);
	$str = str_replace(")", "", $str);
	$str = str_replace("=", "", $str);
	$str = str_replace("?", "", $str);
	$str = str_replace("'", "", $str);
	$str = str_replace("\'", "", $str);
	$str = str_replace("¿", "", $str);
	$str = str_replace("¡", "", $str);
	$str = str_replace("´´", "", $str);
	$str = str_replace("´", "", $str);
	$str = str_replace("+", "", $str);
	$str = str_replace("*", "", $str);
	$str = str_replace("~", "", $str);
	$str = str_replace("{", "", $str);
	$str = str_replace("[", "", $str);
	$str = str_replace("^", "", $str);
	$str = str_replace("^^", "", $str);
	$str = str_replace("}", "", $str);
	$str = str_replace("]", "", $str);
	$str = str_replace("``", "", $str);
	$str = str_replace("`", "", $str);
	$str = str_replace(";", "", $str);
	$str = str_replace(":", "", $str);
	$str = str_replace("_", "", $str);
	$str = str_replace("@", "", $str);
	$str = str_replace("<", "", $str);
	$str = str_replace(">", "", $str);
	$str = str_replace("¡", "", $str);
	$str = str_replace("¢", "", $str);
	$str = str_replace("£", "", $str);
	$str = str_replace("¤", "", $str);
	$str = str_replace("¥", "", $str);
	$str = str_replace("¦", "", $str);
	$str = str_replace("§", "", $str);
	$str = str_replace("¨", "", $str);
	$str = str_replace("©", "", $str);
	$str = str_replace("ª", "", $str);
	$str = str_replace("«", "", $str);
	$str = str_replace("®", "", $str);
	$str = str_replace("¯", "", $str);
	$str = str_replace("°", "", $str);
	$str = str_replace("±", "", $str);
	$str = str_replace("²", "", $str);
	$str = str_replace("³", "", $str);
	$str = str_replace("´", "", $str);
	$str = str_replace("µ", "", $str);
	$str = str_replace("¶", "", $str);
	$str = str_replace("·", "", $str);
	$str = str_replace("¸", "", $str);
	$str = str_replace("¹", "", $str);
	$str = str_replace("º", "", $str);
	$str = str_replace("»", "", $str);
	$str = str_replace("¼", "", $str);
	$str = str_replace("½", "", $str);
	$str = str_replace("¾", "", $str);
	}

	if(preg_match("#([0-9\.]+)#", $str, $match)){
		return floatval($match[0]);
	}else{
		return floatval($str);
	}
	}

?>
