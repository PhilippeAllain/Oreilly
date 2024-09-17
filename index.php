<?php
require_once 'header.php';

echo "<br><span class= 'main'>Bienvenue dans le $appname";

if ($loggedin) echo ", $user, vous êtes connecté.";
else echo '.<br>Inscrivez-vous ou connectez-vous pour nous rejoindre.';
?>

</span><br><br>
</body>

</html>