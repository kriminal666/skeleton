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
          </div>

            <div class="content">
              <form class="form-horizontal" role="form">
              <div class="row">
                <div class="col-md-3">
                  <div class="ace-file-input ace-file-multiple">
                   <input type="file">
                   <label data-title="Change avatar" class="file-label">
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
                                    
                          <div class="form-group"><!--checkbox 1-->
                            <!--<div class="col-md-3">-->
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

                            <div class="form-group col-md-3 no-padding-right">
                        <label class="control-label bolder blue"><?php echo lang('radio');?></label>

                        <div class="radio">
                          <label>
                            <input type="radio" class="ace" name="form-field-radio">
                            <span class="lbl"><?php echo lang('radio1');?></span>
                          </label>
                        </div>

                        <div class="radio">
                          <label>
                            <input type="radio" class="ace" name="form-field-radio">
                            <span class="lbl"> <?php echo lang('radio2');?></span>
                          </label>
                        </div>

                        <div class="radio">
                          <label>
                            <input type="radio" class="ace" name="form-field-radio">
                            <span class="lbl"> <?php echo lang('radio3');?></span>
                          </label>
                        </div>

                        <div class="radio">
                          <label>
                            <input type="radio" class="ace" name="form-field-radio">
                            <span class="lbl"><?php echo lang('radio4');?></span>
                          </label>
                        </div>
                      
                    </div><!--Cierra radio button--><!--Cierra col 3-->

                          </div><!--Cierra row-->


                 </div><!--Primera fila-->
                 <div class="row"><!--SEGUNDA FILA-->
                  <div class="col-md-3"><!--PRIMERA COLUMNA-->
                   <div class="form-group"><!--Primer campo-->
                   <label class="col-xs-6 col-sm-4" for="form-field-10"> <?php echo lang('titul');?></label>
                  <input id="form-field-10" class="col-xs-6 col-sm-8" type="text" placeholder="<?php echo lang('titul');?>">
                   </div>
                 </div><!--columna-->
               </div><!--fila2-->
               <div class="space-4"></div>
               <div class="row">
                <div class="col-md-3">
                   <div class="form-group"><!--Segundo campo-->
                   <label class="col-xs-6 col-sm-4" for="form-field-11"> <?php echo lang('catlevel');?></label>
                  <input id="form-field-11" class="col-xs-6 col-sm-8" type="text" placeholder="<?php echo lang('catlevel');?>">
                   </div>
                  </div>
               
                     </div><!--row-->
                     <div class="space-4"></div>
                     <div class="row">
                      <div class="col-md-3">
                      <div class="form-group"><!--Campo date-->
                              <label class="col-xs-6 col-sm-4" for="datepicker">
                                <?php echo lang('datealta');?>
                               <!-- <small class="text-success">&nbsp;</small>-->
                              </label>
                              
                             <div class="input-group col-xs-6 col-sm-8 input-group-sm">
                              <span class="input-group-addon">
                             <i class="icon-calendar"></i>
                             </span>
                             <input type="text" class="form-control  date-picker" id="id-date-picker-2">
                          
                           </div>
                            </div>
                          </div><!--col-->
                        </div><!--row-->
                        <div class="space-4"></div>
                        <div class="row">
                          <div class="col-md-3">
                             <div class="form-group">
                   <label class="col-xs-6 col-sm-4" for="form-field-12"> <?php echo lang('special');?></label>
                  <input id="form-field-12" class="col-xs-6 col-sm-8" type="text" placeholder="<?php echo lang('special');?>">
                </div>
                   </div><!--col-->
                  <div class="col-md-3">
                    <div class="form-group">
                    <label class="col-xs-6 col-sm-4" for="text1"> <?php echo lang('observ');?></label>
                    <textarea id="text1" class="form-control col-xs-6 col-sm-8" rows="3"></textarea>
                  </div>
                </div>
                <div class="col-md-3">
                  <button type="button" class="width-35 center btn btn-sm btn-info">
                             <i class="icon-ok bigger-110"></i>
                              Guardar
                            </button>
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
                     <!--Script imagen-->
                     <script type="text/javascript">
                  // *** editable avatar *** //
        try {//ie8 throws some harmless exception, so let's catch it
      
          //it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
          //so let's have a fake appendChild for it!
          if( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ) Image.prototype.appendChild = function(el){}
      
          var last_gritter
          $('#avatar').editable({
            type: 'image',
            name: 'avatar',
            value: null,
            image: {
              //specify ace file input plugin's options here
              btn_choose: 'Change Avatar',
              droppable: true,
              /**
              //this will override the default before_change that only accepts image files
              before_change: function(files, dropped) {
                return true;
              },
              */
      
              //and a few extra ones here
              name: 'avatar',//put the field name here as well, will be used inside the custom plugin
              max_size: 110000,//~100Kb
              on_error : function(code) {//on_error function will be called when the selected file has a problem
                if(last_gritter) $.gritter.remove(last_gritter);
                if(code == 1) {//file format error
                  last_gritter = $.gritter.add({
                    title: 'File is not an image!',
                    text: 'Please choose a jpg|gif|png image!',
                    class_name: 'gritter-error gritter-center'
                  });
                } else if(code == 2) {//file size rror
                  last_gritter = $.gritter.add({
                    title: 'File too big!',
                    text: 'Image size should not exceed 100Kb!',
                    class_name: 'gritter-error gritter-center'
                  });
                }
                else {//other error
                }
              },
              on_success : function() {
                $.gritter.removeAll();
              }
            },
              url: function(params) {
              // ***UPDATE AVATAR HERE*** //
              //You can replace the contents of this function with examples/profile-avatar-update.js for actual upload
      
      
              var deferred = new $.Deferred
      
              //if value is empty, means no valid files were selected
              //but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
              //so we return just here to prevent problems
              var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
              if(!value || value.length == 0) {
                deferred.resolve();
                return deferred.promise();
              }
      
      
              //dummy upload
              setTimeout(function(){
                if("FileReader" in window) {
                  //for browsers that have a thumbnail of selected image
                  var thumb = $('#avatar').next().find('img').data('thumb');
                  if(thumb) $('#avatar').get(0).src = thumb;
                }
                
                deferred.resolve({'status':'OK'});
      
                if(last_gritter) $.gritter.remove(last_gritter);
                last_gritter = $.gritter.add({
                  title: 'Avatar Updated!',
                  text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                  class_name: 'gritter-info gritter-center'
                });
                
               } , parseInt(Math.random() * 800 + 800))
      
              return deferred.promise();
            },
            
            success: function(response, newValue) {
            }
          })
        }catch(e) {}
      </script>
                   </div><!--content-->

                 