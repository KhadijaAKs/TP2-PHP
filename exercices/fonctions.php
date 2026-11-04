<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function afficherBonjour($nom){
            echo "Bonjour ".$nom;
        }

        function additionner($a,$b){
            return $a+$b;
        }

        function CalculerMoyenne($note1,$note2,$note3){$etudiants=[["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"moyenne"=>14.5],
        ["nom"=>"Ali","Prenom"=>"Sami","age"=>21,"moyenne"=>11.5],
        ["nom"=>"Ben Salah","Prenom"=>"Nour","age"=>19,"moyenne"=>16]];
            return ($note1+$note2+$note3)/3;
        }
          function determinerResultat($moyenne){
            if($moyenne>=10){
                return "Admis";
            }
            return "Ajouee";
        }

        function appreciation($moyenne){
            if($moyenne<10){
                return "Insuffisant";
            }
            elseif($moyenne<12){
                return "Passable";
            }
            elseif($moyenne<14){
                return "Assez Bien";
            }
            elseif($moyenne<16){
                return "Bien";
            }
            return "tres bien";
        }

        function afficheEtudiant($etudiant){
            echo "<p>Nom : {$etudiant['nom']}</p>";
            echo "<p>Prenom : {$etudiant['prenom']}</p>";
            echo "<p>Age : {$etudiant['age']}</p>";
            echo "<p>Moyenne : {$etudiant['moy']}</p>";
            echo "<p>resulat : ".determinerResultat($etudiant['nom'])."</p>";
            echo "<p>Appreciation :".appreciation($etudiant['moyenne'])."</p>";
        }

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

        function obtenirAdmis($etudiants){
            $admis=[];
            foreach($etudiants as $etudiant){
                if($etudiant["moyenne"]>=10){
                    $admis[]=$etudiant;
                }
            }
            return $admis;
        }

         function filterParMoyenne($etudiants,$moyenneMinimale){
            $resultat=[];
            foreach($etudiants as $etudiant){
                if($etudiant["moyenne"]>=$moyenneMinimale){
                    $resultat[]=$etudiant;
                }
            }
            return $resultat;
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>