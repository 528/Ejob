<div id="content">
    <div class="formarea">
            <h2>Job Detail</h2>
            <div class="subfieldsset">
                <div <div style="height: auto; width: auot; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                <table style="border: 1px solid #B7CAF6;">
                    <tr style="border: 1px solid #B7CAF6;">
                       <th style="border: 1px solid #B7CAF6;">Sender</th>
                       <th style="border: 1px solid #B7CAF6;">Title</th>
                       <th style="border: 1px solid #B7CAF6;">Body</th>
                       <th style="border: 1px solid #B7CAF6;">Date</th>
                       <th style="border: 1px solid #B7CAF6;">Reply</th>
                    <tr>
                <?php
                 $apps=sql::rows('user_inbox',"user_id= '$uid' ORDER BY id DESC");
                 for($i=0;$i<count($apps);$i++)
                                  {
                ?>
                     <tr style="border: 1px solid #B7CAF6;">
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <a href="<?=site_url().'user/view_sender/'.$apps[$i]['publisher_id'];?>"> <?=$this->user_model->get_sender($apps[$i]['publisher_id']);?></a>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                              <?=$apps[$i]['job_title'];?>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <div style="height: 100px; width: 200px; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                              <p><?=$apps[$i]['msg_body'];?></p>
                            </div>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                              <?=$apps[$i]['send_date'];?>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <a href="<?=site_url().'user/reply/'.$apps[$i]['publisher_id'];?>">Reply</a>
                        </td>
                    </tr>
                    <?php
                                  }
                    ?>
                </table>
                </div><br>
            </div>
            <input type="hidden" name="add_id" value="<?=$job_detail[0]['add_id'];?>"/>
            <input type="hidden" name="publisher_id" value="<?=$job_detail[0]['user_id'];?>"/>
            <input type="hidden" name="cat_id" value="<?=$job_detail[0]['cat_id'];?>"/>

            <div class="buttonsarea">

            </div><br>
      <br><br><br>

        <div id="2-column">
            <div id="right_col_inbox">
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