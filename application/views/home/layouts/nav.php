<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Farm</span>Fresh</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Home</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?php echo base_url('/');?>" class="dropdown-item">Food</a>
                        <a href="<?php echo base_url('home/grocery');?>" class="dropdown-item">Grocery</a>
                        <a href="<?php echo base_url('home/ecomecers');?>" class="dropdown-item">Ecomerces</a>
                        <a href="<?php echo base_url('home/real');?>" class="dropdown-item">Real-Estate</a>
                        
                    </div>
                </div>
                
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#services" class="nav-item nav-link">Service</a>
                <a href="#product" class="nav-item nav-link">Product</a>
                
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>