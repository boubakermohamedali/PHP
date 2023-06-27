<?php
public function ajouterMateriel($unLibelleMateriel, $uneQuantite) {
    if ($unLibelleMateriel != null )
    if (! array_key_exists($unLibelleMateriel, $this->lesMateriels) && $uneQuantite > 0 ){
    //on vérifie que la clé n'existe pas déjà dans le dictionnaire
    $this->lesMateriels[$unLibelleMateriel] = $uneQuantite;
    /*ajoute dans le dictionnaire la clé de type String correspondant au libelleMateriel et la
    valeur de type entier correspondant à la quantité demandée*/
    }
}
public function __construct($libelle,$dateHeure, $duree, $salle, $lAnimateur, $leTypePublic, $nb){
    parent::__construct($libelle,$dateHeure, $duree, $salle, $lAnimateur, $leTypePublic);
    //appel au constructeur de la classe mère
    $this->nbplaces = $nb;
    //instanciation du dictionnaire
    $this->lesMateriels = array();
    // instanciation liste de membre
    $this->lesMembresParticipants = array();
    }
    
