 
 <?php
if($edit_data!=''){
    $name=$edit_data['name'];
    $client=$edit_data['client'];
    $form_url='testomonial/'.base64_encode($edit_data['id']);
}else{
    $this->session->set_userdata('last_page',current_url());
    $form_url='testomonial';
}
?>
                    <div class="row">
                        <div class="col">
                                <section class="card">
                                    <div class="card-header">
                                        <form method="post" action="<?=base_url().$form_url;?>" enctype="multipart/form-data" novalidate="novalidate" class="form-horizontal" id="form">
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Select Theme: </label>
                                                <div class="col-sm-5">
                                                    <select name="theme" class="form-control" required>
                                                    <option>Select Theme</option>
                                                    <option value="1">Food</option>
                                                    <option value="2">Grocery</option>
                                                    <option value="3">Ecomercers</option>
                                                    <option value="4">Real Estate</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Client Name: </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="name" class="form-control" required="" value="<?=$name;?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Client Review: </label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3" id="answer" autocomplete="off" required="" name="client"><?=$client;?></textarea>
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
                                                    <th>client name</th>
                                                    <th>client review</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                
                                                $i=0;
                                                foreach ($testomonial as $row) {
                                                    ?>
                                                <tr>
                                                    <td><?=$i+1;?></td>
                                                    <td><?=$row['name'];?></td>
                                                    <td><?=$row['review'];?></td>
                                                    <td>
                                                       <a href="<?=base_url('testomonial/').base64_encode($row['id']);?>" class=" mr-2  text-primary">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'testomonial/id/'.$row['id'].'/0';?>');">
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

