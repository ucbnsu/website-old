#!/usr/bin/php
<?php
/* Script to update what we store in database:
 * gallery
 * events
 */
$WEBPATH = '/home/n/ns/nsu/public_html';
chdir( $WEBPATH . '/pages');

include 'nsu_util.php';

createEventsTable();
fetchEvents();

createGalleryTable();
fetchGalleryAlbums();
?>
