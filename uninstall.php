<?php
/**
 * Created by PhpStorm.
 * User: Nizar
 * Date: 29/10/2017
 * Time: 03:22
 *
 * @package MilestonePlugin
 * @version 1.0
 *
 */


if(!defined('WP_UNISTALL_PLUGIN')){
    die;
}

//Clear Database stored data
/*$books = get_post(array('post_type'=>'book','numberposts'=>-1));
foreach($books as $book){
    wp_delete_post()
}*/


//Access the database via sql
global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts )");
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts )");


