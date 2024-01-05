<?php
$this->session->set_userdata('last_page', current_url());
?>

<div class="row">
    <div class="col">
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>
                <h2 class="card-title"><?= $page_title; ?></h2>
            </header>
            <div class="card-body">
                <form class="form-horizontal form-bordered" action="<?= base_url('aboutus'); ?>" method="post" enctype="multipart/form-data">
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
                        <label class="col-sm-4 control-label text-sm-right pt-2">Theme: </label>
                        <div class="col-sm-6">
                            <select name="theme_type" class="form-control" required="" id="themeSelect">
                                <option>Select Theme</option>
                                <option value="1">Food</option>
                                <option value="2">Grocery</option>
                                <option value="3">Ecommerce</option>
                                <option value="4">Real Estate</option>

                            </select>
                            <?php echo form_error('theme_type', '<div class="error">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea type="text" class="form-control" name="message" id="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-sm-right pt-2"> </label>
                        <div class="col-sm-5">
                            <div class="custom-file">
                                <input type="submit" class="btn btn-primary" placeholder="Submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
 <!--add books here-->
                    <div class="row">
                        <div class="col">
                                <section class="card">
                                    
                                    <div class="card-body">
                                        <table class="table table-bordered table-striped mb-0" id="addbookshere">
                                            <thead>
                                                <tr>
                                                    <th>SNo</th>
                                                    <th>Image</th>
                                                    <th>Theme Type</th>
                                                    <th>Description</th>
                                                     <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                        $about=$this->crud_model->get_aboutus_info();
                                        $i=0;
                                        foreach ($about as $row) {
                                                ?>
                                                <tr>
                                                    <td><?=$i+1;?></td>
                                                    <td><?=$row['id'].'jpg';?></td>
                                                    <td><?=$row['theme_type'];?></td>
                                                    <td><?=$row['description'];?></td>
                                                    
                                                    <td>
                                                        <a href="#" class="mr-2  text-danger" onclick="return delete_row('<?=base_url('set_row_status/').'shopbooks/id/'.$row['id'].'/0';?>');">
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


<script type="text/javascript" src="<?php echo base_url(); ?>/assets/vendor/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('message');

    document.getElementById('themeSelect').addEventListener('change', function () {
        var selectedTheme = this.value;

        if (selectedTheme !== 'Select Theme') {
            fetch('<?php echo base_url('admin/get_content_by_theme'); ?>/' + selectedTheme)
                .then(response => response.text())
                .then(content => {
                    CKEDITOR.instances['message'].setData(content);
                })
                .catch(error => console.error('Error fetching content:', error));
        } else {
            CKEDITOR.instances['message'].setData('');
        }
    });
</script>
