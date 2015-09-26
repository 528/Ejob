<div id="content">

                        <h2>Applicants</h2>
                        <div class="subfieldsset3">
                            <div style="height: 500px; width: 530px; overflow-x: hidden; overflow-y: scroll; border: 1px solid #ccc; margin-top: 5px;">
                                <table style="border: 1px solid #B7CAF6;" width="100%">
                                    <tr  style="background-color: #7F7C7C">
                                        <td style="border: 1px solid #B7CAF6;">Name</td>
                                        <td style="border: 1px solid #B7CAF6;">View Profile</td>
                                        <td style="border: 1px solid #B7CAF6;">Send Message</td>
                                    </tr>
                                <?php
                                $apps=sql::rows('application',"add_id=$uid ORDER BY id DESC");
                                  for($i=0;$i<count($qu);$i++)
                                  {
                                ?>
                                    <tr>
                                        <td style="border: 1px solid #B7CAF6;"><?=$this->publish_model->get_applicant_name($qu[$i]['user_id']);?></td>
                                        <td style="border: 1px solid #B7CAF6;">
                                            <a href="<?=site_url().'publisher/view_profile/'.$qu[$i]['user_id'];?>">View Profile</a>
                                        </td>
                                        <td style="border: 1px solid #B7CAF6;">
                                            <a href="<?=site_url().'publisher/send_message/'.$qu[$i]['user_id'];?>">Send Message</a>
                                        </td>
                                    </tr>
                                <?}?>
                                </table>
                            </div>
                        </div>

                                <div class="buttonsarea">
                                    <input value="Back" onclick="window.history.back(-1)" type="button"/>
                                </div>
    </div>