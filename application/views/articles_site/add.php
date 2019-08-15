<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Articles Site > Ajouter</h3>
            </div>
            <?php echo form_open('articles_site/add'); ?>
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
									$selected = ($article['id_article'] == $this->input->post('id_article')) ? ' selected="selected"' : "";

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
									$selected = ($site['id_site'] == $this->input->post('id_site')) ? ' selected="selected"' : "";

									echo '<option value="'.$site['id_site'].'" '.$selected.'>'.$site['nom_site'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_site');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qte_min" class="control-label"><span class="text-danger">*</span>Qte Min</label>
						<div class="form-group">
							<input type="text" name="qte_min" value="<?php echo $this->input->post('qte_min'); ?>" class="form-control" id="qte_min" />
							<span class="text-danger"><?php echo form_error('qte_min');?></span>
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
						<label for="date_update" class="control-label"><span class="text-danger">*</span>Date Update</label>
						<div class="form-group">
							<input type="text" name="date_update" value="<?php echo $this->input->post('date_update'); ?>" class="form-control" id="date_update" />
							<span class="text-danger"><?php echo form_error('date_update');?></span>
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
