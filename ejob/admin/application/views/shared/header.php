<?php if (common::is_logged_in()): ?>
    <div class="top_menu">
        <ul class="sf-menu">
            <li class="current"><a href="<?= site_url('admn') ?>" class="white">Admin</a></li>


            <li class="current"><a href="<?= site_url('category') ?>" class="white">Category Settings</a>

            <li class="current"><a href="<?= site_url('member') ?>" class="white">User</a></li>
            
            <li class="current"><a href="<?=  site_url('publisher')?>" class="white">Publisher</a>
            </li>
            <li class="current"><a href="<?= site_url('advertise') ?>" class="white">Advertise</a></li>

        </ul>
    </div>
    <div class="clear"></div>
<?php endif; ?>