<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sites > Lister</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('site/add'); ?>" class="btn btn-success btn-sm"> Ajouter</a>
                </div>
            </div>
            <div class="box-body">
                <table id="liste1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Nom Site</th>
							<th>Type</th>
							<th>Superviseur</th>
							<th>Details</th>
							<th>Actions</th>
						</tr>
					</thead>
                   <tbody>
				   <?php $nb = 0;
				   foreach ($sites as $s) {
					   if ($s['type'] == SITE_WAREHOUSE) $type = 'Warehouse'; elseif ($s['type'] == SITE_NORMAL) $type = 'Site';
					   else
						   $type = '';
					   ?>
						   <tr>
							   <td><?php echo ++$nb; ?></td>
							   <td><?php echo ucwords($s['nom']); ?></td>
							   <td><?php echo $type; ?></td>
							   <td><?php echo ucwords($s['nom_complet']); ?></td>
							   <td><?php echo ucfirst($s['details']); ?></td>
							   <td>
								   <a href="<?php echo site_url('site/edit/' . $s['id']); ?>"
									  class="btn btn-info btn-xs"><span class="fa fa-pencil"></span>Modifier</a>
								   <a href="<?php echo site_url('site/remove/' . $s['id']); ?>"
									  class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
							   </td>
						   </tr>
					   <?php } ?>
				   </tbody>
					<tfoot>
					<tr>
						<th>Id Site</th>
						<th>Type</th>
						<th>Superviseur</th>
						<th>Nom Site</th>
						<th>Details</th>
						<th>Actions</th>
					</tr>
					</tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
