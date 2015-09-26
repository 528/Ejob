<div style="width:775px;margin:0 auto" class="form_content portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
    <div class="portlet-header fixed ui-widget-header ui-corner-top"><img height="16" width="16" alt="Latest Registered Users" src="http://localhost/ejob/images/user.gif">Search Category</div>
    <div class="portlet-content">
        <form method="post">
            <table cellspacing="2" cellpadding="2" border="0" align="center" width="50%">
                <tbody>
                    <tr>
                        <th valign="top">Category Name</th>
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
        <button id="add" title="category/add_category"  class="jadd_button">ADD</button>
        <button title="category/edit_category" class="jedit_button">EDIT</button>
        <button title="category/enable_category" class="jedit_button">Enable</button>
         <button title="category/disable_category" class="jedit_button">Disabled</button>
    </div>
    <hr />
    <?php echo $grid_data ?>
</div>