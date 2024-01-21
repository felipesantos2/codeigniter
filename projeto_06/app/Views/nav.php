<nav>
    <div>
        <a href="<?php echo site_url('/'); ?>">Home</a> |
        <a href="<?php echo site_url('/about'); ?>">About</a> |
        <a href="<?php echo site_url('/services'); ?>">Services</a> 
    </div>

    <hr>
    
    <div> <!-- nav alternative -->
        <?php echo anchor('/', 'Home'); ?> |
        <?php echo anchor('/about', 'About'); ?> |
        <?php echo anchor('/services', 'Services'); ?>
    </div>
</nav>