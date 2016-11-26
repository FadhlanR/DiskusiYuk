<link type='text/css' href="css/style.css" rel='Stylesheet' />
<body>
	<div class="lala"><?php echo $page_content; ?></div>
	<ul>
	<?php foreach($full_name as $split_name): ?>
		<li>
			<?php echo $split_name; ?>
		</li>
	<?php endforeach ?>
	</ul>
	<table>
	  <tr>
	    <td>John</td>
	    <td>Doe</td>
	  </tr>
	  <tr>
	    <td>Jane</td>
	    <td>Doe</td>
	  </tr>
	</table>
</body>