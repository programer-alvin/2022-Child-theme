<?php 

if( ! defined( 'ABSPATH' ) ) exit;

class My_ACF_Location_Post_Author_Role extends ACF_Location {

    public function initialize() {
        $this->name = 'post_author_role';
        $this->label = __( "Post Author Role", 'acf' );
        $this->category = 'post';
        $this->object_type = 'post';
    }

    public function get_values( $rule ) {
        $choices = array();
        // Load all users roles, loop over them and append to choices.
        
        $all_roles = get_editable_roles();//https://developer.wordpress.org/reference/functions/get_editable_roles/
        if($all_roles){
            foreach( $all_roles as $role_name=>$role_info) {
                $choices[ $role_name ] = $role_info['name'];
            }
        }
        return $choices;
    }

    public function match( $rule, $screen, $field_group ) {

        // Check screen args for "post_id" which will exist when editing a post.
        // Return false for all other edit screens.
        if( isset($screen['post_id']) ) {
            $post_id = $screen['post_id'];
        } else {
            return false;
        }

        // Load the post object for this edit screen.
        $post = get_post( $post_id );
        if( !$post ) {
            return false;
        }

        // Compare the Post's author role attribute to rule value.
        tttc_log(json_encode($post->post_author));
        $user_meta = get_userdata($post->post_author);
        $user_roles = $user_meta->roles;
        
        $result = ( in_array($rule['value'], $user_roles) );

        // Return result taking into account the operator type.
        if( $rule['operator'] == '!=' ) {
            return !$result;
        }
        return $result;
    }
}