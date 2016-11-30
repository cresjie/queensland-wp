<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit();
}

?>
<ul class="hb-search-results row">
	<?php
		foreach( $results as $room ){
		    hb_get_template( 'search/loop.php', array( 'room' => $room, 'atts' => $atts ) );
		}
	?>
</ul>