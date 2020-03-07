<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> -->
<script src="<?php echo base_url('assets/jquery-confirm/jquery-confirm.min.js') ?>"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.min.js"></script> -->
<script src="<?php echo base_url('assets/chosen/dist/js/chosen.jquery.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.6/cleave.min.js"></script>

<?php echo $this->uri->segment(1) == 'dana' ? '<script src="'.base_url('assets/js/dana.js').'"></script>': '' ;?>
