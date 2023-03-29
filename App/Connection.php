<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=epiz_33650364_twitter;charset=utf8",
				"epiz_33650364",
				"mtWyGtoIJyMg" 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>