<div id="content">

                        <h2>Applicants</h2>
                        <div class="subfieldsset3">
                            <?=$msg;?>
                            <div style="height: 500px; width: 530px; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                                <table style="border: 1px solid #B7CAF6;" width="100%">
                                    <tr  style="background-color: #7F7C7C">
                                        <td style="border: 1px solid #B7CAF6;">Company Name</td>
                                        <td style="border: 1px solid #B7CAF6;">Publish Date</td>
                                        <td style="border: 1px solid #B7CAF6;">No of Applicant</td>
                                        <td style="border: 1px solid #B7CAF6;">Applicant's Detail</td>
                                    </tr>
                                <?php
                                $apps=sql::rows('application',"publisher_id=$uid ORDER BY id DESC");
                                  for($i=0;$i<count($apps);$i++)
                                  {
                                ?>
                                    <tr>
                                        <td style="border: 1px solid #B7CAF6;">
                                            <a href="<?=site_url().'publisher/applicantion_detail/'.$apps[$i]['add_id'];?>"><?=$this->publish_model->get_my_company_name($apps[$i]['add_id']);?></a>
                                        </td>
                                        <td style="border: 1px solid #B7CAF6;"><?=$this->publish_model->get_publish_date($apps[$i]['add_id']);?>
                                        </td>
                                        <td style="border: 1px solid #B7CAF6;"><?=$this->publish_model->count_applicants($uid,$apps[$i]['add_id']);?></td>
                                        <td style="border: 1px solid #B7CAF6;">
                                            <a href="<?=site_url().'publisher/applicants_detail/'.$apps[$i]['add_id'];?>">Detail</a>
                                        </td>
                                    </tr>
                                <?}?>
                                </table>
                            </div>
                        </div>
    </div>