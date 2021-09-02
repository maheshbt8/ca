
		<!-- Jquery Min JS -->
		<script src="<?php echo base_url()?>assets/front-end/js/jquery.min.js"></script>
		<!-- Popper Min JS -->
		<script src="<?php echo base_url()?>assets/front-end/js/popper.min.js"></script>
		<!-- Bootstrap Min JS -->
		<script src="<?php echo base_url()?>assets/front-end/js/bootstrap.min.js"></script>
		<!-- Meanmenu Min JS -->
		<script src="<?php echo base_url()?>assets/front-end/js/jquery.meanmenu.min.js"></script>
		<!-- WOW Min JS -->
		<script src="<?php echo base_url()?>assets/front-end/js/wow.min.js"></script>
		<!-- Tilt Min JS -->
		<script src="<?php echo base_url()?>assets/front-end/js/tilt.jquery.min.js"></script>
		<!-- Magnific Popup Min JS -->
		<script src="<?php echo base_url()?>assets/front-end/js/jquery.magnific-popup.min.js"></script>
		<!-- Owl Carousel Min JS -->
        <script src="<?php echo base_url()?>assets/front-end/js/owl.carousel.min.js"></script>
		<!-- Waypoints Min Js -->
        <script src="<?php echo base_url()?>assets/front-end/js/waypoints.min.js"></script>
        <!-- Jquery CounterUp Min JS -->
        <script src="<?php echo base_url()?>assets/front-end/js/jquery.counterup.min.js"></script>
		<!-- NiceSelect Min Js -->
        <script src="<?php echo base_url()?>assets/front-end/js/jquery.nice-select.min.js"></script>
		<!-- ajaxChimp Min JS -->
        <script src="<?php echo base_url()?>assets/front-end/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="<?php echo base_url()?>assets/front-end/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="<?php echo base_url()?>assets/front-end/js/contact-form-script.js"></script>
        <!-- Main JS -->
        <script src="<?php echo base_url()?>assets/front-end/js/main.js"></script>



<!-- Validation -->
        <script src="<?php echo base_url();?>assets/vendor/jquery-validation/jquery.validate.js"></script>
                <script src="<?php echo base_url();?>assets/js/examples/examples.validation.js"></script>

<script type="text/javascript">
    function add_to_cart(id){

        alert('Add To Cart you need to login first');
    }
</script>

<script type="text/javascript">
    function login_to_account(delete_url) {
        jQuery('#login_to_account-model').modal('show', {backdrop: 'static'});
        $('#my_data').html(delete_url);
        //document.getElementById('row_status_link').setAttribute('href' , delete_url);
    }
    function delete_row(delete_url) {
        jQuery('#delete-model').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>
    <div class="modal fade" id="login_to_account-model">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                <header class="card-header">
                                                <h2 class="card-title"><?=$system_name;?></h2>
                                            </header>
                                            <div class="card-body">
                                                <div class="modal-wrapper">
                                                    <div class="modal-icon">
                                                        <i class="fas fa-question-circle"></i>
                                                    </div>
                                                    <div class="modal-text">
                                                        <h4 id="my_data"></h4>
                                                    </div>
                                                </div>
                                            </div>
                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="<?=base_url('login');?>" class="btn btn-success" id="row_status_link"><?php echo 'Login';?></a>
                    <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo 'Cancel';?></button>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="delete-model">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <header class="card-header">
                                            <h2 class="card-title">Are you sure?</h2>
                                        </header>
                                        <div class="card-body">
                                            <div class="modal-wrapper">
                                                <div class="modal-icon">
                                                    <i class="fas fa-question-circle"></i>
                                                </div>
                                                <div class="modal-text">
                                                    <h4>Are you sure want to delete this information.?</h4>
                                                </div>
                                            </div>
                                        </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger" id="delete_link"><?php echo 'Delete';?></a>
                <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo 'Cancel';?></button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#videomodel').modal('show');
        /*video_popup();*/
        /*setInterval(function(){
         video_popup(); }, 15000);*/
    });

    /*function video_popup(){
        $('#videomodel').modal('show');

    }*/


</script>
<script type="text/javascript">
        //with this first line we're saying: "when the page loads (document is ready) run the following script"
