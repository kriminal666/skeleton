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
              <li class="active"><?php echo lang('alta_profes');?></li>
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
               <?php echo lang('alta_profes');?>
                <small>
                  <i class="icon-double-angle-right"></i>
                 <?php echo lang('alta_profes');?>
                </small>
              </h1>
            </div>
            <label class="col-xs-6 col-sm-4">etiqueta
             <div class="col-xs-6 col-sm-8">
                            <span class="block input-icon input-icon-right">
                          <select id="e1" class="width-100 select2" name="realm">
                           <option value="" >hola</option>
                           <option value="" >hola</option>
                           <option value="" >hola</option>
                           </select></span></div>
                            <script src="<?php echo base_url('assets/js/select2.js');?>"></script>
  <script>
$(document).ready(function() { $("#e1").select2(); });
</script>