<?php
 $user=$_POST['user']; // login z formularza
 $pass=$_POST['pass']; // hasło z formularza
 $link = mysqli_connect("localhost", "marek940_root", "admin123", "marek940_projekt");
 if(!$link) { echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
 mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków
 $result = mysqli_query($link, "SELECT * FROM klienci WHERE user='$user'"); // pobranie z BD wiersza, w którym login=login z 
 $rekord = mysqli_fetch_array($result); // wiersza z BD, struktura zmiennej jak w BD
 if(!$rekord) //Jeśli brak, to nie ma użytkownika o podanym loginie
{
 mysqli_close($link); // zamknięcie połączenia z BD
echo "Brak użytkownika o takim loginie !"; // UWAGA nie wyświetlamy takich podpowiedzi dla
 }
else
 { // Jeśli $rekord istnieje
 if($rekord['pass']==$pass) // czy hasło zgadza się z BD
 {
 echo "Pomyślnie zalogowano do chmury!";
 }
 else
 {
 mysqli_close($link);
 echo "Błąd! Hasło lub nazwa są niepoprawne!"; // UWAGA nie wyświetlamy takich podpowiedzi dla
 }
}
?>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<a href="wyslij.html" class="btn btn-info" role="button">Wyslij plik</a>
