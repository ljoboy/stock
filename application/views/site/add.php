<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Site > Ajouter</h3>
            </div>
            <?php echo form_open('site/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<select id="type" name="type" class="form-control">
								<option value="">select</option>
								<?php 
								$type_values = array(
									'0'=>'Warehouse',
									'1'=>'Normal',
								);

								foreach($type_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('type')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="superviseur" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="superviseur" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['id_user'] == $this->input->post('superviseur')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id_user'].'" '.$selected.'>'.$user['nom_complet'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('superviseur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_site" class="control-label"><span class="text-danger">*</span>Nom Site</label>
						<div class="form-group">
							<input type="text" name="nom_site" value="<?php echo $this->input->post('nom_site'); ?>" class="form-control" id="nom_site" />
							<span class="text-danger"><?php echo form_error('nom_site');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="details" class="control-label">Details</label>
						<div class="form-group">
							<input type="text" name="details" value="<?php echo $this->input->post('details'); ?>" class="form-control" id="details" />
							<span class="text-danger"><?php echo form_error('details');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregister
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
