<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $notes=[12,15,9,14,16];

    function Somme($notes){
        $s=0;
        foreach($notes as $note){
            $s+=$note;
        }
        return $s;
    }
    function Moyenne($notes){
        $s=Somme($notes);
        return $s/count($notes);
    }
    function Maximum($notes){
        $max=$notes[0];
        foreach($notes as $note){
            if($note>$max){
                $max=$note;
            }
        }
        return $max;
    }
    function Minimum($notes){
        $min=$notes[0];
        foreach($notes as $note){
            if($note<$min){
                $min=$note;
            }
        }
        return $min;
    }
    function compterNotesAdmis($notes){
        $nomber=0;
        foreach($notes as $note){
            if($note >=10){
                $nomber++;
            }
        }
        return $nomber;
    }
    echo "<p> Somme : ".Somme($notes)."</p>";
    echo "<p> Moyenne : ".Moyenne($notes)."</p>";
    echo "<p> Maximum : ".Maximum($notes)."</p>";
    echo "<p> Minimum : ".Minimum($notes)."</p>";
    echo "<p>Nombre de notes >=10 : ".compterNotesAdmis($notes)."</p>";
?>
</body>
</html>