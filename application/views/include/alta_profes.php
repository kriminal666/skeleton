
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
            </div><!--FIN BARRAS SUPERIORES-->
        
<!--COMIENZA FORMULARIO-->                    

<div class="row">
      <div class="col-xs-6">
        <h2>Alta Profes</h2>
        <form class="form-horizontal" role="form">
          <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo lang('lastname');?></label>
<div class="col-sm-9">
<input id="form-field-1" class="col-xs-10 col-sm-5" type="text" placeholder="<?php echo lang('lastname');?>">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo lang('name');?></label>
<div class="col-sm-9">
<input id="form-field-1" class="col-xs-10 col-sm-5" type="text" placeholder="<?php echo lang('name');?>">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo lang('identi');?></label>
<div class="col-sm-9">
<input id="form-field-1" class="col-xs-10 col-sm-5" type="text" placeholder="<?php echo lang('identi');?>">
</div>

</div>
<!--Data datepicker with mask-->
<div class="form-group">
                              <label class="col-sm-3 control-label no-padding-right" for="datepicker">
                                <?php echo lang('date');?>
                                <small class="text-success">&nbsp;&nbsp;</small>
                              </label>
                              
                             <div class="input-group col-xs-10 col-sm-4 input-group-sm">
                          <input type="text" class=" form-control hasDatepicker" id="datepicker">
                          <span class="input-group-addon">
                            <i class="icon-calendar"></i>
                          </span>
                        </div>
                            </div>
<!--Fin Data-->
<!--Municipio-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo lang('nace');?></label>
<div class="col-sm-9">
<input id="form-field-1" class="col-xs-10 col-sm-5" type="text" placeholder="<?php echo lang('nace');?>">
</div>
</div>
<!--address-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo lang('address');?></label>
<div class="col-sm-9">
<input id="form-field-1" class="col-xs-10 col-sm-5" type="text" placeholder="<?php echo lang('address');?>">
</div>
</div>

<!--Phone-->
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-mask-2">
            <?php echo lang('tlf');?>
       <small class="text-warning"> &nbsp;    </small>
         </label>
            <div class="input-group col-sm-8">
              <span class="input-group-addon">
                  <i class="icon-phone"></i>
                    </span>
                    
                    <input type="text" id="form-field-mask-2" class="col-xs-10 col-sm-5 input-mask-phone">
                    </div>
                  
        </div>
<!--Municipio-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo lang('village');?></label>
<div class="col-sm-9">
<input id="form-field-1" class="col-xs-10 col-sm-5" type="text" placeholder="<?php echo lang('village');?>">
</div>
</div>
<!--CP-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo lang('cp');?></label>
<div class="col-sm-9">
<input id="form-field-1" class="col-xs-10 col-sm-5" type="text" placeholder="<?php echo lang('cp');?>">
</div>
</div>
<!--email-->
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <?php echo lang('email');?></label>
<div class="col-sm-9">
<input id="form-field-1" class="col-xs-10 col-sm-5" type="text" placeholder="<?php echo lang('email');?>">
</div>
</div>
<div class="vspace-xs-4"></div>
<!--Foto-->

<div class="col-xs-12 col-sm-8">
  <div class="ace-file-input ace-file-multiple">
    <input type="file"><label data-title="Change avatar" class="file-label">
    <span data-title="No File ..." class="file-name">
      <i class="icon-picture"></i>
    </span>
  </label>
  <a href="#" class="remove">
    <i class="icon-remove"></i>
  </a>
</div>
</div>
</form>

</div>
</div>
</div>