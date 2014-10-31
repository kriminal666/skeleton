<div class="row">
<?php  if (isset($formOpen)):?>
<?php echo "<h1>Saludar al usuario</h1>"; ?>

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
         </div>
     </div>

<?php echo $formClose; ?><br />
</div>
</div>
<hr />
<?php if(isset($button)) :?>
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

<?php else: ?>
<h1>Hay que editar todo el body</h1>
<?php endif ?>






