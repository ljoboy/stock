<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Article > Modifier</h3>
            </div>
			<?php echo form_open('article/edit/'.$article['id_article']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="code" class="control-label"><span class="text-danger">*</span>Code</label>
						<div class="form-group">
							<input type="text" name="code" value="<?php echo ($this->input->post('code') ? $this->input->post('code') : $article['code']); ?>" class="form-control" id="code" />
							<span class="text-danger"><?php echo form_error('code');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fournisseur" class="control-label"><span class="text-danger">*</span>Fournisseur</label>
						<div class="form-group">
							<input type="text" name="fournisseur" value="<?php echo ($this->input->post('fournisseur') ? $this->input->post('fournisseur') : $article['fournisseur']); ?>" class="form-control" id="fournisseur" />
							<span class="text-danger"><?php echo form_error('fournisseur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qte_min" class="control-label"><span class="text-danger">*</span>Quantité
							Minimum</label>
						<div class="form-group">
							<input type="text" name="qte_min" value="<?php echo ($this->input->post('qte_min') ? $this->input->post('qte_min') : $article['qte_min']); ?>" class="form-control" id="qte_min" />
							<span class="text-danger"><?php echo form_error('qte_min');?></span>
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
