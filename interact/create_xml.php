<?php
	header("Content-Type : text/xml");
	echo "<?xml version='1.0' encoding='utf-8' ?>";
?>

<rss version="0.91">
	<channel>
		<?php
			$items = array(
						array(
							'title' =>'PHP程序设计', 
							'link' => 'http://www.itzcn.com'
								),
						array('title' => 'java 从入门到放弃' ,
							'link' => 'http://www.orcle.com'
								)
						);

			foreach ($items as $item) {
				echo "<item>\n";
				echo "	<title>{$item['title']}</title>\n";
				echo "	<link>{$item['link']}</link>";
				echo "</item>";
			}

		?>
	</channel>
</rss>
