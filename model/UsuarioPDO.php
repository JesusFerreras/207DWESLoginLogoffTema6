<?php
    class UsuarioPDO implements UsuarioDB {
        
        #[\Override]
        public static function validarUsuario($codUsuario, $password) {
            $seleccion = <<<FIN
                select * from T01_Usuario
                    where T01_CodUsuario = :codigo
                    and T01_Password = sha2(:contrasena, 256)
                ;
            FIN;
            
            $parametros = [
                ':codigo' => $codUsuario,
                ':contrasena' => $codUsuario.$password
            ];
            
            $datos = DBPDO::ejecutarConsulta($seleccion, $parametros)->fetchObject();

            return new Usuario(
                $datos->T01_CodUsuario,
                $datos->T01_Password,
                $datos->T01_DescUsuario,
                $datos->T01_NumConexiones,
                null,
                $datos->T01_FechaHoraUltimaConexion,
                $datos->T01_Perfil,
                $datos->T01_ImagenUsuario
            );
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
        
        public static function altaUsuario() {

        }
        
        public static function validarCodNoExiste() {

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