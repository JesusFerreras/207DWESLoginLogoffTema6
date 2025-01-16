<?php
    class DBPDO implements DB {
        
        #[\Override]
        public static function ejecutarConsulta($sentenciaSQL, $parametros = null) {
            try {
                $DB = new PDO(DSN, USUARIO, PASSWORD);

                $stmt = $DB->prepare($sentenciaSQL);
                
                if(is_null($parametros)) {
                    $stmt->execute();
                } else {
                    $stmt->execute($parametros);
                }

                return $stmt;
            } catch (PDOException $ex) {
                $_SESSION['error'] = new AppError($ex->getCode(), $ex->getMessage(), $ex->getFile(), $ex->getLine(), $_SESSION['paginaEnCurso']);
                $_SESSION['paginaEnCurso'] = 'error';
                
                unset($DB);
                
                header('Location: index.php');
                exit();
            } finally {
                unset($DB);
            }
        }
    }
?>