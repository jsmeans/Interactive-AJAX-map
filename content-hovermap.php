



<div class="hoverinfo">
<p><?php 

$categories = get_the_category( $post->ID );
$state = get_categories(array(
	'exclude' => 

	));



    echo $category->term_id . ', ' . $category->slug . ', ' . $category->name . '<br />';
?></p>
<p><?php
$statecat = get_the_category( $post->ID );
$mycats=get_categories ('include=$statecat AND 53');
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

