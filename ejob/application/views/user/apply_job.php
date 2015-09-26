<div id="content">
<div class="formarea">
        <form id="valid_user_login" method="POST" action="<?=site_url()?>user/application_submission/" >
            <h2>Apply now</h2>
            <div class="subfieldsset">
              <?=$msg1;?>
                <div>
                <table style="border: 1px solid #B7CAF6;">
                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <font color="#22AEFF"><b>Date : &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <input type="text" name="apply_date" id="apply_date"/>
                        </td>
                    </tr>

                     <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Message: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <div style="height: 100px; width: 410px; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                              <textarea name="message" cols="50" rows="10" id="message"></textarea>
                            </div>
                        </td>
                    </tr>
                </table>
                </div><br>
            </div>
            <input type="hidden" name="add_id" value="<?=$add_id;?>"/>
            <input type="hidden" name="publisher_id" value="<?=$user_id;?>"/>
            <input type="hidden" name="cat_id" value="<?=$cat_id;?>"/>

            <div class="buttonsarea">
                <input value="Apply Now !" name="submit_apply" type="submit"/>
                <input value="Cancel" name="cancel" type="button" onclick="window.history.back(-1)"/>
            </div><br>
        </form>

    <div id="2-column">
            <div id="right_col_apply">
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