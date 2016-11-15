



<div class="hoverinfo">

<p><?php

$statecat = get_category_by_slug( 'OK' );

$id = $statecat->term_id;

echo $id;

$mycats=get_categories ('exclude=$id');



echo  $mycats[0]->category_count.' Exhibitions';
?></p>
<p><?php
$statecat = get_the_category( $post->ID );
$mycats=get_categories ('include=$statecat AND 54');
echo  $mycats[0]->category_count.' Events';
?></p>
<p><?php
$statecat = get_the_category( $post->ID );
$mycats=get_categories ('include=$statecat AND 55');
echo  $mycats[0]->category_count.' Participants';
?></p>
<p>
<?php
$categories = get_the_category( $post->ID );
// now you can view your category in array:
// using var_dump( $categories );
// or you can take all with foreach:
foreach( $categories as $category ) {

    echo $category->term_id . ', ' . $category->slug . ', ' . $category->name . '<br />';
}
?>
</p>
	<p>&ldquo;<?php the_field( 'excerpt' ); ?>&rdquo;</p>

	<cite>&mdash; <?php the_title(); ?></cite>

</div>

