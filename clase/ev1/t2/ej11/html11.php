<form action="#">

<?php
require_once 'util11.php';

pintarCheckbox ('equipos',
    ['rm'=>'Real Madrid',
    'bc'=>'Barcelona',
    'vl'=>'Valencia'],
    ['rm','bc']);
?>

<input type="submit">
</form>