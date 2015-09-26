<div class="form_content" style="width:780px;">
    <h3><?= $page_title ?></h3>
    <?php
    if ($msg != "") {
        echo "$msg";
    }
    else{
        if($msgs!="")
        echo "$msgs";
    }
    ?>
 <form id="add_main_category" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
       

<!--          Add Category -->
               <div class="jmq_q">
                    
              </div>
              <a href="#add_more" class="jadd_qe">Add Category</a>
      
         <div class="txt_center">
            <input type='submit' name='save' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/>
        </div>
        </form>
      <hr />
<!--            Add Sub Category-->
<form id="add_sub_category" method="post" action='<?= site_url($action) ?>' enctype ="multipart/form-data">
<table>
            <tr>
                <th>Select Category <font color="red">*</font></th>
                <td>
                <span>
                <select name="category" class="text required ui-widget-content ui-corner-all" onchange="javascript:showHint(this.value);">
                    <option value="">Select </option>
                    <?php foreach ($cat as $value1) {?>
                    <option value="<?=$value1['category']?>"><?=$value1['category']?></option>

                    <?php }?>
                </select>
            </span>
               <font color="red">   <?=form_error('category', '<span>', '</span>')?>        </font>            </td>
                </tr>
        </table>
        <div class="jmq">
              </div>
              <a href="#add_more" class="jadd">Add Sub Category</a>
            

        <div class="txt_center">
            <input type='submit' name='save_sub' value='save' class='button' /><input type='button' name='cancel' value='Cancel' class='btn'onclick="window.history.back(-1)"/>
        </div>
    </form>
  <hr />
<!--                                         Add Sub Category Detail-->
 
</div>