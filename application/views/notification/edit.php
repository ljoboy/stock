<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Notification > Modifier</h3>
            </div>
			<?php echo form_open('notification/edit/'.$notification['id_notification']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_user" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="id_user" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['id_user'] == $notification['id_user']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id_user'].'" '.$selected.'>'.$user['username'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_user');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="statut" class="control-label">Statut</label>
						<div class="form-group">
							<input type="text" name="statut" value="<?php echo ($this->input->post('statut') ? $this->input->post('statut') : $notification['statut']); ?>" class="form-control" id="statut" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="titre" class="control-label"><span class="text-danger">*</span>Titre</label>
						<div class="form-group">
							<input type="text" name="titre" value="<?php echo ($this->input->post('titre') ? $this->input->post('titre') : $notification['titre']); ?>" class="form-control" id="titre" />
							<span class="text-danger"><?php echo form_error('titre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="body" class="control-label"><span class="text-danger">*</span>Body</label>
						<div class="form-group">
							<input type="text" name="body" value="<?php echo ($this->input->post('body') ? $this->input->post('body') : $notification['body']); ?>" class="form-control" id="body" />
							<span class="text-danger"><?php echo form_error('body');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_notif" class="control-label">Date Notif</label>
						<div class="form-group">
							<input type="text" name="date_notif" value="<?php echo ($this->input->post('date_notif') ? $this->input->post('date_notif') : $notification['date_notif']); ?>" class="form-control" id="date_notif" />
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
