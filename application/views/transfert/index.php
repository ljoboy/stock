<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Transferts > Lister</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('transfert/add'); ?>" class="btn btn-success btn-sm"> Ajouter</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Transfert</th>
						<th>Id Article</th>
						<th>Id Site</th>
						<th>Id Demandeur</th>
						<th>Id Sender</th>
						<th>Qte Envoyer</th>
						<th>Date Envoi</th>
						<th>Status</th>
						<th>Date Reception</th>
						<th>Details</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($transferts as $t){ ?>
                    <tr>
						<td><?php echo $t['id_transfert']; ?></td>
						<td><?php echo $t['id_article']; ?></td>
						<td><?php echo $t['id_site']; ?></td>
						<td><?php echo $t['id_demandeur']; ?></td>
						<td><?php echo $t['id_sender']; ?></td>
						<td><?php echo $t['qte_envoyer']; ?></td>
						<td><?php echo $t['date_envoi']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['date_reception']; ?></td>
						<td><?php echo $t['details']; ?></td>
						<td>
                            <a href="<?php echo site_url('transfert/edit/'.$t['id_transfert']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></spanModifier</a>
                            <a href="<?php echo site_url('transfert/remove/'.$t['id_transfert']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
