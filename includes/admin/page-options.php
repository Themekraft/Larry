<?php

// Add the metabox with the page options
add_action("add_meta_boxes", "tk_add_page_options");
function tk_add_page_options() {
    add_meta_box("tk-page-options", "Page Options - Marketplace Pro", "tk_page_options_meta_box", "page", "normal", "high", null);
}

// The page options
function tk_page_options_meta_box() {
    global $post;
    wp_nonce_field(basename(__FILE__), "meta_box_nonce");
    ?>
    <div>
    <p>
      <label for="tk-hide-page-title">
        <?php $checkbox_value = get_post_meta( $post->ID, "tk-hide-page-title", true ); ?>
          <input id="tk-hide-page-title" name="tk-hide-page-title" type="checkbox" value="true" <?php checked($checkbox_value, 'true') ?>>
          Hide the title?
      </label>
    </p>
    <br>
    <h3>Featured Image Page Template</h3>
    <p>
      <label for="larry-page-template-featured-image-max-height">Max height for featured image</label>
        <input name="larry-page-template-featured-image-max-height" type="text" value="<?php echo get_post_meta( $post->ID, "larry-page-template-featured-image-max-height", true); ?>">px &nbsp;
    </p>
    </div>
    <?php
}

// Save the page options
add_action("save_post", "tk_page_options_save_meta_box", 10, 3);
function tk_page_options_save_meta_box( $post_id, $post, $update ) {
    if (!isset($_POST["meta_box_nonce"]) || !wp_verify_nonce($_POST["meta_box_nonce"], basename(__FILE__)))
        return;

    if(!current_user_can("edit_post", $post_id))
        return;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return;


     if('page' != $post->post_type)
         return;

    $meta_box_checkbox_value = isset($_POST["tk-hide-page-title"]) ? $_POST["tk-hide-page-title"] : "";
    $meta_box_featured_image_height = isset($_POST["larry-page-template-featured-image-max-height"]) ? $_POST["larry-page-template-featured-image-max-height"] : "";

    update_post_meta($post_id, "tk-hide-page-title", $meta_box_checkbox_value);
    update_post_meta($post_id, "larry-page-template-featured-image-max-height", $meta_box_featured_image_height);
}
?>
