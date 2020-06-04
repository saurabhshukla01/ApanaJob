<footer class="pt-10 bg-dark text-white m-auto text-center font-weight-bold">

    <a class="mr-2" href="<?php echo base_url(); ?>information">Home</a>
    <a class="mr-2" href="<?php echo base_url(); ?>information/about">About Us</a>
    <a class="mr-2" href="<?php echo base_url(); ?>information/services">Services</a>
    <a class="mr-2" href="<?php echo base_url(); ?>information/privacy">Privacy & policy</a>
    <a class="mr-2" href="<?php echo base_url(); ?>information/term_condition">Term & condition</a>
    <a class="mr-2" href="<?php echo base_url(); ?>information/contact">Contact Us</a>

    <p>All rights reserved &copy; 2020 Info Edge India Ltd.</p>
</footer>

		<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
		<script>
		   CKEDITOR.replace('editor1');
		</script>
		<script>
			$(function () {
			  $('select').each(function () {
			    $(this).select2({
			      theme: 'bootstrap4',
			      width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			      placeholder: $(this).data('placeholder'),
			      allowClear: Boolean($(this).data('allow-clear')),
			    });
			  });
			});
		</script>

</body>
</html>
