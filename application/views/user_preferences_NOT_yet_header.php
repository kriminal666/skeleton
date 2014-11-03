<div class="main-content">
          <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
              try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
              <li>
                <i class="icon-home home-icon"></i>
                <a href="<?php echo base_url('/index.php');?>">Home</a>
              </li>
              <li class="active"><?php echo lang('preferences');?></li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
              <form class="form-search">
                <span class="input-icon">
                  <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                  <i class="icon-search nav-search-icon"></i>
                </span>
              </form>
            </div><!-- #nav-search -->
          </div>

          <div class="page-content">
            <div class="page-header">
              <h1>
                <?php echo lang('preferences');?>
                <small>
                  <i class="icon-double-angle-right"></i>
                 <?php echo lang('preferences');?>
                </small>
              </h1>
            </div>
          </div>
<div style="height:5px;"></div>
<div id="message-box" class="span12">
 <div class="alert alert-info">
  <a class="close" href="#" data-dismiss="alert"> x </a>
   <?php echo lang('user_preferences_not_yet_message1');?><br/>
   <?php echo lang('user_preferences_not_yet_message2');?>
    <a class="go-to-edit-form" href="<?php echo base_url('index.php/skeleton_main/user_preferences/add')?>">
	 <?php echo lang('here');?>
	</a>
 </div>
</div>
<div style="clear:both"></div>
