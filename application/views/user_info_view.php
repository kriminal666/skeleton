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
<div class="flexigrid crud-form" style='width: 100%;'>
	<div class="mDiv">
		<div class="ftitle">
			<div class='ftitle-left'>
				<?php echo lang('user_info_title'); ?>  
			</div>		
			<div class='clear'></div>				
		</div>
		<div title="<?php echo lang('minimize_maximize');?>" class="ptogtitle">
			<span></span>
		</div>	
    </div>
    <div id='main-table-box'>
		<div class='form-div'>
			<?php
			$counter = 0; 
				foreach($fields as $field => $value)
				{
					$even_odd = $counter % 2 == 0 ? 'odd' : 'even';
					$counter++;
			?>
			<div class='form-field-box <?php echo $even_odd?>' id="todo_id">
				<div class='form-display-as-box' style="font-weight:bold;" id="todo">
					<?php echo $field; ?> :
				</div>
				<div class='form-input-box' id="TODO_ID">
					<input type="text" name="lname" value="<?php echo $value; ?>"/>
				</div>
				<div class='clear'></div>	
			</div>
     		<?php }?>

		</div>	
	</div>
</div>	
<div style='height:500px;'></div>  

