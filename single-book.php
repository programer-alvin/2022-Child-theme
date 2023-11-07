<?php

echo 'CPT Book template test<br>';
while ( have_posts() ) :
	the_post();
    the_content();
endwhile;