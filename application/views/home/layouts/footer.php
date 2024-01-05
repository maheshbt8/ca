<footer class="footer-section">
        <div class="container">
            
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0"><?php
                
                $page_data['condition'] = $this->db->get_where('settings', array('setting_type' => 'address'))->row()->description;
                 echo $page_data['condition'];
              ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0"><?php
                
                $page_data['condition'] = $this->db->get_where('settings', array('setting_type' => 'system_email'))->row()->description;
                 echo $page_data['condition'];
              ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0"><?=$this->db->get_where('settings', array('setting_type' => 'whatsapp_number'))->row()->description;?></p>
                            </div>
                            </div>

                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3> Links</h3>
                            </div>
                            <ul>
                                <li><a href="<?php echo base_url('');?>">Home</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#">Grocery</a></li>
                                <li><a href="#services">services</a></li>
                                <li><a href="#">Ecommecre</a></li>
                                <li><a href="#product">Product</a></li>
                                <li><a href="#">Real-estate</a></li>
                                <li><a href="#contact">Contact</a></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="<?php echo base_url('');?>">Home</a></li>
                                <li><a href="#about">Terms</a></li>
                                <li><a href="#about">Privacy</a></li>
                                <li><a href="#about">Policy</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>