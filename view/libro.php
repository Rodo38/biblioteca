<?php
	class Libro{
		private $id;
		private $nombre;
		private $autor;
		private $anio_edicion;
        private $pagina;
        private $id_adn;
        private $adn;
        private $tipoadn;
            
 
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function getAutor(){
			return $this->autor;
		}
 
		public function setAutor($autor){
			$this->autor = $autor;
		}
 
		public function getAnio_edicion(){
		return $this->anio_edicion;
		}
 
		public function setAnio_edicion($anio_edicion){
			$this->anio_edicion = $anio_edicion;
        }
            
        public function getPagina(){
		return $this->pagina;
		}
 
		public function setPagina($pagina){
			$this->pagina = $pagina;
		}
 
		
		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
        public function getId_adn(){
		return $this->id_adn;
		}
 
		public function setId_adn($id_adn){
			$this->id_adn= $id_adn;
		}
          public function getAdn(){
		return $this->adn;
		}
 
		public function setAdn($adn){
			$this->adn= $adn;
		}  public function getTipoadn(){
		return $this->tipoadn;
		}
 
		public function setTipoadn($tipoadn){
			$this->tipoadn= $tipoadn;
		}
 
	}
?>