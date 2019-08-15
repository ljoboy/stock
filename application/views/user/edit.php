<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User > Modifier</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id_user']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label">Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $user['phone']); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="create_time" class="control-label">Create Time</label>
						<div class="form-group">
							<input type="text" name="create_time" value="<?php echo ($this->input->post('create_time') ? $this->input->post('create_time') : $user['create_time']); ?>" class="form-control" id="create_time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="level" class="control-label">Level</label>
						<div class="form-group">
							<input type="text" name="level" value="<?php echo ($this->input->post('level') ? $this->input->post('level') : $user['level']); ?>" class="form-control" id="level" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_complet" class="control-label">Nom Complet</label>
						<div class="form-group">
							<input type="text" name="nom_complet" value="<?php echo ($this->input->post('nom_complet') ? $this->input->post('nom_complet') : $user['nom_complet']); ?>" class="form-control" id="nom_complet" />
							<span class="text-danger"><?php echo form_error('nom_complet');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $user['status']); ?>" class="form-control" id="status" />
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
