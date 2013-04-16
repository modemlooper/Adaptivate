Adaptivate is a template switcher for WordPress themes when a site is viewed from mobile devices. You may have heard of responsive web design, adpative design displays a different view based on a device.

This framework will allow you to include alternate template files for mobile site visitors. Why do we need this? Responsive design is only solving one part of the mobile equation and that is making a full site fit into various sized screens. It doesn't remove any content instead it rearranges the content. Adaptive design allows you to control the content before the page loads. This is benefitial because mobile devices have not only a smaller screen they also have less computing power and it takes longer to render the content to the screen.

By using adaptive design with responsive you can hit mobile on both ends giving a better mobile experience.


How to use this framework:

Copy the folder mobile into your active WordPress theme folder.
Open the themes functions.php file and include the code below:

 include_once('mobile/template-functions.php');


Copy over a theme file from your theme to the mobile folder and prefix the file name with 'mobile-'

 single.php becomes mobile-single.php


If the file exists and the user visits the site from a mobile device the mobile template file will be served instead. You can edit this file removing things you do not want to display on mobile devices. Sidebars are a good thing to drop from mobile. Sidebars create more content for a mobile device to render and can slow down the page and degrade the experience. Maybe you only want to show the_exceprt on mobile.

List of files you can copy over to /mobile/

 index.php
 single.php
 page.php
 archive.php
 category.php
 taxonomy.php
 tag.php
 author.php
 404.php
 search.php
 attachment.php
