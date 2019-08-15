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
                <table class="table table-striped">
                    <tr>
						<th>Id Site</th>
						<th>Type</th>
						<th>Superviseur</th>
						<th>Nom Site</th>
						<th>Details</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sites as $s){ ?>
                    <tr>
						<td><?php echo $s['id_site']; ?></td>
						<td><?php echo $s['type']; ?></td>
						<td><?php echo $s['superviseur']; ?></td>
						<td><?php echo $s['nom_site']; ?></td>
						<td><?php echo $s['details']; ?></td>
						<td>
                            <a href="<?php echo site_url('site/edit/'.$s['id_site']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> > Modifier</a>
                            <a href="<?php echo site_url('site/remove/'.$s['id_site']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
