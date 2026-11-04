<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $etudiants=[
        ["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"moyenne"=>14.5],
        ["nom"=>"Ali","Prenom"=>"Sami","age"=>21,"moyenne"=>11.5],
        ["nom"=>"Ben Salah","Prenom"=>"Nour","age"=>19,"moyenne"=>16],
        ["nom"=>"Kacem","Prenom"=>"Farah","age"=>18,"moyenne"=>10.5],
        ["nom"=>"Mabrouk","Prenom"=>"Ahlem","age"=>20,"moyenne"=>16],
        ["nom"=>"Soussi","Prenom"=>"Fatma","age"=>22,"moyenne"=>15.55]];
    
        function CalculerMoyenneClasse($etudiant){
            $somme=0;
            foreach($etudiant as $etud){
                $somme+=$etud["moyenne"];
            }
            return $somme/count($etudiant);
        }

        function rechercherEtudiant($etudiants,$nom){
            foreach($etudiants as $etudiant){
                if($etudiant["nom"]===$nom){
                    return $etudiant;
                }
            }
            return null;
        }
        function nb_admis($etudiants){
            $nb=0;
            foreach($etudiants as $etud){
                if($etud["moyenne"]>=10){
                    $nb++;
                }
            }
            return $nb;
        }
        function Moyenne_sup($etudiants,$moy){
            $res=[];
            foreach($etudiants as $etud){
                if($etud["moyenne"]>=$moy){
                    $res[]=$etud;
                }
            }
            return $res;
        }
        function trouverMeilleurEtudiant($etudiants){
            $meilleur=$etudiants[0];
            foreach($etudiants as $etud){
                if($etud["moyenne"]>$meilleur["moyenne"]){
                    $meilleur=$etud;
                }
            }
            return $meilleur;
        }
        echo "<p>Le nombre des etudiants est : ". count($etudiants) ."</p>";
        echo "<p>Moyenne de class : ". CalculerMoyenneClasse($etudiants) ."</p>";
        echo "<p>Nombre d'admis dans la class ". nb_admis($etudiants) ."</p>";
        echo "<p>Recherche par nom d'un etudiant : ". rechercherEtudiant($etudiants,"khediri") ."</p>";
        echo "<p>Liste des etudiants ayant une moyenne superieur ou egale a 12 : ". Moyenne_sup($etudiants,12) ."</p>";
        echo "<p> l'etudiant ayant le meilleur moyenne : " . trouverMeilleurEtudiant($etudiants) ."</p>";
    
    ?>
</body>
</html>