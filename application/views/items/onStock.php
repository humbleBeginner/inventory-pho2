<div class="block-header">
    <h2>Stock Items</h2>
</div>

<div class="card">
    <div class="card-header">
        <h2>All Stock Items</h2>

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
        <table data-bind="dataTable" id="itemsDT" class="table table-striped">
            <thead>
                <tr>
                    <th>Reference No.</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th class="text-center">Quantity</th>
                    <th>Expiration</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) : ?>
                    <tr id="itemTR_<?php echo $item->id?>" class="">
                        <td><strong><?php echo $item->reference_no; ?></strong></td>
                        <td><strong><?php echo $item->code; ?></strong></td>
                        <td><strong><?php echo $item->item_name; ?></td>
                        <td class="text-center"><?php echo "$item->quantity ".inflector::plural($item->unit,$item->quantity); ?></td>
                        <td><?php echo date('D M d, Y',strtotime($item->expiration_date));?></td>
                        <td>
                                  <div class="btn-group">
                                    <a href="javascript:void(0);" data-item-id="<?php echo $item->id; ?>" class="btn bgm-bluegray btn-xs item-edit">Edit</a>
                                    <a href="javascript:void(0);" data-item-id="<?php echo $item->id; ?>" class="btn btn-danger btn-xs item-delete">&times;</a>
                                </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


