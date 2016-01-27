<?php

/**
 * Template file for fetching individual image cells to be dynamically inserted in gallery page.
 */

?>

<a href="./data/{filename}" data-lightbox="gallery" data-title="{title} ... Posted {uploaded} by {uploader}, in {category}">
	<img src="./data/thumb/{filename}" alt="An Image"/>
</a>