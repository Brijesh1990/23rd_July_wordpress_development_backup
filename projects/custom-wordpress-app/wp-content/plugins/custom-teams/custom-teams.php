<?php 
/*  

*Plugin Name:Custom Team CRUD
*Description:Manage teams using core php with mysqli database 
*Version:1.0.0
*Author:Brijesh kumar pandey
*/
// define plugins path
if(!defined('ABSPATH'))
{
exit;
}

/*

|--------create table when plugins activates-----------|

*/

// create a hooks to add tables in database

function ct_create_table()
{
    global $wpdb;
    $table=$wpdb->prefix . 'teams';
    $charset=$wpdb->get_charset_collate();
    $sql="create table $table(
    id int not null auto_increment primary key,
    team_name varchar(255) not null,
    team_description longtext not null,
    team_leader varchar(255) not null,
    members int not null,
    status varchar(50) not null default 'active',
    created_at datetime default current_timestamp,
    update_at datetime default current_timestamp,

    ) $charset;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);

}
// call hooks
register_activation_hook(__FILE__,'ct_create_table');

/*  

==============add menu of plugins======================

*/

// create menu 
function ct_admin_menu()
{
  add_menu_page(
    'Teams',
    'Teams',
    'manage_options',
    'custom-teams',
    'ct_admin_page',
    'dashicons-groups',26

  );
   add_submenu_page(
    'custom-teams',
    'Add Teams',
    'Add Teams',
    'manage_options',
    'custom-teams-add',
    'ct_add_team_page'

  );
  add_submenu_page(
    'custom-teams',
    'Manage Teams',
    'Manage Teams',
    'manage_options',
    'custom-teams',
    'ct_admin_page'

  );

 
}
// call hooks
add_action('admin_menu','ct_admin_menu');

/*  

--------------add admin page----------------------

*/
// include teams
function ct_admin_page()
{
include plugin_dir_path(__FILE__) .'admin/teams.php';    
}
// add teams form data
function ct_add_team_page()
{
include plugin_dir_path(__FILE__) .'admin/teams.php';    
}


