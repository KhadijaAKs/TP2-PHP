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
            ["nom"=>"Khediri","prenom"=>"Ahmed","age"=>20,"formation"=>"Informatique","moyenne"=>14.5],
            ["nom"=>"Ali","prenom"=>"Sami","age"=>21,"formation"=>"Informatique","moyenne"=>10.5],
            ["nom"=>"Ben Salah","prenom"=>"Nour","age"=>19,"formation"=>"Informatique","moyenne"=>13.25],
            ["nom"=>"Trabelsi","prenom"=>"Amine","age"=>20,"formation"=>"Informatique","moyenne"=>12],
            ["nom"=>"Mansouri","prenom"=>"Yassine","age"=>22,"formation"=>"Informatique","moyenne"=>15],
            ["nom"=>"Jaziri","prenom"=>"Amira","age"=>21,"formation"=>"Informatique","moyenne"=>16.5],
            ["nom"=>"Brahmi","prenom"=>"Sarra","age"=>19,"formation"=>"Informatique","moyenne"=>10.6],
            ["nom"=>"Gharbi","prenom"=>"Rayen","age"=>22,"formation"=>"Informatique","moyenne"=>14],
            ["nom"=>"Chabbane","prenom"=>"Omar","age"=>20,"formation"=>"Informatique","moyenne"=>11.5],
             ["nom"=>"Mabrouk","prenom"=>"Mariem","age"=>20,"formation"=>"Informatique","moyenne"=>13]

        ];
       function afficherEtudiants($etudiants){
        foreach ($etudiants as $etud) {
            echo "<p>";
            echo "Nom : ".$etud["nom"]."<br>";
            echo "Prenom : ".$etud["prenom"]."<br>";
            echo "Age : ".$etud["age"]."<br>";
            echo "Formation : ".$etud["formation"]."<br>";
            echo "Moyenne : ".$etud["moyenne"]."<br>";
            echo "</p>";
        }
       }
       function MoyenneClasse($etudiants){
            $somme=0;
            foreach($etudiants as $etud){
                $somme+=$etud["moyenne"];
            }
            return $somme/count($etudiants); 
        }
         function comterNbAdmis($etudiants){
            $n=0;
            foreach($etudiants as $etud){
                if($etud["moyenne"] >= 10){
                    $n++;
                }
            }
            return $n;
        }

        function rechercher($etudiants,$nom){
            foreach($etudiants as $etud){
                if($etud["nom"]===$nom){
                    return $etud;
                }
            }
            return null;
        }
        function filter($etudiants,$moy){
            $result=[];
            foreach($etudiants as $etud){
                if($etud["moyenne"]>=$moy){
                    $result[]=$etud;
                }
            }
            return $result;
        }
        function meilleurMoyenne($etudiants){
            $meilleur=$etudiants[0]["moyenne"];
            foreach($etudiants as $etud){
                if($etud["moyenne"] > $meilleur){
                    $meilleur=$etud["moyenne"];
                }
            }
            return $meilleur;
        }
        function PlusFaibleMoy($etudiants){
            $faible=$etudiants[0]["moyenne"];
            foreach($etudiants as $etud){
                if($etud["moyenne"]<$faible){
                    $faible=$etud["moyenne"];
                }
            }
            return $faible;
        }
        function Sup14($etudiants){
            $nb=0;
            foreach($etudiants as $etud){
                if($etud["moyenne"]>=14){
                    $nb++;
                }
            }
            return $nb;
        }
        function compterAdmis($etudiants){
            $nb=0;
            foreach($etudiants as $etud){
                if($etud["moyenne"]>=10){
                    $nb++;
                }
            }
            return $nb;
        }
        function Pourcentage($etudiants){
            $nb=compterAdmis($etudiants);
            return ($nb/count($etudiants))*100;
        }
            echo "<h4>affichage du liste de classe :</h4>";
            afficherEtudiants($etudiants);
             echo "<p> Moyenne de classe :" . MoyenneClasse($etudiants) ."</p>";
            echo "<p> Nombre des admis :" . comterNbAdmis($etudiants) ."</p>";
            $nom="Ben Salah";
            echo "<p> Recherche d'etudiant (Ahmed) : " . rechercher($etudiants,$nom) ."</p>";
            echo "<p> Filtre par moyenne minimale " . filter($etudiants,10);
            echo "<p> Meilleur moyenne : " . meilleurMoyenne($etudiants) ."</p>";
            echo "<p> Plus faible moyenne : " . PlusFaibleMoy($etudiants) ."</p>" ;
            echo "<p> Nombre d'étudiants avec moyenne >=14 : " . Sup14($etudiants) ."</p>";
            echo "<p> Pourcentage d'étudiants admis : " . Pourcentage($etudiants) ."%</p>";
    
    
    ?>
</body>
</html>