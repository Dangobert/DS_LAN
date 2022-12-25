<h2>{$ally.name}</h2>
{if !empty($error)}
	<h2 class="error">{$error}</h2>
{/if}
<table class="vis">
	<tr>
		{foreach from=$links item=f_mode key=f_name}
			{if $f_mode==$mode}
				<td class="selected" width="100">
					<a href="game.php?village={$village.id}&amp;screen=ally&amp;mode={$f_mode}">{$f_name}</a>
				</td>
			{else}
				<td width="100">
					<a href="game.php?village={$village.id}&amp;screen=ally&amp;mode={$f_mode}">{$f_name}</a>
				</td>
			{/if}
		{/foreach}
	</tr>
</table>
<br />

{if $mode=='profile'}
	{include file="game_info_ally.tpl"}
{elseif $mode=='rights'}
	{include file="game_ally_in_ally_rights.tpl"}
{else}
	{if in_array($mode,$links)}
		{include file="game_ally_in_ally_$mode.tpl"}
	{/if}
{/if}