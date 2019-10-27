<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Articles > Lister</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('article/add'); ?>" class="btn btn-success btn-sm"> Ajouter</a>
                </div>
            </div>
            <div class="box-body">
                <table id="liste1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Fournisseur</th>
							<th>Qte Min</th>
							<th>Date Creation</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$nb = 0;
					foreach ($articles as $a) {
						?>
							<tr>
								<td><?php echo ++$nb; ?></td>
								<td><?php echo $a['code']; ?></td>
								<td><?php echo $a['fournisseur']; ?></td>
								<td><?php echo (int)$a['qte_min']; ?></td>
								<td><?php echo nice_date($a['date_creation'], 'd M Y H:i:s'); ?></td>
								<td>
									<a href="<?php echo site_url('article/edit/' . $a['id_article']); ?>"
									   class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a>
									<a href="<?php echo site_url('article/remove/'.$a['id_article']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
					<tfoot>
					<tr>
						<th>#</th>
						<th>Code</th>
						<th>Fournisseur</th>
						<th>Qte Min</th>
						<th>Date Creation</th>
						<th>Actions</th>
					</tr>
					</tfoot>
                </table>
                                
            </div>
        </div>
    </div>
</div>
