<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Notifications > Lister</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('notification/add'); ?>" class="btn btn-success btn-sm"> Ajouter</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Notification</th>
						<th>Id User</th>
						<th>Statut</th>
						<th>Titre</th>
						<th>Body</th>
						<th>Date Notif</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($notifications as $n){ ?>
                    <tr>
						<td><?php echo $n['id_notification']; ?></td>
						<td><?php echo $n['id_user']; ?></td>
						<td><?php echo $n['statut']; ?></td>
						<td><?php echo $n['titre']; ?></td>
						<td><?php echo $n['body']; ?></td>
						<td><?php echo $n['date_notif']; ?></td>
						<td>
                            <a href="<?php echo site_url('notification/edit/'.$n['id_notification']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> > Modifier</a>
                            <a href="<?php echo site_url('notification/remove/'.$n['id_notification']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
