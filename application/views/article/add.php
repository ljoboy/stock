<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Article > Ajouter</h3>
            </div>
            <?php echo form_open('article/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="code" class="control-label"><span class="text-danger">*</span>Code</label>
						<div class="form-group">
							<input type="text" name="code" value="<?php echo $this->input->post('code'); ?>" class="form-control" id="code" />
							<span class="text-danger"><?php echo form_error('code');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fournisseur" class="control-label"><span class="text-danger">*</span>Fournisseur</label>
						<div class="form-group">
							<input type="text" name="fournisseur" value="<?php echo $this->input->post('fournisseur'); ?>" class="form-control" id="fournisseur" />
							<span class="text-danger"><?php echo form_error('fournisseur');?></span>
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
						<label for="qte_min" class="control-label"><span class="text-danger">*</span>Qte Min</label>
						<div class="form-group">
							<input type="text" name="qte_min" value="<?php echo $this->input->post('qte_min'); ?>" class="form-control" id="qte_min" />
							<span class="text-danger"><?php echo form_error('qte_min');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="datepicker" class="control-label"><span class="text-danger">*</span>Date Creation</label>
						<div class="form-group">
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" name="date_creation" value="<?php echo $this->input->post('date_creation'); ?>" class="form-control pull-right" id="datepicker" />
							</div>
							<span class="text-danger"><?php echo form_error('date_creation');?></span>
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
