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
              <li class="active"><?php echo lang('location_menu');?></li>
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
                <?php echo lang('location_menu');?>
                <small>
                  <i class="icon-double-angle-right"></i>
                 <?php echo lang('location_menu');?>
                </small>
              </h1>
            </div>
          </div>

<!-- GROCERY CRUD DIV BEGIN-->
<div style='height:30px;'></div>
 <div style="margin:10px;">
   <?php echo $output; ?>
 </div>
<!-- END GROCERY CRUD DIV-->
</body>  
                        