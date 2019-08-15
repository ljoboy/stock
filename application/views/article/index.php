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
                <table class="table table-striped">
                    <tr>
						<th>Id Article</th>
						<th>Code</th>
						<th>Fournisseur</th>
						<th>Qte</th>
						<th>Qte Min</th>
						<th>Date Creation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($articles as $a){ ?>
                    <tr>
						<td><?php echo $a['id_article']; ?></td>
						<td><?php echo $a['code']; ?></td>
						<td><?php echo $a['fournisseur']; ?></td>
						<td><?php echo $a['qte']; ?></td>
						<td><?php echo $a['qte_min']; ?></td>
						<td><?php echo $a['date_creation']; ?></td>
						<td>
                            <a href="<?php echo site_url('article/edit/'.$a['id_article']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></spanModifier</a>
                            <a href="<?php echo site_url('article/remove/'.$a['id_article']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
