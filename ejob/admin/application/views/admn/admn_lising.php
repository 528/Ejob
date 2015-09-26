<div style="width:775px;margin:0 auto" class="form_content portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
    <div class="portlet-header fixed ui-widget-header ui-corner-top"><img height="16" width="16" alt="Latest Registered Users" src="http://localhost/ejob/images/user.gif">Search Users</div>
    <div class="portlet-content">
        <form method="post">
            <table cellspacing="2" cellpadding="2" border="0" align="center" width="50%">
                <tbody>
                    <tr>
                        <th width="150" valign="top">Search Field</th>
                        <td><select name="searchField">
                                <option>Select</option>
                                <option value="username">Username</option>
                                <option value="email">Email</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th valign="top">Search Keyword</th>
                        <td><input type="text" class="text ui-widget-content ui-corner-all width_150" value="" name="searchValue"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" class="button ui-button ui-widget ui-state-default ui-corner-all" value="Search" name="search_user" role="button" aria-disabled="false"></td>
                    </tr>
                </tbody></table>
        </form>
    </div>
</div>
<br><br>
<div class='grid_area' style="width:880px;">
    <?php
    if ($msg != "") {
        echo "$msg";
    }
    ?>
    <div class="tooolbars">
        <button id="add" title="admn/add_admin"  class="jadd_button">ADD</button>
        <button title="admn/edit_admin" class="jedit_button">EDIT</button>
        <!--        <button title="news/publish_news" class="jedit_button">Publish</button>
                 <button title="news/unpublish_news" class="jedit_button">UnPublish</button>-->
        <button title="admn/delete_admin" class="jdelete_button">Delete</button>
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>