<div id="content">
        <form id="valid_user_login" method="POST" action="<?=site_url($action);?>" >
            <h2>Reply</h2>
            <div class="subfieldsset">
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

</div>