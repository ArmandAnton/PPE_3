<?php
error_reporting(E_ALL);

include_once('dao.php');


class DAO_Demandeur extends DAO
{

function find($mail_demandeur, $motdepasse_demandeur) {
  $connexion = get_connexion();
  $sql = "SELECT * FROM demandeur WHERE mail_demandeur=:mail_demandeur AND motdepasse_demandeur=:password_log";
  try {
    $sth = $connexion->prepare($sql);
    $sth->execute(array(":mail_demandeur" => $mail_demandeur,
                        "motdepasse_demandeur" => $password_log));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
  } 
  $demandeur_object = new Demandeur($row);
  return $demandeur_object; // Retourne l'objet métier
}

/* 

* Fonction findall de demandeur

*/
function findAll() {
  $connexion = get_connexion();
  $sql = "SELECT * FROM demandeur";
  try {
    $sth = $connexion->prepare($sql);
    $sth->execute();
    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
  }
  $tableau = array();
  foreach ($rows as $row) {
    $tableau[] = new Ferry($row);
  }
  return $tableau; // Retourne un tableau d'objets
}

/* 

* Fonction update de demandeur

*/
    function update_demandeur(Demandeur $demandeur_object) {
      $connexion = get_connexion();
      $sql = "UPDATE demandeur SET id_demandeur =:id_demandeur ,motdepasse_demandeur =:motdepasse_demandeur, mail_demandeur =:mail_demandeur";
      try {
        $sth = $connexion->prepare($sql);
        $sth->execute(
                array(

                    ":id_demandeur" => $demandeur_object->get_id_demandeur(),
                    ":motdepasse_demandeur" => $demandeur_object->get_motdepasse_demandeur(),
                    ":mail_demandeur" => $demandeur_object->get_mail_demandeur()

        ));
        
      } catch (PDOException $e) {
        throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
      }
      $nb = $sth->rowcount();
      return $nb;  // Retourne le nombre de mise à jour
}
/* 

* Fonction delete de demandeur

*/
function delete_demandeur($id_demandeur) {
  $connexion = get_connexion();
  $sql = "DELETE FROM demandeur WHERE id_demandeur =:id_demandeur";
  try {
    $sth = $connexion->prepare($sql);
    $sth->execute(array(":id_demandeur" => $id_demandeur));
  } catch (PDOException $e) {
    throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
  }
  $nb = $sth->rowcount();
  return $nb;  // Retourne le nombre de suppression
}

/* 

* Fonction insert de demandeur

*/function insert_demandeur(Demandeur $demandeur_object) {
  $connexion = get_connexion();
  $sql = "INSERT INTO demandeur(id_demandeur,motdepasse_demandeur,mail_demandeur ) VALUES (:id_demandeur, :motdepasse_demandeur, :mail_demandeur)";
  try {
    $sth = $connexion->prepare($sql);
    $sth->execute(
            array(
                 ":id_demandeur" => $demandeur_object->get_id_demandeur(),
                 ":motdepasse_demandeur" => $demandeur_object->get_motdepasse_demandeur(),
                 ":mail_demandeur" => $demandeur_object->get_mail_demandeur()
                
    ));
  } catch (PDOException $e) {
    throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
  }
  $nb = $sth->rowcount();
  return $nb;  // Retourne le nombre d'insertion
}

} 

?>