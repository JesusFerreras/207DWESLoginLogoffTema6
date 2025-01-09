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
            
            $stmt = DBPDO::ejecutarConsulta($seleccion, $parametros);

            return ($stmt instanceof PDOStatement? $stmt->fetchObject() : $stmt);
        }
        
        public static function registrarUltimaConexion($usuario) {
            DBPDO::ejecutarConsulta(<<<FIN
                update T01_Usuario
                    set T01_NumConexiones = T01_NumConexiones+1,
                    T01_FechaHoraUltimaConexion = now()
                    where T01_CodUsuario = {$usuario->getCodUsuario()}
                ;
            FIN);
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