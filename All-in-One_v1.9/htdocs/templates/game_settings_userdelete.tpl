<h3>Account l�schen</h3><br>

Hier kannst du deinen Account l�schen. Um es etwas sicherer zu machen, musst du zuvor dein Passwort eingeben, dass
niemand anders dein Account l�schen kann.<br><br>

<form action="game.php?village={$villageid}&screen=settings&mode=userdelete&do=delete" method="post">
Passwort: <input type="password" name="passwort"><br>
<input type="submit" value="L�schen">

{$err}