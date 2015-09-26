<div id="content">
    <div class="formarea">
        <form id="valid_user_login" method="POST" action="<?=site_url()?>home/login/" >
            <h2>Contact Info</h2>
            <div class="subfieldsset">
                <div style="height: auto; width: 410px; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                    <table style="border: 1px solid #B7CAF6;">
                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <font color="#22AEFF"><b>Name : &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <?=$contact_detail[0]['name'];?>
                        </td>
                    </tr>

                     <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Address: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <div style="height: 100px; width: 410px; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                              <p><?=$contact_detail[0]['permanent_address'];?></p>
                            </div>
                        </td>
                    </tr>

                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Phone: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <?=$contact_detail[0]['phone'];?>
                        </td>
                    </tr>

                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Email: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <?=$contact_detail[0]['email'];?>
                        </td>
                    </tr>
                </table>
                </div><br>
            </div>
            <div class="buttonsarea">
                                    <input value="Back" onclick="window.history.back(-1)" type="button"/>
                                </div>
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

</div>