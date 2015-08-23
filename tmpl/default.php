<?php
/**
* RSGallery2 latest galleries module: shows latest galleries from the Joomla extension RSGallery2 (www.rsgallery2.nl).
* @copyright (C) 2012 RSGallery2 Team
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
**/

defined('_JEXEC') or die();

echo '<br>\$IsLink2Gallery: '.$IsLink2Gallery.' <br> ';
echo '<br>\$IsLinkNot2Image: '.$IsLinkNot2Image.' <br> ';
echo '<br>\$RSG2MenuId: '.$RSG2MenuId.' <br> ';
echo '<br>\: '.''.' <br> ';
echo '<br>\: '.''.' <br> ';
echo '<br>\: '.''.' <br> ';
echo '<br> <br> ';
echo '<br> <br> ';


?>
<div class="mod_rsgallery2_latest_images">
	<table class="mod_rsgallery2_latest_images_table" >
		<?php 
		$item = 0;
		for ($row = 1; $row <= $countrows; $row++) {
			// If there still is am image to show, start a new row
			if (!isset($latestImages[$item])) {
				continue;
			}
			
			echo '<tr>';
			for ($column = 1; $column <= $countcolumns; $column++) {
                $HTML = '';
				echo '<td>';
				// If there still is a gallery image to show, show it, otherwise, continue
				if (!isset($latestImages[$item])) {
					continue;
				}
				$image = $latestImages[$item];
				// Get the name of the item to show
				$itemName = $image['name'];
				
				// Click on image shall lead to gallery view
				if ($IsLink2Gallery)
				{
/*
http://localhost/joomla3x/index.php/galleries/gallery/3/item/20
(1)\$HTML: "<a href="/joomla3x/index.php/galleries/gallery/3/item/20">"
(3)\$HTML: "
	<a href="/joomla3x/index.php/galleries/gallery/3/item/20">
		<img class="rsg2-displayImage" src="http://localhost/joomla3x/images/rsgallery/thumb/DSC_0859.jpg.jpg" alt="DSC_0859.jpg" title="DSC_0859.jpg" />
	</a>

(2)\$HTML: <a href="/joomla3x/index.php/galleries/gallery/3/item/20/asInline"
(3)\$HTML: "
	<a href="/joomla3x/index.php/galleries/gallery/3/item/20/asInline">
		<img class="rsg2-displayImage" src="http://localhost/joomla3x/images/rsgallery/thumb/DSC_0859.jpg.jpg" alt="DSC_0859.jpg" title="DSC_0859.jpg" />
	</a>
http://localhost/joomla3x/index.php/galleries/gallery/3/item/20/asInline


shall be http://localhost/joomla3x/index.php/galleries/gallery/3/itemPage/9


                /joomla3x/index.php/galleries/gallery/3/itemPage=13
http://localhost/joomla3x/index.php/galleries/gallery/3/itemPage=13
http://localhost/joomla3x/index.php/galleries/gallery/3/itemPage/9
 */
					// Link to gallery all images table view
					if ($IsLinkNot2Image)
					{
						//index.php/bildergallerie/gallery/88/itemPage/41
						$HTML .= '<a href="';
							//.JRoute::_('index.php?option=com_rsgallery2&Itemid='.$RSG2Itemid.'&id='.$row->id
							// .'&catid='.$row->gallery_id);

//                        $HTML .= JRoute::_('index.php?option=com_rsgallery2'
//                        $HTML .= JRoute::_('index.php?option=com_rsgallery2&page=itemPage'
						$HTML .= JRoute::_('index.php?option=com_rsgallery2'
							. '&Itemid='.$RSG2MenuId
//                            . '&rsgOption="gallery"'
							. '&catid=' . $image['gallery_id']
//                            . '&id=' . $image['id']
// ok                            . '/itemPage=' . $image['id']
                            . '/itemPage/' . ($image['ordering'] -1)
                        );
						
						$HTML .= '">';  // ToDo: Title ...

                        echo '<br>(1)\$HTML: "'.htmlentities($HTML).'"<br> ';
                    }
					else
					{
						// Link to gallery single image view
						//index.php/bildergallerie/gallery/88/itemPage/54/asInline
						$HTML .= '<a href="';
							// JRoute::_('index.php?option=com_rsgallery2&page=inline&Itemid='.$RSG2Itemid.
							// '&id='.$row->id.'&catid='.$row->gallery_id.'&limitstart='.$limitstart);

                        $HTML .= JRoute::_('index.php?option=com_rsgallery2'
                            . '&Itemid='.$RSG2MenuId
                            . '&id=' . $image['id']
                            . '&catid=' . $image['gallery_id']
                        );
/* same as above
                        $HTML .= JRoute::_('index.php?option=com_rsgallery2&page=inline'
							. '&Itemid='.$RSG2MenuId
							. '&id=' . $image['id']
							. '&catid=' . $image['gallery_id']
						);
*/
						$HTML .= '">';  // ToDo: Title ...

                        echo '<br>(2)\$HTML: '.htmlentities($HTML).' <br> ';
					}
				}
				
				// Create HTML for image: get the url (with/without watermark) with img attribs
				if ($displaytype == 1) {
					// *** display ***: 
					$watermark = $rsgConfig->get('watermark');
					$imageUrl = $watermark ? waterMarker::showMarkedImage( $itemName ) : imgUtils::getImgDisplay( $itemName );
					$HTML .= '<img class="rsg2-displayImage" src="'.$imageUrl.'" alt="'.$itemName.'" title="'.$itemName.'" '.$imgAttributes.'/>';
				} elseif ($displaytype == 2) {
					// *** original ***
					$watermark = $rsgConfig->get('watermark');
					$imageOriginalUrl = $watermark ? waterMarker::showMarkedImage( $itemName, 'original' ) : imgUtils::getImgOriginal( $itemName );
					$HTML .= '<img class="rsg2-displayImage" src="'.$imageOriginalUrl.'" alt="'.$itemName.'" title="'.$itemName.'" '.$imgAttributes.'/>';
				} else {
					// *** thumb ***
					$imageThumbUrl = imgUtils::getImgThumb( $itemName );
					$HTML .= '<img class="rsg2-displayImage" src="'.$imageThumbUrl.'" alt="'.$itemName.'" title="'.$itemName.'" '.$imgAttributes.'/>';
				}
				$name	= $image['name'];
				$date	= $image['date'];

				// Click on image shall lead to gallery view
				if ($IsLink2Gallery)
				{
					$HTML .= "</a>";
				}

//                echo '<br>(3)\$HTML: "'.htmlentities($HTML).'"<br> ';
				// Show it
			?>
				<div class="mod_rsgallery2_latest_images_attibutes" <?php echo $divAttributes;?>>
					<div class="mod_rsgallery2_latest_images-cell">
							<?php echo $HTML;?>
					</div>
					
					<div style="clear:both;"></div>
                <?php
					if ($displayname) {
				?>
						<div class="mod_rsgallery2_latest_images_name" <?php echo $divNameAttributes;?>>
							<?php echo $name;?>
						</div>
				<?php
					}
					if ($displaydate) {
				?>
						<div class="mod_rsgallery2_latest_images_date">
							<?php echo date($dateformat,strtotime($date));  ?>
						</div>
				<?php
					}
				?>
				</div>
	<?php
				$item++;
				echo '</td>';
			}	
			echo '</tr>';
		}
		
	?>
	</table>
	<table class="mod_rsgallery2_latest_images_table" >
	<?php
	?>
	</table>
</div>


