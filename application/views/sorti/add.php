<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sorti > Ajouter</h3>
            </div>
            <?php echo form_open('sorti/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_articles_site" class="control-label"><span class="text-danger">*</span>Articles Site</label>
						<div class="form-group">
							<select name="id_articles_site" class="form-control">
								<option value="">select articles_site</option>
								<?php 
								foreach($all_articles_sites as $articles_site)
								{
									$selected = ($articles_site['id_articles_site'] == $this->input->post('id_articles_site')) ? ' selected="selected"' : "";

									echo '<option value="'.$articles_site['id_articles_site'].'" '.$selected.'>'.$articles_site['id_article'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_articles_site');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qte" class="control-label"><span class="text-danger">*</span>Qte</label>
						<div class="form-group">
							<input type="text" name="qte" value="<?php echo $this->input->post('qte'); ?>" class="form-control" id="qte" />
							<span class="text-danger"><?php echo form_error('qte');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_sortie" class="control-label"><span class="text-danger">*</span>Date Sortie</label>
						<div class="form-group">
							<input type="text" name="date_sortie" value="<?php echo $this->input->post('date_sortie'); ?>" class="form-control" id="date_sortie" />
							<span class="text-danger"><?php echo form_error('date_sortie');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_client" class="control-label">Nom Client</label>
						<div class="form-group">
							<input type="text" name="nom_client" value="<?php echo $this->input->post('nom_client'); ?>" class="form-control" id="nom_client" />
							<span class="text-danger"><?php echo form_error('nom_client');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ijd" class="control-label"><span class="text-danger">*</span>Ijd</label>
						<div class="form-group">
							<input type="text" name="ijd" value="<?php echo $this->input->post('ijd'); ?>" class="form-control" id="ijd" />
							<span class="text-danger"><?php echo form_error('ijd');?></span>
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
