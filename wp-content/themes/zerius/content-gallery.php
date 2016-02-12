<?php
/**
 * The template used for displaying page content in page.php
 */

?>
<article id="post-<?php the_ID(); ?>">

	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
<div class="col-sm-12">
<div class="col-sm-4  adverts">
<div class="row">
<ul class="bxslider">
<?php 
					$the_query = new WP_Query( array( 'cat' => 2, 'showposts' => -1 ) );
					// The Loop
					if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
					$the_query->the_post();
		'<li>'.the_content('full_size').'</li>';
		}
		}
		wp_reset_postdata();
 ?>
</ul>
</div>
</div>
<div class="col-sm-4 adverts">
<h2>Team Designs</h2>
<h4>No.1 trusted professional business design provider</h4>
<ul>
<li><i class="fa fa-plus"></i> Professional designs</li>
<li><i class="fa fa-plus"></i> Affordable prices</li>
<li><i class="fa fa-plus"></i> Fast service with high quality</li>
<li><i class="fa fa-plus"></i> We'll match it... If anyone out beats our price</li> 
<li><i class="fa fa-plus"></i> We work until you are satisfied</li>
</ul>
<h3>Why Team Designs is your right choice</h3>
<ul>
<li><i class="fa fa-plus"></i> Well experienced design team</li>
<li><i class="fa fa-plus"></i> Over our 10,200 satisfied customers</li>
<li><i class="fa fa-plus"></i> 99% would recommend Team Designs to a friend</li>
<li><i class="fa fa-plus"></i> Price effective and best designs with no compromise in quality</li>
</ul>
</div>
<div class="col-sm-4">
<div class="alert alert-info greeninf">
<h3>Contact Us</h3>
<p>NSW T: 02 9037 4140<br />
VIC T: 03 9785 1031</p>
</div>
<div class="alert alert-info orangeinf">
<h3>Special Offers</h3>
<h4>Find more about our special offers</h4>
</div>
</div>
</div>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'zerif-lite' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>

</article><!-- #post-## -->