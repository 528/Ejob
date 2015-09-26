<div id="content">
            <h2>Inbox</h2>
            <div class="subfieldsset">
                <div style="height: auto; width: auto; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                <table style="border: 1px solid #B7CAF6;">
                    <tr style="border: 1px solid #B7CAF6;">
                       <th style="border: 1px solid #B7CAF6;">Sender</th>
                       <th style="border: 1px solid #B7CAF6;">Title</th>
                       <th style="border: 1px solid #B7CAF6;">Body</th>
                       <th style="border: 1px solid #B7CAF6;">Date</th>
                       <th style="border: 1px solid #B7CAF6;">Reply</th>
                    <tr>
                <?php
                 $apps=sql::rows('publisher_inbox',"publisher_id= '$uid' ORDER BY id DESC");
                 for($i=0;$i<count($apps);$i++)
                                  {
                ?>
                     <tr style="border: 1px solid #B7CAF6;">
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <a href="<?=site_url().'publisher/view_sender/'.$apps[$i]['user_id'];?>"> <?=$this->publish_model->get_sender($apps[$i]['user_id']);?></a>
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
                             <a href="<?=site_url().'publisher/reply/'.$apps[$i]['user_id'];?>">Reply</a>
                        </td>
                    </tr>
                    <?php
                                  }
                    ?>
                </table>
                </div><br>
            <div class="buttonsarea">
                <input value="Cancel" onclick="window.history.back(-1)" type="button"/>
            </div>

</div>
            </div>