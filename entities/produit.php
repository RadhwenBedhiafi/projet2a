<?PHP
class Produit{
	private $idP;
	private $nomP;
	private $quantiteP;
	private $description;
	private $prix;
	function __construct($idP,$nomP,$quantiteP,$description,$prix){
		$this->idP=$idP;
		$this->nomP=$nomP;
		$this->quantiteP=$quantiteP;
		$this->description=$description;
		$this->prix=$prix;

	
	}
	
	function getidP(){
		return $this->idP;
	}
	function getNom(){
		return $this->nomP;
	}

	function getQuantite(){
		return $this->quantiteP;
	}
	function getDescription(){
		return $this->description;
	}
	function getPrix(){
		return $this->prix;
	}

	function setidP($idP){
		$this->idP=$idP;
	}
	function setNom($nom){
		$this->nomP=$nom;
	}
	function setQuantite($quantiteP){
		$this->quantiteP=$quantiteP;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	
}

?>