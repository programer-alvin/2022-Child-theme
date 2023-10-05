<?php
/*
*  Template Name: product-launch-3
*  Template Post Type: post, page, careers
*/
?>
<?php

function productWrite($post_ID) {
    $flex_value=get_field('launch_blocks',$post_ID);
    echo 'flex_value<pre>';
    //var_export($flex_value);
    echo '</pre>';
    foreach($flex_value as $layout){
      echo '$layout<pre>';
      //var_export($layout);
      echo '</pre>';
      if($layout['acf_fc_layout']=='pl_featured'){
        $heading = $layout['heading'];
        $product_tab =$layout['product_tab'];
        echo '$product_tab<pre>';
        //var_export($product_tab);
        echo '</pre>';
        foreach($product_tab as $product_tab_row){
          echo '$product_tab_row<pre>';
          var_export($product_tab_row);
          echo '</pre>';
          $product_name=$product_tab_row['product_name'];
          $tab_row_repeater=$product_tab_row['tab_row'];
          echo '$tab_row_repeater<pre>';
          var_export($tab_row_repeater);
          echo '</pre>';
          foreach($tab_row_repeater as $row){
            $heading = $row['heading'];
            $subheading = $row['sub_heading'];
            $copy = $row['copy'];
            $img = $row['image'];
            $location = $row['location_button'];
    
            echo '<div class="row col-2 sub-block">';
            echo '  <div class="col img">';
              //display image
            if ($img){ echo "<img src='{$img}'>";}
            echo '</div>';
            echo '<div class="col text">';
            echo '  <div class="copy">';
            //display heading
            if ($subheading){ $subheading = "<p style=\"color:#E2322A;\">{$subheading}</p>"; }
            if ($heading){ echo "<h2>{$heading}{$subheading}</h2>";}
            //display copy
            if ($copy){ echo $copy; }
            echo '</div>';
            echo '<div class="button-wrap">';
            if ($location): 
              echo '<a class="btn btn-outline"
                    href="'.get_theme_mod(
                    "v_local_url",
                    "#nothing_entered"
                  ).'">Find a Store</a>';
            endif;
            echo '</div>';
            echo '</div>';
            echo '</div><!--/.sub-block-->';
          }
        }
        
      }
    }
    
}
?>

<?php 
// Check value exists.
if( have_rows('launch_blocks') ):

  // Loop through rows.
  while ( have_rows('launch_blocks') ) : the_row();

      // Case: Paragraph layout.
      if( get_row_layout() == 'pl_featured' ):

?>
        <?php
          $title = 'some title content';
          // Update these values if the page IDs or tabs change
          $apple_tab_id = 1;
          $samsung_tab_id = 2;
          $google_tab_id = 3;
          
          $apple_page_id = 2;
          $samsung_page_id = 2;
          $google_page_id = 2;
        ?>
          <div class="pl-block products">
            <?php //generate section title
            if ( $title ): ?>
            <div class="row heading">
              <div class="col">
                <div class="title"><?php echo $title; ?></div>
              </div>
            </div>
            <?php endif ?>

            <?php //generate tab menu
            $tab_count = 0;
            if ( have_rows('product_tab') ) :
              while ( have_rows('product_tab') ): the_row();
              echo 'test';
                $tab_count++;
              endwhile;
            endif;
            if ( $tab_count > 1) :
            if ( have_rows('product_tab') ):  ?>
            <div class="row tabs">
              <?php while( have_rows('product_tab') ): the_row();
              $prod = get_sub_field('product_name');
              $index = get_row_index();
              $is_active = ($index == 1 ? ' active' : '');
              ?>
              <div class="col tab-<?php echo $index.$is_active; ?>" data-item="<?php echo $index; ?>"><?php echo $prod; ?></div>
              <?php endwhile; ?>
            </div>
            <?php endif; //prduct_tab ?>
            <?php endif; ?>

            <?php //generate tab rows
            if ( have_rows('product_tab') ):  ?>
              <?php while( have_rows('product_tab') ): the_row();
              $prod = get_sub_field('product_name');
              $index = get_row_index();
              $is_active = ($index == 1 ? ' active' : '');
              ?>

            <div class="row item item-<?php echo $index; ?>" data-item="<?php echo $index; ?>">
              <div class="col<?php echo $is_active; ?>">
                <?php
                if ($index == $apple_tab_id) { productWrite($apple_page_id); }
                if ($index == $samsung_tab_id) { productWrite($samsung_page_id); }
                if ($index == $google_tab_id) { productWrite($google_page_id); }
                ?>
              </div>
            </div><!--/.row.item-->
              <?php endwhile; //prduct_tab ?>
            <?php endif; //prduct_tab ?>

          </div><!--/.pl-block-->
<?php
        endif;

        // End loop.
        endwhile;
    
    // No value.
    else :
        // Do something...
    endif;

?>