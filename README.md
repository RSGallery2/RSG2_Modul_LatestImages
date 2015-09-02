# RSG2_Modul_LatestImages
The RSGallery2 Module LatestImages shows as the name suggests the latest images from RSGallery2 gallery.

* The images are shown in a table view. The number of rows and columns define the the number of shown images.
* The administrator can specify certain galleries as source for the images to show. Sub galleries may be included.
* The admin can select a display type, if the thumb-, the rsgallery2- or the original size of the image shall be used as a source for the display.
* The display width of the image and the surrounding Div may be set.
* The name of the gallery and the date of the image may be displayed.

* A click on the image may lead to 
    * The parent gallery 
	* Gallery single image view.
	* Gallery slideshow view
	* Original image
	* Gallery display image
	* Gallery thumb image
	
##General
 * User defined count images are selected and shown like in the RSGallery2 gallery view.
 * The images may be aligned in row and columns.
 * The sources to look for the images are all galleries or a defined list of gallleries.
 * The displayed image size may may origin from the thumb-, the orginal- or the rsgallery display size.
 * The resulting set may be "garnered" with CSS styles set in the backend.
 * Each image may lead to the origin picture or the parent gallery or ...

##Parameter in backend

**`Number of rows: `** Number of vertical images  (Images per column)  
**`Number of columns: `** Number of horizontal images (Images per row)  
The number of displayed images is the result from Count = row number times column number. Therefore Count image names are fetched from the Database and prepared for the display  
**`Select galleries to show images from: `** e.g. 3,8,42. The used galleries may be restricted to a selction. Please use a comma seperated list  
**`Include subgalleries: `** (No/Yes)  When the range of galleries is limited by user input (see above) the child galleries may be included in the image search  
**`Display type of image to show: `**  RSGallery2 stores the original (depending on settings), a display sized image and a thumbnail sized image. User can select which display type is to be used.
**`CSS img element height parameter: `**  
**`CSS img element width parameter: `**  
Set size of image, use one (!) of these to make the image smaller  
**`CSS div element height parameter: `**  
**`CSS div element width parameter: `**   
Set size of div, use this to crop the image  
**`Set size of div with the name of the image: **`  
**`CSS div element height parameter for name of image: `**  
**`Display image name: `** (No/Yes)  
**`Display date:`** (No/Yes)  
**`Date format: `**  
**`Link image to view type: `**  
