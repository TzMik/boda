<?php
/**
 * database
 * colección de funciones relacionadas con la base de datos
 */

$connectionArray = [DB_HOST, DB_USER, DB_PASS, DB_NAME];

/**
 * start
 * crea la conexión con la base de datos
 * @author jonathan.fonseca@bruscoo.com
 * @param array $conexion -> [IP, Usuario, Contraseña, BD]
 * @return object $mysql -> objeto de conexión de mysql
 */
function Start($conexion){
	$mysqli = mysqli_connect('p:'.$conexion[0],$conexion[1],$conexion[2],$conexion[3]);
	mysqli_set_charset($mysqli, 'utf8');
	return $mysqli;
}

/**
 * Cierra la conexion con la base de datos
 *
 * necesario pare no mantener conexiones abiertas
 * con el servidor sql
 *
 * @author jonathan.fonseca@ecadoo.com
 * @param array con parametros de conexion
 * @return true/false
 */
function Finish($conexion){
    if (!empty($conexion) && is_resource($conexion)) {
        mysqli_close($conexion);
    }
}

/**
 * Realiza querys de tipo SELECT
 *
 * necesario para todas las operaciones con mysql
 *
 * @author jonathan.fonseca@ecadoo.com
 * @param $sql consulta a realizar
 * @param $mysqli Conexion activa
 * @return array con el resultado de la query
 */
function Query_Select($sql,$mysqli){
	global $masterip;
	if($resultado = $mysqli->query($sql)) {
		$mysqli->set_charset('utf8mb4');
		while($data = $resultado->fetch_assoc()){
			$result['data'][]=$data;
		}
		$result['count'][] = $resultado->num_rows;
		mysqli_free_result($resultado);
		return $result;
	} else {
		if($_SERVER['REMOTE_ADDR'] == $masterip){
			echo $sql;
		} else {
			//report error
			echo $sql;
			exit("ERROR 400");
		}
	}
}

/**
 * update
 * sirve para hacer INSERTs y UPDATEs en la BD
 * @author jonathan.fonseca@bruscoo.com
 * @param string $sql -> query que se quiere ejecutar
 * @param object $mysqli -> conexion a la BD
 * @return int $done -> numero de lineas afectadas
 */
function Query_Update($sql,$mysqli){
	global $masterip;
	if($result = $mysqli->query($sql)) {
		$return = $mysqli->affected_rows;
		return $return;
	} else {
		if($_SERVER['REMOTE_ADDR'] == $masterip || $_SERVER['REMOTE_ADDR'] == '127.0.0.1'){
			echo $sql;
			echo "<pre>";
			var_dump($mysqli);
			echo "<pre>";
		} else {
			echo "ERROR: SQL ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||";
		}
	}
}

/**
 * realiza un escape a catacteres
 *
 * necesario para evitar errores al momento de realizar querys
 *
 * @author jonathan.fonseca@ecadoo.com
 * @param $texto string
 * @param $conexion Conexion activa
 * @return string sin caracteres que puedan ocacionar conflictos
 */
function Escape($texto,$conexion){
	return mysqli_escape_string($conexion,$texto);
}
