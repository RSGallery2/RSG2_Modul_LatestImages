<?php
/**
* Changelog for mod_rsgallery2_latest_galleries 
* @version $Id$
* @package mod_rsgallery2_latest_galleries
* @copyright (C) 2003 - 2018 RSGallery2 Team
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
**/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>

1. Changelog
------------
Legend:

* -> Security Fix
# -> Bug Fix
+ -> Addition
^ -> Change
- -> Removed
! -> Note

---------------- Recent ----------------

* --- 4.0.7 --- 2018-06-06 --- whazzup ------------------------------

^ Pathes to files now written with slashes '../.../...' instead of '...' . DS . '...'
+ Added updateserver file

* --- 4.0.6 --- 2015-08-31 --- whazzup ------------------------------

# Added missing file Rsg2ImageRoutes.php in *.xml 

---------------- 2015-08-28 whazzup V4.0.5 -------------
+ Changed possible selections for image link type: 
  Added link selection to 
  * original image
  * rsgallery2 display size image 
  * rsgallery2 thumb size image (Not that this is useful though :-))

---------------- 2015-08-23 whazzup V4.0.4 -------------
+ Changed selection of image link type to list.
  It can now easyly be extended. Example Plain original image view.

---------------- 2015-08-23 whazzup V4.0.3 -------------
+ Added link from image to parent gallery (Set in config)
+ Added link from image to gallery single image view (Set in config)

---------------- 2015-08-20 whazzup -------------
+ <A> Link containing the image may lead to the parent gallery
  when imin conage is clicked. It can be selected in config 

---------------- 3.0.1 -- SVN 1099 -- 2012-10-05 -------------
+ User can specify galleries to show and can choose if their sub-galleries will 
  be shown as well (suggestion of user scene66)
+ Height of div with description can be set (suggestion of user scene66)

---------------- 3.0.0 -- (not in the SVN) -- 2012-07-29 -------------
Initial release mod_rsgallery2_latest_galleries v3.0.0 for Joomla 2.5

