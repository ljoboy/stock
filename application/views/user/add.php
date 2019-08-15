<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User > Ajouter</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input autocomplete="new-password" type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password2" class="control-label"><span class="text-danger">*</span>Confirmer</label>
						<div class="form-group">
							<input autocomplete="new-password" type="password" name="password2" value="<?php echo $this->input->post('password2'); ?>" class="form-control" id="password2" />
							<span class="text-danger"><?php echo form_error('password2');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo $this->input->post('phone'); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="level" class="control-label">Level</label>
						<div class="form-group">
							<select id="level" name="level" class="form-control">
								<option value="" disabled>Choisissez un niveau</option>
								<option value="<?php echo STOCKCTRL_USER ?>" <?php echo (STOCKCTRL_USER == $this->input->post('level')) ? ' selected="selected"' : "" ?>>Stock Controller</option>
								<option value="<?php echo SUPERVISEUR_USER ?>" <?php echo (SUPERVISEUR_USER == $this->input->post('level')) ? ' selected="selected"' : "" ?>>Superviseur</option>
								<option value="<?php echo BUSINESS_USER ?>" <?php echo (BUSINESS_USER == $this->input->post('level')) ? ' selected="selected"' : "" ?>>Business level</option>
								<option value="<?php echo SUPER_ADMIN ?>" <?php echo (SUPER_ADMIN == $this->input->post('level')) ? ' selected="selected"' : "" ?>>Directeur Technique</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_complet" class="control-label">Nom Complet</label>
						<div class="form-group">
							<input type="text" name="nom_complet" value="<?php echo $this->input->post('nom_complet'); ?>" class="form-control" id="nom_complet" />
							<span class="text-danger"><?php echo form_error('nom_complet');?></span>
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
