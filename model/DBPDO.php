<?php
    class DBPDO implements DB {
        
        #[\Override]
        public static function ejecutarConsulta($sentenciaSQL, $parametros = null) {
            try {
                $DB = new PDO(DSN, USUARIO, PASSWORD);

                $stmt = $DB->prepare($sentenciaSQL);

                return $stmt->execute($parametros);
            } catch (PDOException $ex) {
                
            } finally {
                unset($DB);
            }
        }
    }
?>