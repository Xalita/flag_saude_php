

<?php 

require_once 'html/header.phtml';

require_once "models/Medico.php";

$medico_test = new Medico("Márcio Pereira", "Rua de cima, 321", "+351987654321");
$medico_test2 = new Medico("Márcio Pereira 2", "Rua de cima, 321", "+351987654321");

$medicos -> setNome("abc");

require_once 'html/medicos/list.phtml';

require_once 'html/footer.phtml';

?>