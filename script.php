<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
</head>
<body>

<?php
	$rss = simplexml_load_file('http://d.hatena.ne.jp/neket/rss');
  echo '<ul>';

  foreach ($rss->item as $item) {
		$link = $item ->link;
		$title = $item ->title;

		date_default_timezone_set('Asia/Tokyo');
		$dc = $item ->children('http://purl.org/dc/elements/1.1/');
    $day = date('Y/m/d',strtotime($dc -> date));
  ?>

	<li>
		<span class="date"><?php echo $day; ?></span>
    <a href="<?php echo $link; ?>">
		    <span class="title"><?php echo $title; ?></span>
		</a>
	</li>
<?php }  echo '</ul>'; ?>

</body>
</html>
