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
            <div class="content">
              <form class="form-horizontal" role="form">
              <div class="row">
                <div class="col-md-3">
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
                   <div class="col-md-3">
                 <div class="form-group"><!--Primer campo-->
                <label class="col-xs-6 col-sm-4" for="form-field-1"> <?php echo lang('lastname');?></label>
                 
                   <input id="form-field-1" class="col-xs-6 col-sm-8" type="text" placeholder="<?php echo lang('lastname');?>">
                   </div>
                   <div class="form-group"><!--Segundo campo-->
                    <label class="col-xs-6 col-sm-4" for="form-field-1"> <?php echo lang('name');?></label>
                    <input id="form-field-1" class="col-xs-6 col-sm-8" type="text" placeholder="<?php echo lang('name');?>">
                   
                    </div>
                    <div class="form-group"><!--Tercer campo-->
                     <label class="col-xs-6 col-sm-4" for="form-field-2"> <?php echo lang('identi');?></label>
                      <input id="form-field-2" class="col-xs-6 col-sm-8" type="text" placeholder="<?php echo lang('identi');?>">
                      
                      </div>
                        <div class="form-group"><!-- Quinto campo Municipio-->
                           <label class="col-xs-6 col-sm-4"><?php echo lang('nace');?></label>
                                <div class="col-xs-6 col-sm-8">
                          <select id="e3" class="width-100 select2" name="realm">
                           <option value="" >Navarra</option>
                           <option value="" >Tarragona</option>
                           <option value="" >Valencia</option>
                           </select></span>
                         </div>
                         </div>
                          
                         <div class="form-group"><!-- Quinto campo Municipio-->
                           <label class="col-xs-6 col-sm-4"><?php echo lang('village');?></label>
                                <div class="col-xs-6 col-sm-8">
                          <select id="e1" class="width-100 select2" name="realm">
                           <option value="" >Tortosa</option>
                           <option value="" >L'ametlla de mar</option>
                           <option value="" >Vinaroz</option>
                           </select></span>
                         </div>
                         </div>
                    
                         <div class="form-group"><!-- Sexto campo Municipio-->
                           <label class="col-xs-6 col-sm-4"><?php echo lang('cp');?></label>
                                <div class="col-xs-6 col-sm-8">
                          <select id="e2" class="width-100 select2" name="realm">
                           <option value="" >43850</option>
                           <option value="" >43870</option>
                           <option value="" >43810</option>
                           </select></span>
                         </div>
                         </div>

                              <div class="form-group"><!--Séptimo campo  email-->
                              <label class="col-xs-6 col-sm-4" for="form-field-6"> <?php echo lang('email');?></label>
                                
                            <input id="form-field-6" class=" form control col-xs-6 col-sm-8" type="text" placeholder="<?php echo lang('email');?>">
                               
                               </div>
                    </div><!--Fila1 col2-->
                    <div class="col-md-3"><!--Fila1 col3-->
                      <div class="form-group"><!--Campo date-->
                              <label class="col-xs-6 col-sm-4" for="datepicker">
                                <?php echo lang('date');?>
                               <!-- <small class="text-success">&nbsp;</small>-->
                              </label>
                              
                             <div class="input-group col-xs-6 col-sm-8 input-group-sm">
                              <span class="input-group-addon">
                             <i class="icon-calendar"></i>
                             </span>
                             <input type="text" class="form-control  date-picker" id="id-date-picker-1">
                          
                           </div>
                            </div>
                            <div class="form-group"><!--Campo tlf-->
                            <label class="col-xs-6 col-sm-4" for="form-field-mask-2">
                            <?php echo lang('tlf');?>
                           <!--  <small class="text-warning"> &nbsp; </small>-->
                                 </label>
                               <div class="input-group col-xs-6 col-sm-8 input-group-sm">
                                   <span class="input-group-addon">
                                     <i class="icon-phone"></i>
                                        </span>
                                         <input type="text" id="form-field-mask-2" class="form-control input-mask-phone">
                                         </div>
                  
                                    </div>
                                    
                          <div class="form-group col-md-6"><!--checkbox 1-->
                            <div class="col-md-3">
                            <label class="control-label   bolder blue"><?php echo lang('dpt');?></label>
                                 
                                  <div class="checkbox">
                                    <label>
                                    <input type="checkbox" class="ace" name="form-field-checkbox">
                                          <span class="lbl"> <?php echo lang('dpt_1');?></span>
                                          </label>
                                          </div>

                                  <div class="checkbox">
                                   <label>
                                     <input type="checkbox" class="ace" name="form-field-checkbox">
                                        <span class="lbl"><?php echo lang('dpt_2');?></span>
                                             </label>
                                             </div>
                                             <div class="checkbox">
                                            <label>
                                         <input type="checkbox" class="ace ace-checkbox-2" name="form-field-checkbox">
                                        <span class="lbl"> <?php echo lang('dpt_3');?></span>
                                        </label>
                                         </div>

                             </div>
                           </div>
                          <!--Radio button-->
                            <div class="col-md-6">
                        <label class="control-label bolder blue">Radio</label>

                        <div class="radio">
                          <label>
                            <input type="radio" class="ace" name="form-field-radio">
                            <span class="lbl"> radio option 1</span>
                          </label>
                        </div>

                        <div class="radio">
                          <label>
                            <input type="radio" class="ace" name="form-field-radio">
                            <span class="lbl"> radio option 2</span>
                          </label>
                        </div>

                        <div class="radio">
                          <label>
                            <input type="radio" class="ace" name="form-field-radio">
                            <span class="lbl"> radio option 3</span>
                          </label>
                        </div>

                        <div class="radio">
                          <label>
                            <input type="radio" class="ace" name="form-field-radio" disabled="">
                            <span class="lbl"> disabled</span>
                          </label>
                        </div>
                      
                    </div><!--Cierra radio button-->

                          </div><!--Cierra col 3-->

                 </div><!--Primera fila-->
                 <div class="row">
                  <div class="col-md-3">
                    
                  </div>
                     </div><!--row-->
                     </form>
                    <!--Load views js-->
                     <?php if (isset($altaProfe_data)): ?>
                       <?php foreach($altaProfe_data as $js_file): ?>
                             <script src="<?php echo $js_file; ?>"></script>
                                  <?php endforeach; ?>
                               <?php endif; ?>
                       <!--Script for datepicker ,phone mask-->
                     <script type="text/javascript">
                      $('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
                         $(this).prev().focus();
                           });
                    $('.input-mask-phone').mask('(999) 999-9999');
                    $(document).ready(function() { $("#e1,#e2,#e3").select2(); });
                     </script>
                   </div><!--content-->