<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gastzugang - Die St&auml;mme</title>
<link rel="stylesheet" type="text/css" href="stamm.css" />
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
</head>
<body id="ds_body" >
<table class="main" width="800" align="center"><tr><td>

<table class="vis">
<tr>
<td class="selected"><a href="/guest.php?screen=ranking">Rangliste</a></td>
</tr>
</table>

<h2>Rangliste</h2>

<table><tr><td valign="top">

<table class="vis">
<tr><td width="100"><a href="/guest.php?screen=ranking&amp;mode=ally">St�mme</a></td></tr>

<tr><td class="selected" width="100"><a href="/guest.php?screen=ranking&amp;mode=player">Spieler</a></td></tr>
</table>

</td><td valign="top"><table class="vis">
<tr><th width="60">Rang</th><th width="180">Name</th>
<th width="60">Stamm</th>
<th width="60">Punkte</th><th>D�rfer</th><th>Punkteschnitt Dorf</th></tr>

{foreach from=$user item=userdata}
<tr>
  <td>{$userdata.rang}</td>
  <td><a href="guest.php?screen=info_player&id={$userdata.id}">{$userdata.username}</a></td>
  {if $userdata.ally != -1}
  <td><a href="guest.php?screen=info_ally&id={$userdata.ally}">{$userdata.short}</a></td>
  {else}
  <td width="60"></td>
  {/if}
  <td>{$userdata.points}</td>
  <td>{$userdata.villages}</td>
  <td>{$userdata.average}</td>
</tr>
{/foreach}
</table><table class="vis" width="100%"><tr>


</tr></table></td></tr></table></td></tr></table>
</body>
</html>