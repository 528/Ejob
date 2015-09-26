<div>
                <div id="left_col">
                    <div id="l1">
                        <div class="left">
                            <div class="sbox">
                                <img alt="home" src="images/home.png">
                                <h3 style="color:red;"><?=$first_job[0]['company_name'];?></h3><br>
                                <p><?=$first_job[0]['description'];?></p>
                                <a href="<?=site_url().'home/job_detail/'.$first_job[0]['add_id'];?>"><img alt="home" src="images/nav/edit.png"></a>
                            </div>

                        </div>
                    </div>


                    <div id="r1">
                        <div class="middle">
                            <div class="sbox">
                                <img alt="midle" src="images/midle.png">
                                <h3 style="color:red;"><?=$second_job[0]['company_name'];?></h3><br>
                                <p><?=$second_job[0]['description'];?></p>
                                <a href="<?=site_url().'home/job_detail/'.$second_job[0]['add_id'];?>"><img alt="home" src="images/nav/edit.png"></a>
                            </div>


                        </div>
                    </div>


                    <div id="l1">
                        <div class="left1">
                            <div class="sbox">
                                <img alt="right" src="images/right.png">
                                <h3 style="color:red;"><?=$third_job[0]['company_name'];?></h3><br>
                                <p><?=$third_job[0]['description'];?></p>
                                <a href="<?=site_url().'home/job_detail/'.$third_job[0]['add_id'];?>"><img alt="home" src="images/nav/edit.png"></a>
                            </div>
                        </div>
                    </div>

                    <div id="r1">
                        <div class="middle1">
                            <div class="sbox">
                                <img alt="midle" src="images/midle.png">
                                <h3 style="color:red;"><?=$fourth_job[0]['company_name'];?></h3><br>
                                <p><?=$fourth_job[0]['description'];?></p>
                                <a href="<?=site_url().'home/job_detail/'.$fourth_job[0]['add_id'];?>"><img alt="home" src="images/nav/edit.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>