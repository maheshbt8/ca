 <!--Add plan in plans menu-->
                    <div class="row">
                        <div class="col">
                                <section class="card">
                                    <div class="card-body">
                                        <form method="post" action="<?=base_url('add_image');?>" enctype="multipart/form-data" novalidate="novalidate" class="form-horizontal" id="form">
                                             <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2">Upload Image: </label>
                                                <div class="col-sm-6">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control custom-file-input" id="sapaper" name="img" required="">
                                                        <label class="custom-file-label" for="sapaper">Choose file</label>
                                                  </div>
                                                  <?php 
                                                            if($this->session->flashdata('img_error')!=''){echo '
                                                            <div class="error">'.$this->session->flashdata('img_error').'</div>';}?>
                                                <?php echo form_error('img', '<div class="error">', '</div>'); ?>
                                                </div>
                                                
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2" placeholder="">Name: </label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="name" class="form-control" required="" value="<?=set_value('name');?>">
                                                    <?php echo form_error('name', '<div class="error">', '</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 control-label text-sm-right pt-2" placeholder="">Theme: </label>
                                                <div class="col-sm-6">
                                                    <select  name="theme_type" class="form-control" required="" value="<?=set_value('author');?>">
                                                        <option>Select Theme</option>
                                                    <option value="1">Food</option>
                                                    <option value="2">Grocery</option>
                                                    <option value="3">Ecomercers</option>
                                                    <option value="4">Real Estate</option>
                                                    </select>
                                                    <?php echo form_error('author', '<div class="error">', '</div>'); ?>
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
                                    
                                </section>
                            </div>
                        </div>

<script type="text/javascript">

function show_subjects(type_id){
    if(type_id == 'softcopy'){
    $('#book_file').show()
    }else{
    $('#book_file').hide()
    }
}
</script>