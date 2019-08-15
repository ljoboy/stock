<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Articles Sites > Lister</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('articles_site/add'); ?>" class="btn btn-success btn-sm"> Ajouter</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Articles Site</th>
						<th>Id Article</th>
						<th>Id Site</th>
						<th>Qte Min</th>
						<th>Qte</th>
						<th>Date Update</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($articles_sites as $a){ ?>
                    <tr>
						<td><?php echo $a['id_articles_site']; ?></td>
						<td><?php echo $a['id_article']; ?></td>
						<td><?php echo $a['id_site']; ?></td>
						<td><?php echo $a['qte_min']; ?></td>
						<td><?php echo $a['qte']; ?></td>
						<td><?php echo $a['date_update']; ?></td>
						<td>
                            <a href="<?php echo site_url('articles_site/edit/'.$a['id_articles_site']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> > Modifier</a>
                            <a href="<?php echo site_url('articles_site/remove/'.$a['id_articles_site']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
