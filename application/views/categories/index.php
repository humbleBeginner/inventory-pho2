<div class="block-header">
    <h2>Categories</h2>
</div>

<div class="card">
    <div class="card-header">
        <h2>All Categories</h2>

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
        <table data-bind="dataTable" id="categoriesDT" class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Added</th>
                    <th>Updated</th>
                    <th>Actions</th>
                 
                </tr>
            </thead>
            <tbody data-bind = "with: categoryVM">
                <?php foreach ($categories as $category) : ?>
                    <tr id="categoryTR_<?php echo $category->id;?>">
                        <td><strong><?php echo $category->name; ?></strong></td>
                        <td><?php echo \Carbon\Carbon::parse( $category->created_at )->toFormattedDateString(); ?></td>
                        <td><?php echo \Carbon\Carbon::parse( $category->updated_at )->toFormattedDateString(); ?></td>
                        <td>
                           <div class="btn-group">
                               <a href="javascript:void(0);" data-id="<?php echo $category->id; ?>" class="btn bgm-bluegray btn-xs category-edit">Edit</a>
                               <a href="javascript:void(0);" data-id="<?php echo $category->id; ?>" class="btn btn-danger btn-xs category-delete">&times;</a>
                           </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


