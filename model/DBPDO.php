<?php
    class DBPDO implements DB {
        
        #[\Override]
        public static function ejecutarConsulta($sentenciaSQL, $parametros = null) {
            try {
                $DB = new PDO(DSN, USUARIO, PASSWORD);

                $stmt = $DB->prepare($sentenciaSQL);
                
                $stmt->execute($parametros);

                return $stmt;
            } catch (PDOException $ex) {
                $_SESSION['Error'] = new AppError($ex->getCode(), $ex->getMessage(), $ex->getFile(), $ex->getLine(), $_SERVER['paginaEnCurso']);
                $_SESSION['paginaEnCurso'] = 'error';
                header('index.html');
                exit();
            } finally {
                unset($DB);
            }
        }
    }
?>