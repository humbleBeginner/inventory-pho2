<!-- District -->
<div data-bind = "with : districtVM" class="modal fade" id="addDistrictModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add District</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="district-name" class="control-label">Name</label>
                            <div class="fg-line">
                                <input data-bind = "textInput : name" id="district-name" name="district-name" type="text" class="form-control" placeholder="New district name" required>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link">Save</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Office -->
<div data-bind = "with : officeVM" class="modal fade" id="addOfficeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Office</h4>
                </div>
                <div class="modal-body">
                    
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="office-district" class="control-label">District</label>
                                <select data-bind="selectPicker: district_id, 
                                    optionsText: 'name', optionsValue : 'id', optionsCaption: 'Select District',
                                        selectPickerOptions: { optionsArray: $parent.dataObjects.allDistricts; }" 
                                            data-live-search="true" id="office-district"  name="office-district"></select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="office-name" class="control-label">Name</label>
                                <div class="fg-line">
                                    <input data-bind = "textInput : name" id="office-name" name="office-name" type="text" class="form-control" placeholder="New office name" required>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link">Save</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Category -->
<div data-bind="with: categoryVM" class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Category</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="category-name" class="control-label">Name</label>
                            <div class="fg-line">
                                <input data-bind = "textInput : name" 
                                    id="category-name" name="category-name" type="text" 
                                    class="form-control" placeholder="New category name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="category-description" class="control-label">Description</label>
                            <div class="fg-line">
                                <textarea data-bind = "textInput : description" id="category-description"
                                name="category-description" cols="30" rows="3" class="form-control" 
                                    placeholder="Optional"></textarea>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-bind="submit: handleSubmit" type="submit" class="btn btn-link">Save</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Item -->
<div data-bind="with: itemVM" class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-hidden="true">
    
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit"action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Item</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="item-image" class="control-label">Image(Opional)</label>
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input data-bind = "value: image_file_name" id="test-upload" type="file" name="item-image">
                                    </span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="item-supplier">Supplier</label>
                            <select data-bind="selectPicker: category_id, 
                                optionsText: 'name', optionsValue : 'id', optionsCaption: 'Select Supplier',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allSuppliers; }" name="item-supplier" id="item-supplier" class="selectpicker"></select>
                    </div>
                        <div class="col-md-8">
                            <label for="item-category" class="control-label">Category</label>
                            <select data-bind="selectPicker: category_id, 
                                    optionsText: 'name', optionsValue : 'id', optionsCaption: 'Select Category',
                                        selectPickerOptions: { optionsArray: $parent.dataObjects.allCategories; }" 
                                            data-live-search="true" id="item-category" id="item-category">
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="item-code" class="control-label">Code</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : code" id="item-code" 
                                    type="text" name="item-code" class="form-control input-mask" 
                                        data-mask="A-00-00000" placeholder="A-00-00000" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="item-code" class="control-label">Expiration</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "dateTimePicker : expiration, 
                                    dateTimePickerOptions:{format:'YYYY-MM-DD';}" 
                                        type='text' class="form-control" placeholder="Click here...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="item-name" class="control-label">Name</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : name" id="item-name" 
                                    name="item-name" type="text" class="form-control" placeholder="New item name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="item-quantity" class="control-label">Quantity</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : quantity" id="item-quantity" 
                                    type="number" min = "1" step = "1" value="1" class="form-control text-center" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="item-unit" class="control-label">Unit</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : unit" id="item-unit" 
                                    type="text" class="form-control" placeholder = "e.g. Box, Bottles, etc." required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="item-cost" class="control-label">Cost</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : cost" id="item-cost" 
                                    type="number" min="1" step=".1" class="form-control text-center" placeholder="Unit cost" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="item-price" class="control-label">Price</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : price" id="item-price" 
                                    type="number" min="1" step=".1" class="form-control text-center" placeholder="Php" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="item-description" class="control-label">Description</label>
                            <div class="dtp-container fg-line">
                                <textarea data-bind = "textInput : description" 
                                    id="item-description" name="item-description" 
                                        cols="30" rows="3" class="form-control" placeholder = "Optional"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link">Save</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div data-bind = "with : supplierVM" class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Suppllier</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="supplier-name">Name</label>
                            <div class="fg-line">
                                <input data-bind = "textInput : name" id="supplier-name" name="supplier-name" type="text" class="form-control" placeholder="New Supplier name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="supplier-representative">Representative</label>
                            <div class="fg-line">
                                <input data-bind = "textInput : representative" id="supplier-representative" name="supplier-representative" type="text" class="form-control" placeholder="New Supplier representative">
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="supplier-contact">Contact Number</label>
                            <div class="fg-line">
                                <input data-bind = "textInput : contact_number" id="supplier-contact" name="supplier-contact" type="text" class="form-control input-mask" data-mask="0000-0000-0000" placeholder="xxx-xxxx-xxxx">
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="supplier-email">Email</label>
                            <div class="fg-line">
                                <input data-bind = "textInput : email" id="supplier-email" name="supplier-email" type="email" class="form-control" placeholder="New Supplier email">
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="supplier-address">Address</label>
                            <div class="fg-line">
                                <input data-bind = "textInput : address" id="supplier-address" name="supplier-address" type="text" class="form-control" placeholder="New Supplier address" required>
                            </div>
                        </div>
                    </div> 


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link">Save</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div data-bind = "with : purchaseVM" class="modal fade" id="addPurchaseModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Purchase</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="purchase-ref-no">Reference Number</label>
                            <input type="text" class="form-control input-mask" data-mask="A0-000-0000" placeholder="A0-000-0000">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="purchase-status ">Status</label>
                            <select name="purchase-status" id="purchase-status" class="selectpicker">
                                <option value="Received">Received</option>
                                <option value="Pending">Pending</option>
                                <option value="Ordered">Ordered</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="purchase-status ">Supplier</label>
                           <select data-bind="selectPicker: supplier_id, 
                                optionsText: 'name', optionsValue : 'id', optionsCaption: 'Select Supplier',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allSuppliers; }" name="item-supplier" id="item-supplier" class="selectpicker">
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>asdfsadfsdf</td>
                                        <td>sadfsdf</td>
                                        <td>sadfsdf</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>      
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link">Save</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>