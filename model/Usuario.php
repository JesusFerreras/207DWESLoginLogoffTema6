<?php
    class Usuario {
        /** @var string $codUsuario Código del Usuario */
        private $codUsuario;
        
        /** @var string $password Contraseña encriptada */
        private $password;
        
        /** @var string $descUsuario Descripción del Usuario */
        private $descUsuario;
        
        /** @var int $numConexiones Número de veces que se ha conectado el Usuario */
        private $numConexiones;
        
        /** @var DateTime $fechaHoraUltimaConexion Fecha y Hora a la que se conecta el Usuario */
        private $fechaHoraUltimaConexion;
        
        /** @var DateTime $fechaHoraUltimaConexionAnterior Fecha y Hora a la que se conectó el Usuario por última vez */
        private $fechaHoraUltimaConexionAnterior;
        
        /** @var string $perfil Perfil del Usuario, puede ser 'administrador' o 'usuario' */
        private $perfil;
        
        /** @var Image $imagenUsuario Imagen del Usuario */
        private $imagenUsuario;
        
        /**
         *  
         */
        private $listaOpinionesUsuario;
        
        
        public function __construct($codUsuario, $password, $descUsuario, $numConexiones, $fechaHoraUltimaConexion, $fechaHoraUltimaConexionAnterior, $perfil, $imagenUsuario, $listaOpinionesUsuario) {
            $this->codUsuario = $codUsuario;
            $this->password = $password;
            $this->descUsuario = $descUsuario;
            $this->numConexiones = $numConexiones;
            $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
            $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
            $this->perfil = $perfil;
            $this->imagenUsuario = $imagenUsuario;
            $this->listaOpinionesUsuario = $listaOpinionesUsuario;
        }

        public function getCodUsuario() {
            return $this->codUsuario;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getDescUsuario() {
            return $this->descUsuario;
        }

        public function getNumConexiones() {
            return $this->numConexiones;
        }

        public function getFechaHoraUltimaConexion() {
            return $this->fechaHoraUltimaConexion;
        }

        public function getFechaHoraUltimaConexionAnterior() {
            return $this->fechaHoraUltimaConexionAnterior;
        }

        public function getPerfil() {
            return $this->perfil;
        }

        public function getImagenUsuario() {
            return $this->imagenUsuario;
        }
        
        public function getListaOpinionesUsuario() {
            return $this->listaOpinionesUsuario;
        }
        
        public function setCodUsuario($codUsuario): void {
            $this->codUsuario = $codUsuario;
        }

        public function setPassword($password): void {
            $this->password = $password;
        }

        public function setDescUsuario($descUsuario): void {
            $this->descUsuario = $descUsuario;
        }

        public function setNumConexiones($numConexiones): void {
            $this->numConexiones = $numConexiones;
        }

        public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion): void {
            $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        }

        public function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior): void {
            $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        }

        public function setPerfil($perfil): void {
            $this->perfil = $perfil;
        }
        
        public function setImagenUsuario($imagenUsuario): void {
            $this->imagenUsuario = $imagenUsuario;
        }
        
        public function setListaOpinionesUsuario($listaOpinionesUsuario): void {
            $this->listaOpinionesUsuario = $listaOpinionesUsuario;
        }
        
        public function getArrayDatos() {
            return [
                'codUsuario' => $this->codUsuario,
                'password' => $this->password,
                'descUsuario' => $this->descUsuario,
                'numConexiones' => $this->numConexiones,
                'fechaHoraUltimaConexion' => $this->fechaHoraUltimaConexion,
                'fechaHoraUltimaConexionAnterior' => $this->fechaHoraUltimaConexionAnterior,
                'perfil' => $this->perfil,
                'imagenUsuario' => $this->imagenUsuario,
                'listaOpinionesUsuario' => $this->listaOpinionesUsuario
            ];
        }
    }
?>