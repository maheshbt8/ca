        <h1 class="text-center text-dark">Contact Us</h1>
        <div class="container" id="contact">
    <div class="content">

      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic"><?php
                
                $page_data['condition'] = $this->db->get_where('settings', array('setting_type' => 'address'))->row()->description;
                 echo $page_data['condition'];
              ?></div>
          
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          
          <div class="text-two"><?=$this->db->get_where('settings', array('setting_type' => 'whatsapp_number'))->row()->description;?></div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">
              <?php
                
                $page_data['condition'] = $this->db->get_where('settings', array('setting_type' => 'system_email'))->row()->description;
                 echo $page_data['condition'];
              ?>
          </div>
          <!-- address -->
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <!-- <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message"></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form> -->
      
            <?php
                 $this->load->view('front/questions_ask2');
            ?>
                                                                <?php
                if($this->session->flashdata('feeling_error')!=''){?>
                        <div class="alert alert-danger" role="alert">
                    <?=$this->session->flashdata('feeling_error');?>
                    </div><?php 
                }
                if($this->session->flashdata('feeling_success')!=''){?>
                        <div class="alert alert-success" role="alert">
                     <?=$this->session->flashdata('feeling_success');?>
                    </div><?php 
                }
            ?>
    </div>
    </div>
  </div>




  