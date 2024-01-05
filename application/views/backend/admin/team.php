 <!--Trailupload-->
 <?php
if($edit_data!=''){
    $answer=$edit_data['answer'];
    $question=$edit_data['question'];
    $form_url='team/'.base64_encode($edit_data['id']);
}else{
    $this->session->set_userdata('last_page',current_url());
    $form_url='team';
}
?>
                    <div class="row">
                        <div class="col">
                                <section class="card">
                                    <div class="card-header">
                                        <form method="post" action="<?=base_url().$form_url;?>" enctype="multipart/form-data" novalidate="novalidate" class="form-horizontal" id="form">
                                            <div class="form-group row">
                            <label class="col-sm-4 control-label text-sm-right pt-2">Upload Image: </label>
                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <input type="file" class="form-control custom-file-input" id="sapaper" name="img" >
                                    <label class="custom-file-label" for="sapaper">Choose file</label>
                                </div>
                                <?php 
                                    if($this->session->flashdata('img_error')!=''){echo '
                                <div class="error">'.$this->session->flashdata('img_error').'</div>';}?>
                                <?php echo form_error('img', '<div class="error">', '</div>'); ?>
                            </div>
                                                
                        </div>
                      
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Select Theme: </label>
                                                <div class="col-sm-5">
                                                    <select name="theme" class="form-control" required>
                                                    <option>Select theme</option>
                                                    <option value="1">Food</option>
                                                    <option value="2">Grocery</option>
                                                    <option value="3">Ecomercers</option>
                                                    <option value="4">Real Estate</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Name: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="question" class="form-control" required="" value="<?=$question;?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Review: </label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3" id="answer" autocomplete="off" required="" name="answer"><?=$answer;?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2"> </label>
                                                <div class="col-sm-5">
                                                    <div class="custom-file">
                                                        <input type="submit" class="btn btn-primary" Placeholder="Submit">

                                                  </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <h4>View details</h4>
                                        <table class="table table-bordered table-striped mb-0" id="Trailupload">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Question</th>
                                                    <th>Answer</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $team=$this->crud_model->get_team_info();
                                                $i=0;
                                                foreach ($team as $row) {
                                                    ?>
                                                <tr>
                                                    <td><?=$i+1;?></td>
                                                    <td><?=$row['id'].'jpg';?></td>
                                                    <td><?=$row['theme_type'];?></td>
                                                    <td><?=$row['name'];?></td>
                                                    <td><?=$row['review'];?></td>

                                                    <td>
                                                       <a href="<?=base_url('faqs/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'faqs/id/'.$row['id'].'/0';?>');">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php $i++;}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>

