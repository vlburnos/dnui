<p>
    <?php _e("DNUI (<b>D</b>elete <b>N</b>ot <b>U</b>sed <b>I</b>mage) will search images from the database and try to find it on every Post and Page if one image has one reference in this either post or page native to WordPress or  if any reference is found, the plugin will tell you that the image is used.", 'dnui'); ?>
    <br/>
    <b class="label label-danger" ng-if="options.backup==0" ><?php _e("Warning the backup system is deactivated, see the option page", 'dnui'); ?></b>
    <br/>
    <b class="label label-danger" ng-if="wc.active==1"><?php _e("Warning you use wooCommerce plugin and you can have false positive, you have two options, you can select all wooCommerce sizes in the ignore size list or download the PRO version", 'dnui'); ?></b>
</p>
<h3><?php _e("Where i can foud DNUI PRO", 'dnui'); ?></h3>
<p>
   <b> <a href="https://apps.nicearma.com/product/dnui-delete-not-used-image-pro/"><?php _e("DNUI PRO version have some useful features:", 'dnui'); ?></a></b>
<ol>
    <li><strong><?php _e("Compatibility with WooCommerce</strong> (the main WooCommerce plugin, not other extends plugins)", 'dnui'); ?></li>
    <li><?php _e("Ignore images by clicking in the image name", 'dnui'); ?></li>
    <li><?php _e("Ignore size by clicking in the size name and include this size name to the ignore size list if this size does not exist", 'dnui'); ?>
    </li>
    <li><strong><?php _e("Delete all automatic button</strong>, this will go page by page and delete all images not used", 'dnui'); ?></li>
    <li><?php _e("Restore all backup", 'dnui'); ?></li>
    <li><?php _e("Delete all backup", 'dnui'); ?></li>
</ol>
</p>
<h3><?php _e("How to support this plugin", 'dnui'); ?></h3>
<p><?php _e("You can give a good or bad review at ", 'dnui'); ?><a href="https://wordpress.org/support/view/plugin-reviews/dnui-delete-not-used-image-wordpress"><?php _e("DNUI reviews", 'dnui'); ?></a><?php _e(" or buy the DNUI PRO version", 'dnui'); ?></p>
<h3><?php _e("Why i have to do Backup?", 'dnui'); ?></h3>
<p>
    <?php _e("This plugin will delete images and information from your server and the database, so you have to do a BACKUP every time you want to use this plugin.", 'dnui'); ?>
</p>

<h3><?php _e("Is the backup system from the DNUI plugin enough?", 'dnui'); ?></h3>
<p>
    <?php _e("Yes and no, if you have the backup option active, the plugin will try to do one backup of every image you are try to delete, but this is not the main purpose of the DNUI plugin, so is not bullet proof", 'dnui'); ?>
    <br/>
    <?php _e("Under plugins page there are various more effective plugins you can use. We suggest you try one", 'dnui'); ?>
</p>
<h3><?php _e("Are the images actually not being not used?", 'dnui'); ?></h3>
<p>
    <?php _e("Yes and not, the 'not used' label, tells you that the imageName.imageType (toto.jpg) is not found in any Post/Page/Shortcode, this does not mean that a page generated by a plugin is not using this image and therefore if you delete said image, be aware, that it could be that a plugin is using it.", 'dnui'); ?>
    <br/>
    <?php _e("To go further:", 'dnui'); ?>
    <br/>
    <?php _e("So if you have another plugin, for example 'Easy load X' that use the example.jpg in one HTML code or Javascript, if the DNUI plugin can't find any reference at the database, it will return a false 'not used' label", 'dnui'); ?>

</p>

<h3><?php _e("How to fix the false 'not used' label?", 'dnui'); ?></h3>
<p>
    <?php _e("This question is a little complex to answer however,", 'dnui'); ?>
    <br/>
    <?php _e("I built this plugin to help you to fix this problem and thus you do have some options, PLEASE USE THEM:", 'dnui'); ?>
<ul>
    <li>
        <?php _e("Use the Ignore Size Option, you can select one or more options (use Ctrl+Click-to un/select) to ignore the size's", 'dnui'); ?>
    </li>
    <li>
        <?php _e("You can dev your own Checker Image[Plugin].php code, and add this to Checkers DNUI (you can send me the code and I will put this in the wordpress.org version)", 'dnui'); ?>
    </li>
    <li>
        <?php _e("Ask me to do it this plugin compatible with the X Plugin (Only for Pro version)", 'dnui'); ?>
    </li>
</ul>
</p>


