<div class="card animated fadeIn">
    <div class="card-header">
        <h2>All Offices <small>
    </div>
    
    <div class="table-responsive">
        <table data-bind = "bootgrid" class="table table-striped">
            <thead>
                <tr>
                    <th data-column-id="code" data-identifier="true">District</th>
                    <th data-column-id="name">Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($offices as $office) { ?>
                    <tr>
                        <td><?php echo $office->district->name; ?></td>
                        <td><?php echo $office->name; ?></td>
                        <td>
                            <span>todo</span>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>