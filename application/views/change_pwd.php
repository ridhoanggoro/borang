<!-- bar chart start -->
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
        <span class="badge badge-danger"><?php echo $this->session->flashdata('msg');?></span>
        <form class="login-form" action="<?php echo site_url('login/upd_pwd');?>" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>User ID</label>
                    <div class="form-group"> 
                        <input type="text" name="uid" class="form-control" placeholder="user ID"> 
                    </div> 
                    <label>New Password</label>
                    <div class="form-group pass_show"> 
                        <input type="password" name="pwd1" class="form-control" placeholder="New Password"> 
                    </div> 
                    <label>Confirm Password</label>
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