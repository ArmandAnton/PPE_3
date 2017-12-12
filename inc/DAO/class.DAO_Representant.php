<?php
error_reporting(E_ALL);

include_once('dao.php');


class DAO_Representant extends DAO
{

/* 

* Fonction find de representant

*/
    public function find_representant($id_representant) {
      $connexion = get_connexion();
      $sql = "SELECT * FROM representant WHERE id_representant =:id_representant";
        $connexion = get_connexion();
        try {
            $sth = $connexion->prepare($sql);
            $sth->execute(array(":id_representant" => $id_representant));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
        } 
        catch (PDOException $e) {
            die( "<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
        }

        $representant_object = new Motif($row);

         return $representant_object;

    }

/* 

* Fonction findall de representant

*/
    public function findall_representant() {
          $connexion = get_connexion();
          $sql = "SELECT * FROM representant";

            try {
              $sth = $connexion->prepare($sql);
              $sth->execute();
              $rows = $sth->fetchAll(PDO::FETCH_ASSOC);

            } 
            catch (PDOException $e) {
              throw new Exception( "<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
            }
            $array = array();
            foreach ($rows as $row) {
              $array[] = new DAO_Representant($row);
            }
            return $array;


    }
/* 

* Fonction update de representant

*/
    function update_representant(Representant $representant_object) {
      $connexion = get_connexion();
      $sql = "UPDATE representant SET id_representant=:id_representant, libelle_representant=:libelle_representant, cp_representant=:cp_representant, nom_representant=:nom_representant,prenom_representant=:prenom_representant,rue_representant=:rue_representant,ville_representant=:ville_representant";

      try {
        $sth = $connexion->prepare($sql);
        $sth->execute(
                array(
                    ":id_representant" => $representant_object->getId_representant(),
                    ":cp_representant" => $representant_object->getCp_representant(),
                    ":nom_representant" => $representant_object->getNom_representant(),
                    ":prenom_representant" => $representant_object->getPrenom_representant(),
                    ":rue_representant" => $representant_object->getRue_representant(),
                    ":ville_representant" => $representant_object->getVille_representant()

        ));
        
      } catch (PDOException $e) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
      }
      $nb = $sth->rowcount();
      return $nb;  // Retourne le nombre de mise à jour
}
/* 

* Fonction delete de representant

*/
function delete_representant($id_representant) {
  $connexion = get_connexion();
  $sql = "DELETE FROM representant WHERE id_representant =:id_representant";
  try {
    $sth = $connexion->prepare($sql);
    $sth->execute(array(":id_representant" => $id_representant));
  } catch (PDOException $e) {
    throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
  }
  $nb = $sth->rowcount();
  return $nb;  // Retourne le nombre de suppression
}

/* 

* Fonction insert de representant

*/

function insert_representant(Representant $representant_object) {
  $connexion = get_connexion();
  $sql = "INSERT INTO representant 
            (id_representant, cp_representant, nom_representant, prenom_representant, rue_representant, ville_representant) 
            VALUES (:id_representant,:cp_representant,:nom_representant,:prenom_representant,:rue_representant,:ville_representant)";
  try {
    $sth = $connexion->prepare($sql);
    $sth->execute(
            array(
                    ":id_representant" => $representant_object->getId_representant(),
                    ":cp_representant" => $representant_object->getCp_representant(),
                    ":nom_representant" => $representant_object->getNom_representant(),
                    ":prenom_representant" => $representant_object->getPrenom_representant(),
                    ":rue_representant" => $representant_object->getRue_representant(),
                    ":ville_representant" => $representant_object->getVille_representant()
    ));
  } catch (PDOException $e) {
    throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
  }
  $nb = $sth->rowcount();
  return $nb;  // Retourne le nombre d'insertion
}

} 

?>