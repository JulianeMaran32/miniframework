<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

                // PDO é classe nativa do php e fica na raiz, por isso deve ter \ antes dele
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                "" 
            );

            return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//

        }
    }
}

?>