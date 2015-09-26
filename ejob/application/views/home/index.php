<div id="content">
    <div class="formarea">

        <form id="valid_user_login" method="POST" action="<?= site_url() ?>home/search_category/" >
            <h2>Search Job</h2>
            <div class="subfieldsset1">
                <div>
                    <select id="country" name="category">
                        <option value="all">All</option>
                        <?=$option;?>
                    </select>

                    <input value="Search" name="submit_search" type="submit"/>
                </div><br>
            </div>
            <br>
        </form>


        <br><br><br>


        <div id="2-column">

            <div id="right_col">
                <h2>Categories and Job</h2>
                <?php
                   for($i = 0;$i < count($nav);$i++)
                   {
                ?>
                <p><a href="<?=site_url().'home/category_navigation_link/'.$nav[$i]['cat_id'];?>"><?=$nav[$i]['cat_name'];?></a>(<?=$nav[$i]['Number'];?>)</p>
                <?php
                   }
                ?>
                <h2>Theme Features</h2>
                <span>
                    <p>"Sometimes life is one big puzzle you wonder why things are so jumbled up
                    even with all the pieces in hand you still struggle to put then all togetheR"</p>
                </span>
            </div>


            <div>
                <div id="left_col">
                    <div id="l1">
                        <div class="left">
                            <div class="sbox">
                                <img alt="home" src="images/home.png">
                                <h1><?=$this->home_model->get_cat_name($first_job[0]['cat_id']);?></h1>
                                <h3 style="color:red;"><a href="<?=site_url().'home/job_detail/'.$first_job[0]['add_id'];?>"><?=$first_job[0]['company_name'];?></a></h3><br>
                                <p><?=$first_job[0]['description'];?></p>
                                <a href="<?=site_url().'home/job_detail/'.$first_job[0]['add_id'];?>"><img alt="home" src="images/more1.png"></a>
                            </div>

                        </div>
                    </div>


                    <div id="r1">
                        <div class="middle">
                            <div class="sbox">
                                <img alt="midle" src="images/midle.png">
                                <h1><?=$this->home_model->get_cat_name($second_job[0]['cat_id']);?></h1>
                                <h3 style="color:red;"><a href="<?=site_url().'home/job_detail/'.$second_job[0]['add_id'];?>"><?=$second_job[0]['company_name'];?></a></h3><br>
                                <p><?=$second_job[0]['description'];?></p>
                                <a href="<?=site_url().'home/job_detail/'.$second_job[0]['add_id'];?>"><img alt="home" src="images/more1.png"></a>
                            </div>
                        </div>
                    </div>

                    <div id="l1">
                        <div class="left1">
                            <div class="sbox">
                                <img alt="right" src="images/right.png">
                                <h1><?=$this->home_model->get_cat_name($third_job[0]['cat_id']);?></h1>
                                <h3 style="color:red;"><a href="<?=site_url().'home/job_detail/'.$third_job[0]['add_id'];?>"><?=$third_job[0]['company_name'];?></a></h3><br>
                                <p><?=$third_job[0]['description'];?></p>
                                <a href="<?=site_url().'home/job_detail/'.$third_job[0]['add_id'];?>"><img alt="home" src="images/more1.png"></a>
                            </div>
                        </div>
                    </div>

                    <div id="r1">
                        <div class="middle1">
                            <div class="sbox">
                                <img alt="midle" src="images/midle.png">
                                <h1><?=$this->home_model->get_cat_name($fourth_job[0]['cat_id']);?></h1>
                                <h3 style="color:red;"><a href="<?=site_url().'home/job_detail/'.$fourth_job[0]['add_id'];?>"><?=$fourth_job[0]['company_name'];?></a></h3><br>
                                <p><?=$fourth_job[0]['description'];?></p>
                                <a href="<?=site_url().'home/job_detail/'.$fourth_job[0]['add_id'];?>"><img alt="home" src="images/more1.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>