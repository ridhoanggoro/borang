<div class="card shadow">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
  </div>
  <div class="card-body">
        <?php echo $this->session->flashdata('msg');?>
        <form class="login-form" action="<?php echo site_url('account/usr_reset_pwd');?>" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>User ID</label>
                    <div class="form-group"> 
                        <input type="text" name="uid" class="form-control" value="<?php echo $this->session->userdata('userid'); ?>" readonly=""> 
                    </div> 
                    <label>Password Baru</label>
                    <div class="form-group pass_show"> 
                        <input type="password" name="pwd1" class="form-control" placeholder="New Password"> 
                    </div> 
                    <label>Konfirmasi Password</label>
                    <div class="form-group pass_show"> 
                        <input type="password" name="pwd2" class="form-control" placeholder="Confirm Password"> 
                    </div>
                    <div class="form-group">                    
                        <button id="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>                        
            </div>
        </form>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
            $('.pass_show').append('<span class="ptxt">Show</span>');  
        });
        
        $(document).on('click','.pass_show .ptxt', function(){ 
        $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 
        $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; });         
    }); 
</script>