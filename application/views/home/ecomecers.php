<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $shopbooks = $this->crud_model->get_shopimages_theme_type(3);
            $i = 0;
            foreach ($shopbooks as $book) {
                $active_class = ($i == 0) ? 'active' : ''; 
            ?>
                <div class="carousel-item <?= $active_class; ?>">
                    <img class="w-100" src="<?= base_url('uploads/banner/' . $book['id'] . '.jpg'); ?>" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <!-- Additional carousel content here -->
                            <a href="<?= base_url('addshopitem'); ?>" class="btn btn-primary py-md-3 px-md-5 me-3" style="margin-left: 250px;">Order</a>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->    <!-- Carousel End -->


     <!-- Products Start -->
    <div class="container-fluid py-5" id="product">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Items</h6>
                <h1 class="display-5">Electronic products</h1>
            </div>
            <div class="owl-carousel product-carousel  product-carousel-2 px-5">
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/p1.jpg" alt="">
                        <h6 class="mb-3">Iphone</h6>
                        <h5 class="text-primary mb-0">25000 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/l2.jpg" alt="">
                        <h6 class="mb-3">Acer Laptop</h6>
                        <h5 class="text-primary mb-0">35000 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/t1.jpg" alt="" style="height: 190px; width: 550px;">
                        <h6 class="mb-3">TV</h6>
                        <h5 class="text-primary mb-0">55000 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/f1.png" alt="" style="height: 190px;">
                        <h6 class="mb-3">Fridge</h6>
                        <h5 class="text-primary mb-0">250 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/b1.jpg" alt="" style="height: 190px;">
                        <h6 class="mb-3">Bag</h6>
                        <h5 class="text-primary mb-0">5200 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

        <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial-gro py-5 my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel p-5">
                        <?php
                    $testomonial = $this->crud_model->get_testomonial_info_by_theme_type(3);

                    foreach ($testomonial as $row) {
                    ?>
                        <div class="testimonial-item text-center text-dark">
                            <p class="fs-5"><?= $row['review']; ?></p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-dark mb-0"><?= $row['name']; ?></h4>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

   
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid about pt-5" id="about">
    <div class="container">
        <div class="row gx-5">
            <?php
            
            $about = $this->crud_model->get_about_image_by_theme(3);
            $i = 0;
            foreach ($about as $row) {
                ?>
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                        <?php

                        $image_path = base_url('uploads/about/') . $row['id'] . '.jpg';
                        ?>
                        <img class="img-fluid mt-auto mx-auto" src="<?= $image_path ?>" style="height: 1000px;">
                    </div>
                </div>
                <div class="col-lg-7 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <?= $row['description']; ?>
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
        </div>
    </div>
</div>
    <!-- About End -->
    
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Orders</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Complete Project</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    

   




    <!-- Team Start -->
    
    <div class="container-fluid bg-testimonial-2 py-5 my-5" id="services">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h1 class="display-5">TEAM</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel p-5">
                    <?php
                    $teams = $this->crud_model->get_team_by_theme(3);
                    foreach ($teams as $row) {
                        ?>
                        <div class="testimonial-item text-center text-white">
                            <?php
                            $image_path = base_url('uploads/team/') . $row['id'] . '.jpg';
                            ?>
                            <img class="img-fluid mx-auto p-2 border border-5 rounded-circle mb-4" src="<?= $image_path ?>" alt="">
                            <p class="fs-5"><?= $row['name']; ?></p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0"><?= $row['review']; ?></h4>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Team End -->
   
    <!-- Dynamic FAQ -->
    <div class="page">
    <div class="content">
        <aside>
            <h1>FAQ</h1>
            <p>We understand that you may have questions about our baked goods, so we've compiled a list of frequently asked questions to help you find the information you need.</p>
            <img src="<?php echo base_url('assets/home/plugins'); ?>/img/eco/bp1.png">
        </aside>
        <main>
            <h2>Product Information</h2>
            <?php
            $faqs = $this->crud_model->get_faqs_info_by_theme_type(3);
            /*$faqs = $this->crud_model->get_faqs_info();*/

            foreach ($faqs as $row) {
            ?>
                <details>
                    <summary><?= $row['question']; ?></summary>
                    <p><?= $row['answer']; ?></p>
                </details>
            <?php
            }
            ?>
        </main>
    </div>
</div>


    <!-- Dynamic FAQ -->