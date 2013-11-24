<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="Small utility for cleaning HTML from Word's tables." />
	<title>TinyMCE Word Tables HTML Cleaner</title>
<?php
	// Google Analytics tracking on my site
	if(preg_match("/rotten77/", $_SERVER['SERVER_NAME'])) include dirname(__FILE__) . "/../ga.html";
?>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
tinymce.init({
	selector:'#editor',
	valid_elements: 'td,tr,th,table',
	menubar: false,
	height: 350,
	plugins: [
			"code fullscreen"
	],
	toolbar1: 'code fullscreen'
});
</script>
<style>
body {
	color:#888;
}
h1 {
	color:#4185fa;
}
body, button {
	font-family: "Comic Sans MS", "Sand CE", fantasy;
}
#source {
	width:100%;
}
button {
	padding:10px 20px;
	background:#0da760;
	border:1px solid #0b8a51;
	cursor: pointer;
	border-radius: 6px;
	color:#fff;
	font-weight:bold;
}
button:hover {
	background:#0b8a51;
}
</style>
</head>
<body>
<h1>TinyMCE Word Tables HTML Cleaner</h1>
<hr />

<form action="./" method="post">
<?php if(!isset($_POST['editor'])): ?>
<p>Paste table from Word:</p>

	<div>
		<textarea cols="30" rows="10" id="editor" name="editor"></textarea>
	</div>
	
	<div>
		<button type="submit">Clean HTML</button>
	</div>
<?php endif; ?>

<?php if(isset($_POST['editor'])): ?>
<p>Your clean HTML:</p>
	<div>
		<textarea cols="60" rows="20" id="source"><?php echo $_POST['editor']; ?></textarea>
	</div>
	
	<div>
		<button type="submit">Back</button>
	</div>
<?php endif; ?>
</form>
</body>
</html>