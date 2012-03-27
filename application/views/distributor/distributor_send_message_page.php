<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gudang Virtual - Send Message to <?=$agent_name?></title>
</head>
<body>

<div id="container">
<h1>Send Message to <?=$agent_name?></h1>
<form method="post" action="<?=site_url("distributor/do_send_message")?>">
<input type="hidden" name="distributor_id" value="<?=$distributor_id?>"/>
<input type="hidden" name="distributor_name" value="<?=$distributor_name?>"/>
<input type="hidden" name="agent_id" value="<?=$agent_id?>"/>
<input type="hidden" name="agent_name" value="<?=$agent_name?>"/>
<textarea name="message" cols="100" rows="10"></textarea><br/>
<input type="submit" value="Send"/>
<input type="button" value="Cancel" onclick="javascript:location.href='<?=site_url("distributor/manage_agents/".$distributor_id)?>'"/>
</form>
</div>

</body>
</html>