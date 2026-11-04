<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     // $etudiants=["Ahmed","Sami","Nour","Amine"];
      //  echo $etudiants[0];
        /*for($i=0;$i<count($etudiants);$i++){
            echo"<p>$etudiants[$i]</p>";
        }
    */
      /*  foreach($etudiants as $etudiant){
            echo "<p>$etudiant</p>";
        }*/

       /* Activite 4
        $etudiants=["Ahmed","Sami","Nour","Amine","Yassin"];
       $etudiants[]="Amine";
       array_pop($etudiants);
       echo "Nombre des etudiant : ".count($etudiants);
        foreach($etudiants as $etud){
            echo"<p>$etud</p>";
        }*/
            /*Act5
            $etudiants=["Ahmed","Sami","Nour","Amine"];
            $nomRcherche="Nour";
            if(in_array($nomRcherche,$etudiants)){
                echo "Etudiant trouve";
            }
            else{
                echo "Etudiant non trouve";
            } 
*/
/*Act6

        $etudiant=["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"formation"=>"Informatique","moyenne"=>14.5];
        echo "<p>Nom : {$etudiant['nom']}</p>";
        echo "<p>Prenom : {$etudiant['Prenom']}</p>";
        echo "<p>Age : {$etudiant['age']}</p>";
        echo "<p>formation : {$etudiant['formation']}</p>";
        echo "<p>Moyenne : {$etudiant['moyenne']}</p>";
    */
      /*Act7  $etudiants=[["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"moyenne"=>14.5],
        ["nom"=>"Ali","Prenom"=>"Sami","age"=>21,"moyenne"=>11.5],
        ["nom"=>"Ben Salah","Prenom"=>"Nour","age"=>19,"moyenne"=>16]];
        foreach($etudiants as $etud){
            echo "<p>Nom :".$etud["nom"]."<br>";
            echo "Prenom :".$etud["Prenom"]."<br>";
            echo "Age  :".$etud["age"]."<br>";
            echo "Moyenne :".$etud["moyenne"]."</p>";
        }
*/
/*Act9
        function afficherBonjour($nom){
            echo "Bonjour ".$nom;
        }
        afficherBonjour("Word");
*/
      /*Act 10
        function additionner($a,$b){
            return $a+$b;
        }
        $resultat=additionner(10,20);
        echo $resultat
    */
        /*Act 11
        function CalculerMoyenne($note1,$note2,$note3){$etudiants=[["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"moyenne"=>14.5],
        ["nom"=>"Ali","Prenom"=>"Sami","age"=>21,"moyenne"=>11.5],
        ["nom"=>"Ben Salah","Prenom"=>"Nour","age"=>19,"moyenne"=>16]];
            return ($note1+$note2+$note3)/3;
        }
        $res=CalculerMoyenne(10.2,15.1,10);
        echo $res;*/

        /*Act12
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
        $resultat=determinerResultat(14.2);
        echo "La resultat est : ".$resultat."<br>";
        $mention=appreciation(14.2);
        echo "Admis avec la mention : ".$mention."<br>";
*/

         
     /*Act13
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

        $etudiant=["nom"=>"Khediri","prenom"=>"Ahmed","age"=>20,"moy"=>14.5]; 
        afficheEtudiant($etudiant);
*/
        /* Act 14
        function CalculerMoyenneClasse($etudiant){
            $somme=0;
            foreach($etudiant as $etud){
                $somme+=$etud["moyenne"];
            }
            return $somme/count($etudiant);
        }
        $etudiants=[["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"moyenne"=>14.5],
        ["nom"=>"Ali","Prenom"=>"Sami","age"=>21,"moyenne"=>11.5],
        ["nom"=>"Ben Salah","Prenom"=>"Nour","age"=>19,"moyenne"=>16]];
        $moy=CalculerMoyenneClasse($etudiants);
        echo $moy;
        */
        /*Act 15
        function rechercherEtudiant($etudiants,$nom){
            foreach($etudiants as $etudiant){
                if($etudiant["nom"]===$nom){
                    return $etudiant;
                }
            }
            return null;
        }
        function afficheEtudiant($etudiant){
            echo "<p>Nom : {$etudiant['nom']}</p>";
            echo "<p>Prenom : {$etudiant['prenom']}</p>";
            echo "<p>Age : {$etudiant['age']}</p>";
            echo "<p>Moyenne : {$etudiant['moy']}</p>";
            echo "<p>resulat : ".determinerResultat($etudiant['nom'])."</p>";
            echo "<p>Appreciation :".appreciation($etudiant['moyenne'])."</p>";
        }
         $etudiants=[["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"moyenne"=>14.5],
        ["nom"=>"Ali","Prenom"=>"Sami","age"=>21,"moyenne"=>11.5],
        ["nom"=>"Ben Salah","Prenom"=>"Nour","age"=>19,"moyenne"=>16]];
        $etudiant=rechercherEtudiant($etudiants,"khediri");
        if($etudiant!==null){
            afficheEtudiant($etudiant);
        }
        else{
            echo "Etudiant introuvable";
        }
            */
       
        /*Act 16
        function obtenirAdmis($etudiants){
            $admis=[];
            foreach($etudiants as $etudiant){
                if($etudiant["moyenne"]>=10){
                    $admis[]=$etudiant;
                }
            }
            return $admis;
        }
         $etudiants=[["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"moyenne"=>14.5],
        ["nom"=>"Ali","Prenom"=>"Sami","age"=>21,"moyenne"=>11.5],
        ["nom"=>"Ben Salah","Prenom"=>"Nour","age"=>19,"moyenne"=>16]];
        $res=obtenirAdmis($etudiants);
        echo $res;
        */
        function filterParMoyenne($etudiants,$moyenneMinimale){
            $resultat=[];
            foreach($etudiants as $etudiant){
                if($etudiant["moyenne"]>=$moyenneMinimale){
                    $resultat[]=$etudiant;
                }
            }
            return $resultat;
        }
        $etudiants=[["nom"=>"Khediri","Prenom"=>"Ahmed","age"=>20,"moyenne"=>14.5],
        ["nom"=>"Ali","Prenom"=>"Sami","age"=>21,"moyenne"=>11.5],
        ["nom"=>"Ben Salah","Prenom"=>"Nour","age"=>19,"moyenne"=>16]];
        $etudiantsBienClasses=filterParMoyenne($etudiants,14);
        echo  $etudiantsBienClasses;
    ?>
</body>
</html>