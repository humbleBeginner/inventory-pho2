<div class="block-header">
    <h2>Offices</h2>
</div>

<div class="card">
    <div class="card-header">
        <h2>All Offices</h2>

        <ul class="actions">
            <li class="dropdown action-show">
                <a href="#" data-toggle="dropdown">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>

                <div class="dropdown-menu pull-right">
                    <p class="p-20">
                        You can put anything here
                    </p>
                </div>
            </li>
        </ul>
    </div>

    <div class="card-body card-padding">
        <table data-bind="dataTable, tableName: 'officesDT'" id="officesDT" class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>District</th>
                    <th>Added</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody data-bind = "with: officeVM">
                <?php foreach ($offices as $office) : ?>
                    <tr id="officeTR_<?php echo $office->id; ?>">
                        <td><strong><?php echo $office->name?></strong></td>
                        <td><strong><?php echo $office->district->name; ?></strong></td>
                        <td><?php echo date('F j, Y h:m A',strtotime($office->created_at)) ?></td>
                        <td><?php echo date('F j, Y h:m A',strtotime($office->updated_at)) ?></td>
                        <td>
                           <div class="btn-group">
                                <a href="javascript:void(0);" data-id="<?php echo $office->id?>" class="btn bgm-bluegray btn-xs office-edit">Edit</a>
                                <a href="javascript:void(0);" data-id="<?php echo $office->id?>" class="btn btn-danger btn-xs office-delete">&times;</a>
                           </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


