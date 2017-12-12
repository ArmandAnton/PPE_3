<?php
error_reporting(E_ALL);

include_once('dao.php');

class DAO_Motif extends DAO
{

/* 

* Fonction find de motif

*/
    public function find_motif($id_motif) {
      $connexion = get_connexion();
      $sql = "SELECT * FROM motif WHERE id_motif =:id_motif";

        try {
            $sth = $connexion->prepare($sql);
            $sth->execute(array(":id_motif" => $id_motif));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
        } 
        catch (PDOException $e) {
            die( "<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
        }

        $motif_object = new Motif($row);

         return $motif_object;

    }

/* 

* Fonction findall de motif

*/
    public function findall_motif() {
          $connexion = get_connexion();
          $sql = "SELECT * FROM motif";

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
              $array[] = new DAO_Motif($row);
            }
            return $array;


    }
/* 

* Fonction update de motif

*/
    function update_motif(Motif $motif_object) {
      $connexion = get_connexion();
      $sql = "UPDATE motif SET id_motif=:id_motif, libelle_motif=:libelle_motif";

      try {
        $sth = $connexion->prepare($sql);
        $sth->execute(
                array(
                    ":id_motif" => $motif_object->getId_motif(),
                    ":libelle_motif" => $motif_object->getLibelle_motif(),

        ));
        
      } catch (PDOException $e) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
      }
      $nb = $sth->rowcount();
      return $nb;  // Retourne le nombre de mise à jour
}
/* 

* Fonction delete de motif

*/
function delete_motif($id_motif) {
  $connexion = get_connexion();
  $sql = "DELETE FROM motif WHERE id_motif =:id_motif";
  try {
    $sth = $connexion->prepare($sql);
    $sth->execute(array(":id_motif" => $id_motif));
  } catch (PDOException $e) {
    throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
  }
  $nb = $sth->rowcount();
  return $nb;  // Retourne le nombre de suppression
}

/* 

* Fonction insert de motif

*/

function insert_motif(Motif $motif_object) {
  $connexion = get_connexion();
  $sql = "INSERT INTO motif (id_motif, libelle_motif) VALUES (:id_motif, :libelle_motif)";
  try {
    $sth = $connexion->prepare($sql);
    $sth->execute(
            array(
                    ":id_motif" => $motif_object->get_id_motif(),
                    ":libelle_motif" => $motif_object->get_libelle_motif(),
    ));
  } catch (PDOException $e) {
    throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
  }
  $nb = $sth->rowcount();
  return $nb;  // Retourne le nombre d'insertion
}

} 

?>