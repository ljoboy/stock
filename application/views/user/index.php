<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users > Lister</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm"> Ajouter</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id User</th>
						<th>Password</th>
						<th>Username</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Create Time</th>
						<th>Level</th>
						<th>Nom Complet</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['id_user']; ?></td>
						<td><?php echo $u['password']; ?></td>
						<td><?php echo $u['username']; ?></td>
						<td><?php echo $u['email']; ?></td>
						<td><?php echo $u['phone']; ?></td>
						<td><?php echo $u['create_time']; ?></td>
						<td><?php echo $u['level']; ?></td>
						<td><?php echo $u['nom_complet']; ?></td>
						<td><?php echo $u['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a>
                            <a href="<?php echo site_url('user/remove/'.$u['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Effacer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
