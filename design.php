
<?php
$melding = "";

if(isset($_POST['verzenden'])){
    if(!empty($_POST['fname']) || !empty($_POST['lname']) || !empty($_POST['age']) || !empty($_POST['mail'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $email = $_POST['mail'];
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

        if(!$age){
            $melding = "Vul een getal in.";
        }
        else if(!$email){
            $melding = "Vul een goed emailadres in.";
        }
        else{
            $melding =  "Hallo $fname $lname. Je leeftijd is $age. Je emailadres is $email.";

        }
    }else {
        $melding = "Vul iets in.";
    }
}
?>

<h1>De opdracht</h1>
<p>Run het formulier waarbij je je voornaam, achternaam, leeftijd en email invult.<br>
    Deze laat je uiteindelijk zien, wanneer je op de knop drukt.</p>

<h3>Opdracht 1</h3>
<p>Maak een JOSF testcase op:</p>
<ol>
    <li>Controleer of je de melding "Vul iets in." krijgt wanneer je een voornaam, achternaam, leeftijd of email NIET invult.</li>
    <li>Controleer of je de melding "Vul een getal in." krijgt wanneer je geen CIJFER invult als leeftijd.</li>
    <li>Controleer of je de melding "Vul een goed emailadres in." krijgt wanneer het emailadres niet voldoet aan de email voorwaarden.</li>

</ol>

<h3>Opdracht 2</h3>
<p>Ergens zit een fout. Verbeter de fout in de code. </p>
<ol>
    <li>Maak een Developer Branch aan.</li>
    <li>Maak een Branch aan, gebaseerd op de Developer Branch.</li>
    <li>Codeer.</li>
    <li>Push je code naar de Branch.</li>
    <li>Maak een Pull Request aan naar de Developer Branch.</li>
    <li>Accepteer de Pull Request.</li>
    <li>Maak een Pull Request aan naar de Main.</li>
    <li>Accepteer de Pull Request.</li>
</ol>

<h2>Het formulier</h2>

<form method='post'>
    <label>Voornaam: </label>
    <input type='text' name='fname'> <br>

    <label>Achternaam: </label>
    <input type='text' name='lname'> <br>

    <label>Leeftijd: </label>
    <input type='text' name='age'> <br>

    <label>Email: </label>
    <input type='text' name='mail'> <br>
    <br>

    <input type='submit' name='verzenden' value='Verzenden'>
</form>



<?php
    echo "<p> $melding </p>";
?>