$(document).ready(function () {
    
    //select the POPUP FRAME and show it
    $("#popup-image").hide().fadeIn(1000);

    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup-image").fadeOut(1000);
    });
});
    </script>
<script type="text/javascript">
    $(document).ready(function() {
        get_cart_data();
        cart_count_update();
    });
    function get_cart_data() {
        $.ajax({
            url: '<?php echo base_url();?>ajax/get_cart_data/',
            success: function(response)
            {
                jQuery('#my_cart').html(response);
                sub_total();
            }
    });
    }
    function sub_total(){
        var actual_price=$('.actual_price').text();
        var sub_total=$('.subtotal-amount').text();
        var amount=0;
        var amount1=0;
        var cart_plans = $(".subtotal_amount").map(function() {
            amount += parseInt( this.value );
            }).get();
        var cart_plans1 = $(".actual_price").map(function() {
            amount1 += parseInt( this.value );
            }).get();
        $('#subtotal').html(amount);
        $('#actualprice').html(amount1);
        $('#discount_pri').html(amount1-amount);
        grand_total();
    }
    function grand_total(){
        var sub_total=$('#subtotal').text();
        var discount=$('#discount').text();
        var total=sub_total-discount;
        $('#grand_total').html(total);   
    }
    function get_coupon_dis(){
        var my_coupon=$('#my_coupon').val();
        if(my_coupon==''){
            $('#coupon_message').html('<span class="text-danger">Please Apply Any Coupon<input type="hidden" id="coupon_discount" value="0"/></span>');
            $('#discount').html('0');
            grand_total();
        }else{
            var cart_plans = $(".cart_plans").map(function() {
            return this.value;
            }).get();
            var cartplans=cart_plans.join(",");
            if(cartplans != ''){
            $.ajax({
            type:'POST',
            url: '<?php echo base_url();?>ajax/checkCoupon/',
            data: {cartplans: cartplans, my_coupon : my_coupon},
            success: function(response)
            {
                jQuery('#coupon_message').html(response);

                var discount=$('#coupon_discount').val();
                if(discount){
                var grand=$('#grand_total').text();
                var cou_dis=(discount/100)*grand;
                $('#discount').html(cou_dis.toFixed(2));
                grand_total();
                }
            }
            });
            }else{
                $('#coupon_message').html('<span class="text-danger">Please Add Any Package<input type="hidden" id="coupon_discount" value="0"/></span>');
                $('#discount').html('0');
                grand_total();
            }
        }
    }
    function cart_count_update(){
        $.ajax({
            url: '<?php echo base_url();?>ajax/cart_count_update/',
            success: function(response)
            {
                jQuery('.cart_count_update').html(response);
            }
        });
    }
</script>
<script type="text/javascript">
    function get_subj_price(plan_id,package_id) {
        var a_price=$('#subj_price'+plan_id).text();

        $.ajax({
            url: '<?php echo base_url();?>ajax/get_package_price/' + package_id +'/discount_price',
            success: function(response)
            {//alert(response);
                if($('#subj_id'+package_id).is(":checked")){
                //alert("Checkbox is checked.");
                value=Math.abs(Math.abs(a_price)+Math.abs(response));
            }
            else if($('#subj_id'+package_id).is(":not(:checked)")){
                //alert("Checkbox is unchecked.");
                value=Math.abs(Math.abs(a_price)-Math.abs(response));
            }
                jQuery('#subj_price'+plan_id).html(value);
            }
    });
    }

    /*function addCart(pack_id) {
      AddCartList(pack_id);
    }*/
    function addsub_Cart(plan_id) {
        var checkedVals = $(".my_pack"+plan_id+":checked").map(function() {
            return this.value;
        }).get();
        if(checkedVals != ''){
        var packages=checkedVals.join(",");
        addCart(packages);
        }else{
            alert('Please Select Subjects');
        }
    }
   function addCart(packages) {
        $.ajax({
            type:'POST',
            url: '<?php echo base_url();?>ajax/addToCart/',
            data: {packages: packages},
            success: function(response)
            {
                alert('Added to Cart Successfully');
                cart_count_update();
            }
        });
    } 
</script>