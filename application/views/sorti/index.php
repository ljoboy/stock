<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sortis > Lister</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('sorti/add'); ?>" class="btn btn-success btn-sm"> Ajouter</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Sorti</th>
						<th>Id Articles Site</th>
						<th>Qte</th>
						<th>Date Sortie</th>
						<th>Nom Client</th>
						<th>Ijd</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sortis as $s){ ?>
                    <tr>
						<td><?php echo $s['id_sorti']; ?></td>
						<td><?php echo $s['id_articles_site']; ?></td>
						<td><?php echo $s['qte']; ?></td>
						<td><?php echo $s['date_sortie']; ?></td>
						<td><?php echo $s['nom_client']; ?></td>
						<td><?php echo $s['ijd']; ?></td>
						<td>
                            <a href="<?php echo site_url('sorti/edit/'.$s['id_sorti']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> > Modifier</a>
                            <a href="<?php echo site_url('sorti/remove/'.$s['id_sorti']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
