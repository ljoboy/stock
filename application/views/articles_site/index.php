<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
				<h3 class="box-title">Articles en stock > Liste</h3>
            </div>
            <div class="box-body">
                <table id="liste1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Article</th>
							<th>Qte</th>
							<th>Date Modification</th>
							<th>Actions</th>
						</tr>
					</thead>
                   <tbody>
				   <?php $nb = 0;
				   foreach ($articles_sites as $a) { ?>
					   <tr>
						   <td><?php echo ++$nb; ?></td>
						   <td><?php echo $a['code']; ?></td>
						   <td><?php echo (int)$a['qte']; ?></td>
						   <td><?php echo nice_date($a['date_updated'], 'd M Y H:i:s'); ?></td>
						   <td></td>
					   </tr>
				   <?php } ?>
				   </tbody>
					<tfoot>
					<tr>
						<th>#</th>
						<th>Article</th>
						<th>Qte</th>
						<th>Date Modification</th>
						<th>Actions</th>
					</tr>
					</tfoot>
                </table>
                                
            </div>
        </div>
    </div>
</div>
