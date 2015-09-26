<div id="content">
    <form id="valid_user_login" method="POST" action="<?=site_url($action);?>" >
            <h2>Send Message</h2>
            <div class="subfieldsset">
                <?=$msg;?>
                    <table style="border: 1px solid #B7CAF6;">
                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <font color="#22AEFF"><b>Job Title : &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <input type="text" name="job_title" size="40" />
                        </td>
                    </tr>

                     <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Body: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <textarea name="body" cols="50" rows="3" id="Description"></textarea>
                        </td>
                    </tr>


                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Date: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                              <input type="test" id="birthdate1" name="send_date" />
                        </td>
                    </tr>
                </table>
            </div>
            <div class="buttonsarea">
                <input value="Send" name="submit_send" type="submit"/>
                <input value="Cancel" onclick="window.history.back(-1)" type="button"/>
            </div
      </form>
    <div id="2-column">
            <div id="right_col_sender">
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