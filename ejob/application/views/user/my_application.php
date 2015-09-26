<div id="content">
    <div class="formarea">

        <form id="valid_user_login" method="POST" action="<?= site_url() ?>home/login/" >
            <h2>Search Job</h2>
            <div class="subfieldsset1">
                <div>
                    <select id="country" name="category">
                        <option value="all">All</option>
                        <?=$option;?>
                    </select>

                    <input value="Search" name="submit_login" type="submit"/>
                </div><br>
            </div>
            <br>
        </form>


        <br><br><br>


<!--                    <div class="subfieldsset1">
                        <div>
                            <?php//$pagination;?>
                        </div><br>
                    </div>-->

        <div id="2-column">

            <div id="right_col">
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
                    <p>"Sometimes life is one big puzzle you wonder why things are so jumbled up
                    even with all the pieces in hand you still struggle to put then all togetheR"</p>
                </span>
            </div>




                        <h2>My Application</h2>
                        <div class="subfieldsset3">
                            <div style="height: 500px; width: 530px; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                                <table style="border: 1px solid #B7CAF6;" width="100%">
                                    <tr  style="background-color: #7F7C7C">
                                        <td style="border: 1px solid #B7CAF6;">Category Name</td>
                                        <td style="border: 1px solid #B7CAF6;">Company Name</td>
                                        <td style="border: 1px solid #B7CAF6;">Apply</td>
                                        <td style="border: 1px solid #B7CAF6;">Detail</td>
                                    </tr>
                                <?php
                                  $apps=sql::rows('application',"user_id=$uid ORDER BY id DESC");
                                  for($i=0;$i<count($apps);$i++)
                                  {
                                ?>
                                    <tr>
                                        <td style="border: 1px solid #B7CAF6;"><?=$this->user_model->get_my_category($apps[$i]['cat_id']);?></td>
                                        <td style="border: 1px solid #B7CAF6;"><?=$this->user_model->get_company_name($apps[$i]['add_id']);?></td>
                                        <td style="border: 1px solid #B7CAF6;"><?=$apps[$i]['apply_date']?></td>
                                        <td style="border: 1px solid #B7CAF6;">
                                            <a href="<?=site_url().'user/my_job_detail/'.$qu[$i]['add_id'];?>">Detail</a>
                                        </td>
                                    </tr>
                                <?}?>
                                </table>
                            </div>
                        </div>

            <br>
        </div>
    </div>

</div>