<div id="content">
            <h2>Application Detail</h2>
            <div class="subfieldsset">
                    <table style="border: 1px solid #B7CAF6;">
                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <font color="#22AEFF"><b>Company Name : &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <?=$qu[0]['company_name'];?>
                        </td>
                    </tr>

                     <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Description: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                            <div style="height: 100px; width: 410px; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                              <p><?=$qu[0]['description'];?></p>
                            </div>
                        </td>
                    </tr>


                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Publish Date: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                              <p><?=$qu[0]['publish_date'];?></p>
                        </td>
                    </tr>

                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>Dead Line: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                              <p><?=$qu[0]['dead_line'];?></p>
                        </td>
                    </tr>

                    <tr style="border: 1px solid #B7CAF6;">
                        <td align="center" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                             <font color="#22AEFF"><b>URL: &nbsp;&nbsp;&nbsp;</b></font>
                        </td>
                        <td align="left" style="border: 1px solid #B7CAF6;" bgcolor="#e9ece9" class="table_value">
                              <p><?=$qu[0]['url'];?></p>
                        </td>
                    </tr>

                </table>
            </div>


</div>