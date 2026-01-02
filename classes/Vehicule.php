<?php
require_once 'Database.php';

class vehicules extends Database
{

    private $id;
    private $categorie;
    private $modele;
    private $prix;
    private $disponible;
    private $description;
    private $created;

    public function __construct($id, $categorie, $modele, $prix, $disponible, $description, $created)
    {
        $this->id = $id;
        $this->categorie = $categorie;
        $this->modele = $modele;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->description = $description;
        $this->created = $created;
    }

    public function getIdd()
    {
        return $this->id;
    }
    public function getCatigori()
    {
        return $this->categorie;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function getDisponible()
    {
        return $this->disponible;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getCreated()
    {
        return $this->created;
    }

    //SETTERS

    public function setCatigori($catigorie)
    {
        $this->catigorie = $catigorie;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function SelectV()
    {
        $sql = "
    SELECT v.id, v.modele, v.prix_par_jour, v.disponible, v.description,
           c.nom AS categories
    FROM vehicules v
    JOIN categories c ON v.categorie_id = c.id
    WHERE v.disponible = TRUE
";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $vehicules = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function recherchM($keyword)
    {
        $sql = "SELECT * FROM vehicules WHERE modele LIKE : keyword OR caracteristiques LIKE :keyword";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['keyword' => "%$keyword%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>