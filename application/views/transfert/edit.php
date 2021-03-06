<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Transfert > Modifier</h3>
            </div>
			<?php echo form_open('transfert/edit/'.$transfert['id_transfert']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_article" class="control-label"><span class="text-danger">*</span>Article</label>
						<div class="form-group">
							<select name="id_article" class="form-control">
								<option value="">select article</option>
								<?php 
								foreach($all_articles as $article)
								{
									$selected = ($article['id_article'] == $transfert['id_article']) ? ' selected="selected"' : "";

									echo '<option value="'.$article['id_article'].'" '.$selected.'>'.$article['code'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_article');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_site" class="control-label"><span class="text-danger">*</span>Site</label>
						<div class="form-group">
							<select name="id_site" class="form-control">
								<option value="">select site</option>
								<?php 
								foreach($all_sites as $site)
								{
									$selected = ($site['id_site'] == $transfert['id_site']) ? ' selected="selected"' : "";

									echo '<option value="'.$site['id_site'].'" '.$selected.'>'.$site['nom_site'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_site');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_demandeur" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="id_demandeur" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['id_user'] == $transfert['id_demandeur']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id_user'].'" '.$selected.'>'.$user['nom_complet'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_demandeur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_sender" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="id_sender" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['id_user'] == $transfert['id_sender']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id_user'].'" '.$selected.'>'.$user['nom_complet'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_sender');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qte_envoyer" class="control-label"><span class="text-danger">*</span>Qte Envoyer</label>
						<div class="form-group">
							<input type="text" name="qte_envoyer" value="<?php echo ($this->input->post('qte_envoyer') ? $this->input->post('qte_envoyer') : $transfert['qte_envoyer']); ?>" class="form-control" id="qte_envoyer" />
							<span class="text-danger"><?php echo form_error('qte_envoyer');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_envoi" class="control-label">Date Envoi</label>
						<div class="form-group">
							<input type="text" name="date_envoi" value="<?php echo ($this->input->post('date_envoi') ? $this->input->post('date_envoi') : $transfert['date_envoi']); ?>" class="form-control" id="date_envoi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $transfert['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_reception" class="control-label">Date Reception</label>
						<div class="form-group">
							<input type="text" name="date_reception" value="<?php echo ($this->input->post('date_reception') ? $this->input->post('date_reception') : $transfert['date_reception']); ?>" class="has-datetimepicker form-control" id="date_reception" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="details" class="control-label">Details</label>
						<div class="form-group">
							<input type="text" name="details" value="<?php echo ($this->input->post('details') ? $this->input->post('details') : $transfert['details']); ?>" class="form-control" id="details" />
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
