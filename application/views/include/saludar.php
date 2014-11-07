
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
              <li class="active">Saludar</li>
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
                Apartado Criminal
                <small>
                  <i class="icon-double-angle-right"></i>
                 Saludar
                </small>
              </h1>
            </div>
        </div>

<div class="row">

  
<h1>Saludar al usuario</h1>

	<div class="col-xs-12">
      <?php echo $formOpen;?><br />
        <div class="form-group">
         <?php echo $label1; ?>
           <div class="col-sm-9">
             <?php echo $input1; ?>
           </div>
       </div>
       <div class="space-4"></div>
       <div class="form-group">
                   <?php echo $label2; ?>
                   <div class="col-sm-9">
                       <?php echo $input2; ?><br />
                   </div>
               </div>
      <div class="clearfix form-actions">
         <div class="col-md-offset-3 col-md-9">
	         <button class="btn btn-info" type="submit" name="send">
		       <i class="icon-ok bigger-110"></i>
			      Saludar
		       </button>
         </div></div>
         <?php if(isset($button)) :?>
  <div class="col-sm-6">
  <table border="2px" style="background-color:#00FF00">
        <tr>
          <td>
        <?php if(isset($name) && isset($lastname)) : ?>
      <?php if(($name!="")&&($lastname!="")) :?>
                  <h2>Hola <u><?=$name?></u> tu apellido es <u><?=$lastname?></u></h2>
            <?php endif ?>
    <?php endif ?>
      <?php if(isset($error)) :?>
          <?php  echo $error;?>

    <?php endif ?>
              </td>
        </tr>
      </table>
<?php endif ?>


</div>
     

<?php echo $formClose; ?><br />
</div>
</div>

