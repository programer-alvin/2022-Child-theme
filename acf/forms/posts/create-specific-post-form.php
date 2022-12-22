<?php
//https://www.advancedcustomfields.com/resources/acf_form/#create-a-specific-post
acf_form_head();
 get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php acf_form(array(
        'post_id'       => 'new_post',
        'new_post'      => array(
            'post_type'     => 'post',
            'post_status'   => 'publish'
        ),
        'post_title'    => true,
        'field_groups' => array( 'group_6169596eef822','group_62fea3503ab1e' ),
        'submit_value'  => 'Create new post'
    )); ?>
    <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>