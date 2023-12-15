<?php
	/**
	 * Clase ORM. Se encarga de mapear el objeto con la tabla de bases de datos
	 */
	class ORM
    {
		//Atributos de conexión a base de datos
		private static $host = "localhost";
		private static $user = "videoclub";
		private static $password = "videoclub";
		private static $database = "videoclub";
		
		/**
		 * Mapeamos el objeto con la base de datos.
		 * Creamos un nuevo registro,
		 * Usamos PDO y sentencias preparadas.
		 */
		public function persist(&$object) {
			$id = 0; //aux para obtener el siguiente id
			try{  
				$dbConn= new PDO("mysql:host=".self::$host.";dbname=".self::$database."",self::$user,self::$password);  
			} catch(Exception $e){  
				echo "Connection failed" . $e->getMessage();  
			}  

			try {  
				$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$dbConn->beginTransaction();
				//Obtenemos el siguiente id de la tabla
				$sentencia = $dbConn->prepare("SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '".self::$database."' AND TABLE_NAME = '".get_class($object)."';");
				if ($sentencia->execute()) {
					while ($fila = $sentencia->fetch()) {
						$id = $fila;
					}
				}

				$dbConn->commit();
  
			} catch (Exception $e) {
				$dbConn->rollBack();
				echo "Fallo: " . $e->getMessage();
			}
			//Asignamos el id de base de datos al objeto
			$object->setId($id["AUTO_INCREMENT"]);   
			try {  
				$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$dbConn->beginTransaction();
				//Insertamos el objeto en la base de datos
				$sentencia = $dbConn->prepare("INSERT INTO ".get_class($object)." (nombre) VALUES (?)");
				$sentencia->bindParam(1, $nombre);
				
				$nombre = $object->getNombre();//Obtenemos el nombre del objeto
				$sentencia->execute();

				$dbConn->commit();
  
			} catch (Exception $e) {
				$dbConn->rollBack();
				echo "Fallo: " . $e->getMessage();
			}
			$dbConn = null;
		}
		
		/**
		 * Actualizamos la base de datos con las propiedades del objeto
		 * Usamos PDO y sentencias preparadas
		 */
		public function flush(&$object) {
			try{  
				$dbConn= new PDO("mysql:host=".self::$host.";dbname=".self::$database."",self::$user,self::$password);  
			} catch(Exception $e){  
				echo "Connection failed" . $e->getMessage();  
			}  

			try {  
				$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$dbConn->beginTransaction();
				//Actualizaremos todos los atributos del objeto
				$sentencia = $dbConn->prepare("UPDATE ".get_class($object)." SET nombre = ? WHERE id = ?");
				$sentencia->bindParam(1, $nombre);
				$sentencia->bindParam(2, $id);
				
				$nombre = $object->getNombre();
				$id = $object->getId();
				$sentencia->execute();

				$dbConn->commit();
  
			} catch (Exception $e) {
				$dbConn->rollBack();
				echo "Fallo: " . $e->getMessage();
			}
			$dbConn = null;   
		}
		
		/**
		 * Obtenemos todas las tuplas de base de datos en un array de objetos.
		 * Usamos PDO y sentencias preparadas
		 */
		public function findAll($table) {
			$arrResult = array();
			
			try{  
				$dbConn= new PDO("mysql:host=".self::$host.";dbname=".self::$database."",self::$user,self::$password);  
				//echo "Successfully connected with myDB database";  
			} catch(Exception $e){  
				echo "Connection failed" . $e->getMessage();  
			}  

			try {  
				$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$dbConn->beginTransaction();
				$sentencia = $dbConn->prepare("SELECT * FROM ".$table);
				if ($sentencia->execute(array())) {
					while ($fila = $sentencia->fetch()) {
						$arrResult[] = $fila;
					}
				}

				$dbConn->commit();
  
			} catch (Exception $e) {
				$dbConn->rollBack();
				echo "Fallo: " . $e->getMessage();
			}
			$dbConn = null;
			$arrObjects = array();
			foreach($arrResult as $key => $val) {
					$arrObjects[$val[0]] = new $table();
					//METEMOS ATRIBUTOS DE PRODUCTO (COMUNES)
					$arrObjects[$val[0]]->setId($val["id"]);
					$arrObjects[$val[0]]->setTitle($val["title"]);
					$arrObjects[$val[0]]->setYear($val["year"]);
					$arrObjects[$val[0]]->setPublisher($val["publisher"]);
					$arrObjects[$val[0]]->setGenre($val["genre"]);

					if($table == "Movie"){
						$arrObjects[$val[0]]->setDirector($val["director"]);
						$arrObjects[$val[0]]->setDuration($val["duration"]);
						$arrObjects[$val[0]]->setISAN($val["isan"]);
					}
					else if($table == "Book"){
						$arrObjects[$val[0]]->setAuthor($val["author"]);
						$arrObjects[$val[0]]->setPages($val["pages"]);
						$arrObjects[$val[0]]->setISBN($val["isbn"]);
					}
					else if($table == "Disc"){
						$arrObjects[$val[0]]->setArtist($val["artist"]);
						$arrObjects[$val[0]]->setDuration($val["duration"]);
						$arrObjects[$val[0]]->setISWC($val["iswc"]);
					}
			}
			return $arrObjects;
		}
		
		/**
		 * Obtenemos un objeto de la tupla seleccionada en 
		 * base de datos a partir del id
		 * Usamos PDO y sentencias preparadas
		 */
		public function find($table, $column, $value) {
			$arrResult = array();
			
			try{  
				$dbConn= new PDO("mysql:host=".self::$host.";dbname=".self::$database."",self::$user,self::$password);  
				//echo "Successfully connected with myDB database";  
			} catch(Exception $e){  
				echo "Connection failed" . $e->getMessage();  
			}  

			try {  
				$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$dbConn->beginTransaction();
				$sentencia = $dbConn->prepare("SELECT * FROM $table WHERE UPPER($column) LIKE UPPER('%$value%')");
				if ($sentencia->execute(array())) {
					while ($fila = $sentencia->fetch()) {
						$arrResult[] = $fila;
					}
				}

				$dbConn->commit();
  
			} catch (Exception $e) {
				$dbConn->rollBack();
				echo "Fallo: " . $e->getMessage();
			}
			$dbConn = null;
			$arrObjects = array();
			foreach($arrResult as $key => $val) {
					$arrObjects[$val[0]] = new $table();
					//METEMOS ATRIBUTOS DE PRODUCTO (COMUNES)
					$arrObjects[$val[0]]->setId($val["id"]);
					$arrObjects[$val[0]]->setTitle($val["title"]);
					$arrObjects[$val[0]]->setYear($val["year"]);
					$arrObjects[$val[0]]->setPublisher($val["publisher"]);
					$arrObjects[$val[0]]->setGenre($val["genre"]);

					if($table == "Movie"){
						$arrObjects[$val[0]]->setDirector($val["director"]);
						$arrObjects[$val[0]]->setDuration($val["duration"]);
						$arrObjects[$val[0]]->setISAN($val["isan"]);
					}
					else if($table == "Book"){
						$arrObjects[$val[0]]->setAuthor($val["author"]);
						$arrObjects[$val[0]]->setPages($val["pages"]);
						$arrObjects[$val[0]]->setISBN($val["isbn"]);
					}
					else if($table == "Disc"){
						$arrObjects[$val[0]]->setArtist($val["artist"]);
						$arrObjects[$val[0]]->setDuration($val["duration"]);
						$arrObjects[$val[0]]->setISWC($val["iswc"]);
					}
			}
			return $arrObjects;
		}
		
    }
?>