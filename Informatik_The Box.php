<!DOCTYPE html>
<html>
<form action="Informatik_The Box.php" method="get">
<label for="vorname">Name:</label>
<input type="text" name="vorname" size="20" maxlength="30" id="vorname" />
<br />
<label for="nachname">Surname:</label>
<input type="text" name="nachname" size="20" maxlength="30" id="nachname" />
<br />
<label for="e-mail">E-Mail:</label>
<input type="text" name="e-mail" size="20" maxlength="30" id="e-mail" />
<br />
<label for="phone number">Phone number:</label>
<input type="text" name="phone number" size="20" maxlength="30" id="phone number" />
<br />
<input type="submit" value="Register" />
</form>
 <?php
if (isset($_GET["vorname"])) {
echo "Ihre Eingaben<br />\n"
. "Vorname: " . htmlspecialchars($_GET["vorname"])
. "<br />\n Name: " . htmlspecialchars($_GET["nachname"])
. "<br />\n";
}
?>
</html>