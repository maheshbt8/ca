 <!--Trailupload-->
 <?php
if($edit_data!=''){
    $course=$edit_data['course'];
    $trail_code=$edit_data['code'];
    $main_code=$edit_data['main_code'];
    $form_url='courses/'.base64_encode($edit_data['id']);
}else{
    $this->session->set_userdata('last_page',current_url());
    $form_url='courses';
}
?>
                    <div class="row">
                        <div class="col">
                                <section class="card">
                                    <div class="card-header">
                                        <form method="post" action="<?=base_url().$form_url;?>" enctype="multipart/form-data" novalidate="novalidate" class="form-horizontal" id="form">
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Course: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="course" class="form-control" required="" value="<?=$course;?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Trail Code: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="code" class="form-control" required="" value="<?=$trail_code;?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Main code: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="main_code" class="form-control" required="" value="<?=$main_code;?>">
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
                                                    <th>Course</th>
                                                    <th>Trail Code</th>
                                                    <th>Main Code</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i=0;
                                                foreach ($courses as $row) {
                                                    ?>
                                                <tr>
                                                    <td><?=$i+1;?></td>
                                                    <td><?=$row['course'];?></td>
                                                    <td><?=$row['code'];?></td>
                                                    <td><?=$row['main_code'];?></td>
                                                    <td>
                                                       <a href="<?=base_url('courses/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <!-- <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'faqs/id/'.$row['id'].'/0';?>');">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a> -->
                                                    </td>
                                                </tr>
                                            <?php $i++;}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>

