<?php
    class UsuarioPDO implements UsuarioDB {
        
        #[\Override]
        public static function validarUsuario($codUsuario, $password) {
            $seleccion = <<<FIN
                select * from T01_Usuario
                    where T01_CodUsuario = :codUsuario
                    and T01_Password = sha2(:contrasena, 256)
                ;
            FIN;
            
            $parametros = [
                ':codUsuario' => $codUsuario,
                ':contrasena' => $codUsuario.$password
            ];
            
            $consulta = DBPDO::ejecutarConsulta($seleccion, $parametros);
            
            if($consulta->rowCount() > 0) {
                $datos = $consulta->fetchObject();
                
                return new Usuario(
                    $datos->T01_CodUsuario,
                    $datos->T01_Password,
                    $datos->T01_DescUsuario,
                    $datos->T01_NumConexiones,
                    new DateTime($datos->T01_FechaHoraUltimaConexion),
                    null,
                    $datos->T01_Perfil,
                    $datos->T01_ImagenUsuario,
                    null
                );
            } else {
                return false;
            }
        }
        
        public static function registrarUltimaConexion($usuario) {
            $usuario->setFechaHoraUltimaConexionAnterior($usuario->getFechaHoraUltimaConexion());
            $usuario->setFechaHoraUltimaConexion(new DateTime('now'));
            $usuario->setNumConexiones($usuario->getNumConexiones() + 1);
            
            DBPDO::ejecutarConsulta(<<<FIN
                update T01_Usuario
                    set T01_NumConexiones = T01_NumConexiones+1,
                    T01_FechaHoraUltimaConexion = now()
                    where T01_CodUsuario = '{$usuario->getCodUsuario()}'
                ;
            FIN);
                    
            return $usuario;
        }
        
        public static function buscarUsuarioPorCod() {

        }
        
        public static function altaUsuario($codUsuario, $password, $descUsuario, $imagenUsuario = null) {
            $insercion = <<<FIN
                insert into T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario, T01_ImagenUsuario) values
                    (:codUsuario, sha2(:contrasena, 256), :descUsuario, :imagenUsuario)
                ;
            FIN;
            
            $parametros = [
                'codUsuario' => $codUsuario,
                'contrasena' => $codUsuario.$password,
                'descUsuario' => $descUsuario,
                'imagenUsuario' => $imagenUsuario
            ];
            
            $seleccion = <<<FIN
                select * from T01_Usuario
                    where T01_CodUsuario = $codUsuario
                ;
            FIN;
            
            DBPDO::ejecutarConsulta($insercion, $parametros);
            
            $datos = DBPDO::ejecutarConsulta($seleccion, $parametros)->fetchObject();
            
            return new Usuario(
                $datos->T01_CodUsuario,
                $datos->T01_Password,
                $datos->T01_DescUsuario,
                $datos->T01_NumConexiones,
                new DateTime($datos->T01_FechaHoraUltimaConexion),
                null,
                $datos->T01_Perfil,
                $datos->T01_ImagenUsuario,
                null
            );
        }
        
        public static function validarCodNoExiste($codUsuario) {
            return (
                DBPDO::ejecutarConsulta(<<<FIN
                    select T01_CodUsuario from T01_Usuario
                        where T01_CodUsuario = '$codUsuario'
                    ;
                FIN)->rowCount() == 0
            );
        }
        
        public static function modificarUsuario() {

        }
        
        public static function cambiarPassword() {

        }
        
        public static function borrarUsuario() {

        }
        
        public static function buscaUsuariosPorDesc() {

        }
        
        public static function creaOpinion() {

        }
        
        public static function modificaOpinion() {

        }
        
        public static function borraOpinion() {

        }
        
        public static function buscarOpinionesUsuario(){
            
        }
    }
?>