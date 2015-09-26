<div id="content">
<div class="formarea">
        <form id="valid_user_login" method="POST" action="<?=site_url()?>user/apply_job/" >
            <h2>Submission</h2>
            <div class="subfieldsset">
              <?=$msg1;?>
            </div>
        </form>

    <div id="2-column">
            <div id="right_col_sub">
                <h2>Categories and Job</h2>
                <?php
                   for($i = 0;$i < count($nav);$i++)
                   {
                ?>
                <p><a href="<?=site_url().'user/category_navigation_link/'.$nav[$i]['cat_id'];?>"><?=$nav[$i]['cat_name'];?></a>(<?=$nav[$i]['Number'];?>)</p>
                <?php
                   }
                ?>
                <h2>Theme Features</h2>
                <span>
                    "Sometimes life is one big puzzle you wonder why things are so jumbled up
                    even with all the pieces in hand you still struggle to put then all togetheR"
                </span>
            </div>
        </div>
    </div>
    </div>