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
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit District -->
<div data-bind = "with : districtVM" class="modal fade" id="editDistrictModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleUpdate" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit District</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="district-name" class="control-label">Name</label>
                            <div class="fg-line">
                                <input data-bind = "textInput : name" id="district-name" name="district-name" 
                                    type="text" class="form-control" placeholder="Edit district name" required>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                                        selectPickerOptions: { optionsArray: $parent.dataObjects.allDistricts }" 
                                            data-live-search="true" id="office-district"  name="office-district"></select>
                            </div>
                        </div>
                        
                        <div data-bind = "style: {display: district_id() ? 'block' : 'none'}" class="form-group">
                            <div class="col-md-12">
                                <label for="office-name" class="control-label">Name</label>
                                <div class="fg-line">
                                    <input data-bind = "textInput : name" id="office-name" name="office-name" type="text" class="form-control" placeholder="New office name" required>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Office Modal -->
<div data-bind = "with : officeVM" class="modal fade" id="editOfficeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleUpdate" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Office</h4>
                </div>
                <div class="modal-body">

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="office-district" class="control-label">District</label>
                                <select data-bind="selectPicker: district_id, 
                                    optionsText: 'name', optionsValue : 'id', optionsCaption: 'Select District',
                                        selectPickerOptions: { optionsArray: $root.dataObjects.allDistricts, edit:true }" 
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
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Office Budget Modal -->
<div data-bind = "with : officeBudgetVM" class="modal fade" id="addOfficeBudgetModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Office Budget</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="budget-date" class="control-label">Effective Year</label>
                            <input data-bind = "dateTimePicker : year, 
                                dateTimePickerOptions:{format:'YYYY'}" type="text" 
                                    class="form-control input-mask" data-mask="0000" placeholder = "YYYY" required>
                        </div>
                        <div class="col-md-6">
                            <label for="budget-office" class="control-label">Offices</label>
                            <select data-bind="selectPicker: office_id, 
                                optionsText: 'name',optionsValue: 'id', optionsCaption: 'Select Office',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allOffices }" 
                                        name="item-supplier" id="item-supplier" class="selectpicker" data-live-search="true" required>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="budget-amount" class="control-label">Amount(Php)</label>
                            <input data-bind = "textInput: amount" type="number" min="1" step=".1" class="form-control text-center" placeholder="Put budget amount here">
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button data-bind = "enable: canSave" type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Office Budget Modal -->
<div data-bind = "with : officeBudgetVM" class="modal fade" id="editOfficeBudgetModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleUpdate" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Office Budget</h4>
                </div>
                <div class="modal-body">
  
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="budget-date" class="control-label">Effective Year</label>
                                <input data-bind = "dateTimePicker : edit_year, 
                                    dateTimePickerOptions:{format:'YYYY'}" type="text" 
                                        class="form-control input-mask" data-mask="0000" placeholder = "YYYY" required>
                            </div>
                            <div class="col-md-6">
                                <label for="budget-office" class="control-label">Offices</label>
                                <select data-bind="selectPicker: edit_office_id, 
                                    optionsText: 'name',optionsValue: 'id', optionsCaption: 'Select Office',
                                        selectPickerOptions: { optionsArray: $root.dataObjects.allOffices, edit:true }" 
                                            name="budget-office" id="budget-office" class="selectpicker" data-live-search="true" required>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="budget-amount" class="control-label">Amount(Php)</label>
                                <input data-bind = "textInput: edit_amount" type="number" min="1" step=".1" class="form-control text-center" placeholder="Put budget amount here">
                            </div>
                        </div>
                 
                </div>
                <div class="modal-footer">
                    <button data-bind = "enable: canSave" type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Edit Category -->
<div data-bind="with: categoryVM" class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form data-bind = "submit : handleUpdate" action="" class="form-horizontal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Category</h4>
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
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Settings -->
<div class="modal fade" data-bind="settingVM" id="editSettingsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" id="system_setting" enctype="multipart/form-data" action="">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">System Settings</h4>
                </div>
                <div class="modal-body">
				
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="category-name" class="control-label">Site Name</label>
                            <div class="fg-line">
                                <input value="<?php echo $settings->name?>" id="site-name" name="site-name" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
					
                       <div class="form-group">
                        <div class="col-md-12">
                           <label for="category-name" class="control-label">Site Address</label>
                            <div class="fg-line">
                                <input id="site-address" name="site-address" type="text" class="form-control" value="<?php echo $settings->address?>" required>
                            </div>
                        </div>
                    </div> 
					
					  <div class="form-group">
                        <div class="col-md-12">
                            <label for="category-description" class="control-label">Site Currency</label>
                            <div class="fg-line">
                             	<select  name="site-currency" id="site-currency" required class="form-control">
                    				<option value="#8369|PHP" <?php $settings->currency=="&#8369;"?$selected="selected":$selected="";echo $selected;?>>₱ - PHP</option>
                    				<option value="#36|USD" <?php $settings->currency=="&#36;"?$selected="selected":$selected="";echo $selected;?>>$ - USD</option>
                    				<option value="#128|EURO" <?php $settings->currency=="&#128;"?$selected="selected":$selected="";echo $selected;?>>€ - EURO</option>
                    				<option value="#163|POUND" <?php $settings->currency=="&#163;"?$selected="selected":$selected="";echo $selected;?>>£ - POUND</option>
                    				<option value="#165|YEN" <?php $settings->currency=="&#165;"?$selected="selected":$selected="";echo $selected;?>>¥ - YEN</option>
                    				<option value="#8355|FRANC" <?php $settings->currency=="&#8355;"?$selected="selected":$selected="";echo $selected;?>>₣ - FRANC</option>
                    				<option value="#8356|LIRA" <?php $settings->currency=="&#8356;"?$selected="selected":$selected="";echo $selected;?>>₤ - LIRA</option>
                    				<option value="#8359|PESETA" <?php $settings->currency=="&#8359;"?$selected="selected":$selected="";echo $selected;?>>₧ - PESETA</option>
                    			    <option value="#8361|WON" <?php $settings->currency=="&#8361;"?$selected="selected":$selected="";echo $selected;?>>₩ - WON</option>
                    			</select>
                            </div>
                        </div>
                    </div>
				
					 <div data-bind="with: settingVM" class="form-group">
						<div class="col-md-6">
                            <label for="category-description" class="control-label">Expired Item Notification</label>
                            <div class="fg-line">
                             	<select data-bind="value: notifyBy" name="notiftype" id="notiftype" class="selectpicker" required>
                    				<option value="byDay" <?php $settings->notiftype=="byDay"?$selected="selected":$selected="";echo $selected;?>>By Day</option>
                    				<option value="byWeek" <?php $settings->notiftype=="byWeek"?$selected="selected":$selected="";echo $selected;?>>By Week</option>
                    				<option value="byMonth" <?php $settings->notiftype=="byMonth"?$selected="selected":$selected="";echo $selected;?>>By Month</option>
                    			</select>
                            </div>
                        </div>
						
						<div class="col-md-6">
                            <label for="category-description" class="control-label"></label>
                            <div class="fg-line">
                             	<select data-bind="selectPicker: selectedNotifyByValue,
                                        selectPickerOptions: { optionsArray: notifyByValues }" 
                                            name="notifdate" id="notifdate" class="selectpicker" data-live-search="true" required>
                                </select>
                            </div>
                        </div>
						
                    </div>
					
					 <div class="form-group">
                        <div class="col-md-8">
                            <label for="category-description" class="control-label">Site Favicon</label>
                            <div class="fg-line">
							<input type="hidden" id="preview_image" value="<?php echo url::base().$favicon->location;?>" />
                             	<input type="file" accept="image/*" id="site-favicon" name="site-favicon">
                            </div>
                        </div>
                    </div>
					
		    
					
                </div>
				<br><br>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div> <!---->

<!-- Supplier Modal -->
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
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Supplier Modal -->
<div data-bind = "with : supplierVM" class="modal fade" id="editSupplierModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleUpdate" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Suppllier</h4>
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
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Item Modal-->
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
                            <label for="category-description" class="control-label">Item Image</label>
                            <div class="fg-line">
                             	<input type="file" data-bind="file : image_file_name" accept="image/*" id="additem-image" name="image_file_name">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <label for="item-category" class="control-label">Category</label>
                            <select data-bind="selectPicker: category_id, 
                                    optionsText: 'name', optionsValue : 'id', optionsCaption: 'Select Category',
                                        selectPickerOptions: { optionsArray: $parent.dataObjects.allCategories }" 
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

                        <div class="col-md-8">
                            <label for="item-name" class="control-label">Name</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : name" id="item-name" 
                                    name="item-name" type="text" class="form-control" placeholder="New item name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- <div class="col-md-2">
                            <label for="item-quantity" class="control-label">Quantity</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : quantity" id="item-quantity" 
                                    type="number" min = "1" step = "1" value="1" class="form-control text-center" required>
                            </div>
                        </div> -->
                        <div class="col-md-4">
                            <label for="item-unit" class="control-label">Unit</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : unit" id="item-unit" 
                                    type="text" class="form-control" placeholder = "e.g. Box, Bottles, etc." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="item-cost" class="control-label">Cost</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : cost" id="item-cost" 
                                    type="number" min="1" step=".1" class="form-control text-center" placeholder="Unit cost" required>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Item Modal-->
<div data-bind="with: itemVM" class="modal fade" id="editItemModal" tabindex="-1" role="dialog" aria-hidden="true">
   
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form data-bind = "submit : handleUpdate" action="" id="editItem" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Item</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
					 <input type="hidden" id="editItemId" data-bind="value : updateID">
                    <div class="col-md-4">
                            <label for="category-description" class="control-label">Item Image</label>
                            <div class="fg-line" id="editItemImage">
                  	<input  type="file" accept="image/*" data-bind="file : image_file_name" id="eItemImage" name="item-image">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <label for="item-category" class="control-label">Category</label>
                            <select data-bind="selectPicker: category_id, 
                                    optionsText: 'name', optionsValue : 'id', optionsCaption: 'Select Category',
                                        selectPickerOptions: { optionsArray: $parent.dataObjects.allCategories }" 
                                            data-live-search="true" id="item-category" id="item-category" name="item-category">
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

                        <div class="col-md-8">
                            <label for="item-name" class="control-label">Name</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : name" id="item-name" 
                                    name="item-name" type="text" class="form-control" placeholder="New item name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="item-unit" class="control-label">Unit</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : unit" id="item-unit" 
                                    type="text" class="form-control" name="item-unit" placeholder = "e.g. Box, Bottles, etc." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="item-cost" class="control-label">Cost</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : cost" id="item-cost" name="item-cost"
                                    type="number" min="1" step=".1" class="form-control text-center" placeholder="Unit cost" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="item-price" class="control-label">Price</label>
                            <div class="dtp-container fg-line">
                                <input data-bind = "textInput : price" id="item-price" name="item-price"
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
                    <button type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Purchase Modal -->
<div data-bind = "with : purchaseVM" class="modal fade" id="addPurchaseModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 70%;">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Purchase</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="purchase-date" class="control-label">Date</label>
                            <div class="fg-line">
                                <input data-bind = "dateTimePicker : datetime, 
                                    dateTimePickerOptions:{format:'YYYY-MM-DD hh:mm'}" type="text" 
                                        class="form-control input-mask" data-mask="0000-00-00 00:00" placeholder = "YYYY-MM-DD hh:mm">   
                            </div>
                            
                        </div>
                        <div class="col-md-8">
                            <label for="purchase-ref-no">Reference Number</label>
                            <div class="fg-line">
                                <input data-bind = "textInput: reference_no" type="text" class="form-control input-mask" data-mask="A0-000-0000" placeholder="A0-000-0000">                            
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-5">
                            <label for="purchase-status ">Status</label>
                            <select data-bind = "value: status" name="purchase-status" id="purchase-status" class="selectpicker">
                                <option value="Received">Received</option>
                                <option value="Pending">Pending</option>
                                <option value="Ordered">Ordered</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="purchase-status ">Suppliers</label>
                            <select data-bind="selectPicker: supplier_id, 
                                optionsText: 'name', optionsValue : 'id', optionsCaption: 'Select Supplier',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allSuppliers }" name="item-supplier" id="item-supplier" class="selectpicker">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="purchase-status ">Items</label>
                            <select data-bind="selectPicker: selected_item, 
                            optionsText: 'item_name', optionsCaption: 'Select Item',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allItems }" name="item-supplier" id="item-supplier" class="selectpicker" data-live-search="true">
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
                                        <th>Expiration</th>
                                        <th>Quantity</th>
                                        <th>Cost</th>
                                        <th>Subtotal</th>
                                        <th>&times;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Grand Total (Php)</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th data-bind = "text: grandTotal"></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody data-bind = "foreach: items">
                                    <tr>
                                        <td data-bind = "text: code"></td>
                                        <td data-bind = "text: name"></td>
                                        <td>
                                            <input data-bind = "dateTimePicker : expiration_date, 
                                                dateTimePickerOptions:{format:'YYYY-MM-DD'}" type="text" 
                                                    class="form-control input-mask text-center" data-mask="0000-00-00" placeholder = "YYYY-MM-DD" required>
                                        </td>
                                        <td><input data-bind = "textInput: quantity" type="number" min="1" step="1" class="form-control text-center"></td>
                                        <td data-bind = "text: cost"></td>
                                        <td data-bind = "text: sub_total"></td>
                                        <td>
                                            <button class="btn btn-sm">&times;</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>      
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- View purchase details modal -->
<div data-bind = "with : purchaseVM" class="modal fade" id="viewPurchaseDetailsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Purchase Details</h4>
                </div>
                <div class="modal-body">
                    <!-- ko if: fullDetails().length -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="well">
                                Reference No. <strong data-bind = "text: fullDetails()[0].reference_no"></strong> <br /> 
                                Purchase Date: <strong data-bind = "text: moment(fullDetails()[0].datetime).format('MMMM DD, YYYY hh:mm A')"></strong> <br />
                                Ordered From: <strong data-bind = "text: fullDetails()[0].supplier_name"></strong> <br />
                                Status: <strong data-bind = "text: fullDetails()[0].status"></strong>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <table class="table table-stripe table-hover">
                                <thead>
                                    <tr>
                                        <th>Item - (Code)</th>
                                        <th>Unit</th>
                                        <th>Cost</th>
                                        <th>Expiration</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Sub-total (Php</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Grand Total (Php)</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-center" data-bind = "text: fullDetails()[0].grand_total"></th>
                                    </tr>
                                </tfoot>
                                <tbody data-bind = "foreach: fullDetails">
                                    <tr>
                                        <td><strong data-bind = "text: item_name"></strong> - (<span data-bind = "text: code"></span>)</td>
                                        <td data-bind = "text: unit"></td>
                                        <td data-bind = "text: cost"></td>
                                        <td data-bind = "text: expiration_date"></td>
                                        <td class="text-center" data-bind = "text: quantity"></td>
                                        <td class="text-center"><strong data-bind = "text: sub_total"></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /ko -->
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Transaction Modal -->
<div data-bind = "with : transactionVM" class="modal fade" id="addTransactionModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Transaction</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="transaction-date" class="control-label">Date</label>
                            <input data-bind = "dateTimePicker: date" type="text" class="form-control input-mask" data-mask="0000-00-00 00:00" placeholder="0000-00-00 00:00">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="transaction-office-id" class="control-label">Offices</label>
                            <select data-bind="selectPicker: office_id, 
                                 optionsText: 'name', optionsCaption: 'Select Office', optionsValue: 'id',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allOffices }" 
                                        name="transaction-office-id" id="transaction-office-id" class="selectpicker" data-live-search="true" required>
                            </select>
                        </div>
                        <div data-bind = "style: {display: isVisible}" class="col-md-6">
                            <label for="transaction-ref-no" class="control-label">Reference Number</label>
                            <select data-bind="selectPicker: details, 
                                optionsText: 'reference_no', optionsCaption: 'Select Reference No',
                                    selectPickerOptions: { optionsArray: selectedOfficeRefNos }" 
                                        name="transaction-office-id" id="transaction-office-id" class="selectpicker" data-live-search="true" required>
                            </select>                           
                        </div>
                    </div>

                    <div data-bind = "style: {display: isVisible}" class="form-group">
                        <div class="col-md-6">
                            <label for="transaction-amount" class="control-label">Amount (Php)</label>
                            <input data-bind = "textInput: amount" type="number" min="1" step=".1" class="form-control text-center">
                        </div>
                        <div data-bind = "style: {display: hasGrandTotal}" class="col-md-6">
                            <label for="transaction-total" class="control-label">Grand Total (Php)</label>
                            <input data-bind = "value: grandTotal" type="number" class="form-control text-center" readonly="">
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button data-bind = "enable: canSave" type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Transaction Modal -->
<div data-bind = "with : transactionVM" class="modal fade" id="editTransactionModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Transaction</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="transaction-date" class="control-label">Date</label>
                            <input data-bind = "dateTimePicker: date" type="text" class="form-control input-mask" data-mask="0000-00-00 00:00" placeholder="0000-00-00 00:00">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="transaction-office-id" class="control-label">Offices</label>
                            <select data-bind="selectPicker: office_id, 
                                 optionsText: 'name', optionsCaption: 'Select Office', optionsValue: 'id',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allOffices }" 
                                        name="transaction-office-id" id="transaction-office-id" class="selectpicker" data-live-search="true" required>
                            </select>
                        </div>
                        <div data-bind = "style: {display: isVisible}" class="col-md-6">
                            <label for="transaction-ref-no" class="control-label">Reference Number</label>
                            <select data-bind="selectPicker: details, 
                                optionsText: 'reference_no', optionsCaption: 'Select Reference No',
                                    selectPickerOptions: { optionsArray: selectedOfficeRefNos }" 
                                        name="transaction-office-id" id="transaction-office-id" class="selectpicker" data-live-search="true" required>
                            </select>                           
                        </div>
                    </div>

                    <div data-bind = "style: {display: isVisible}" class="form-group">
                        <div class="col-md-6">
                            <label for="transaction-amount" class="control-label">Amount (Php)</label>
                            <input data-bind = "textInput: amount" type="number" min="1" step=".1" class="form-control text-center">
                        </div>
                        <div data-bind = "style: {display: hasGrandTotal}" class="col-md-6">
                            <label for="transaction-total" class="control-label">Grand Total (Php)</label>
                            <input data-bind = "value: grandTotal" type="number" class="form-control text-center" readonly="">
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button data-bind = "enable: canSave" type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add Request Modal -->
<div data-bind = "with : requestVM" class="modal fade" id="addRequestModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Request</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="request-date" class="control-label">Date</label>
                            <input data-bind = "dateTimePicker : datetime, 
                                dateTimePickerOptions:{format:'YYYY-MM-DD hh:mm'}" type="text" 
                                    class="form-control input-mask" data-mask="0000-00-00 00:00" placeholder = "YYYY-MM-DD hh:mm" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="request-ref-no" class="control-label">Reference Number</label>
                            <input data-bind = "textInput: reference_no" type="text" class="form-control input-mask" data-mask="A0-000-0000" placeholder="A0-000-0000">                            
                        </div>
                        <div class="col-md-4">
                            <label for="request-status" class="control-label">Status</label>
                            <select data-bind = "value: status" name="request-status" id="request-status" class="selectpicker">
                                <option value="Received">Received</option>
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approved</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="request-office" class="control-label">Offices</label>
                            <select data-bind="selectPicker: office_id, 
                                 optionsText: 'name',optionsValue:'id', optionsCaption: 'Select Office',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allOffices }" 
                                        name="request-office" id="request-office" class="selectpicker" data-live-search="true">
                             </select>   
                        </div>
                        <div class="col-md-6">
                            <label for="request-office-budget" class="control-label">Budget</label>
                            <input data-bind = "value: budget" type="number" class="form-control" disabled="">
                        </div>
                    </div>
                    <div data-bind = "style: canAdd">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="request-item" class="control-label">Items</label>
                                <select data-bind="selectPicker: selected_item, 
                                     optionsText: displayText, optionsCaption: 'Select Item',
                                        selectPickerOptions: { optionsArray: $parent.dataObjects.allItems }" 
                                            name="request-item" id="request-item" data-live-search="true">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Cost</th>
                                        <th>Subtotal</th>
                                        <th class="text-center">Remove</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Grand Total (Php)</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th data-bind = "text: grandTotal"></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody data-bind = "foreach: items">
                                    <tr>
                                        <td data-bind = "text: code"></td>
                                        <td data-bind = "text: name"></td>
                                        <td>
                                            <div class="fg-line">
                                                <input data-bind = "textInput: quantity" type="number" min="1" step="1" class="form-control text-center qty">    
                                            </div>
                                        </td>
                                        <td data-bind = "text: cost"></td>
                                        <td data-bind = "text: subTotal"></td>
                                        <td class="text-center">
                                            <button data-bind = "click: $parent.removeItem" class="btn btn-danger btn-xs">&times;</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>   
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Request Modal -->
<div data-bind = "with : requestVM" class="modal fade" id="editRequestModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Request</h4>
                </div>
                <!-- ko if: requestData().length -->
                <div class="modal-body">
                    <div data-bind="with: requestData()[0]">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="request-date" class="control-label">Date</label>
                                <input data-bind = "dateTimePicker : datetime, 
                                    dateTimePickerOptions:{format:'YYYY-MM-DD hh:mm'}" type="text" 
                                        class="form-control input-mask" data-mask="0000-00-00 00:00" placeholder = "YYYY-MM-DD hh:mm" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="request-ref-no" class="control-label">Reference Number</label>
                                <input data-bind = "textInput: reference_no" type="text" class="form-control input-mask" data-mask="A0-000-0000" placeholder="A0-000-0000">                            
                            </div>
                            <div class="col-md-4">
                                <label for="request-status" class="control-label">Status</label>
                                <select data-bind = "value: status" name="request-status" id="request-status" class="selectpicker">
                                    <option value="Received">Received</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Approved">Approved</option>
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
                                            <th>Quantity</th>
                                            <th>Cost</th>
                                            <th>Subtotal</th>
                                            <th class="text-center">Remove</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Grand Total (Php)</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th data-bind = "text: $parent.editGrandTotal"></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody data-bind = "foreach: items">
                                        <tr>
                                            <td data-bind = "text: code"></td>
                                            <td data-bind = "text: name"></td>
                                            <td>
                                                <div class="fg-line">
                                                    <input data-bind = "textInput: quantity" type="number" min="1" step="1" class="form-control text-center qty">    
                                                </div>
                                            </td>
                                            <td data-bind = "text: cost"></td>
                                            <td data-bind = "text: subTotal"></td>
                                            <td class="text-center">
                                            
                                                <button data-bind = "click: $parents[1].editRemoveItem" class="btn btn-danger btn-xs">&times;</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>                      
                    </div>
                </div>
                <!-- /ko -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- View Request Modal -->
<div data-bind = "with : requestVM" class="modal fade" id="viewRequestModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">View Request</h4>
                </div>
                <!-- ko if: requestData().length -->
                <div data-bind = "with: requestData()[0]" class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="well">
                                Request Date:<strong data-bind = "text: datetime"></strong>  <br /> 
                                Status: <strong data-bind = "text: status"></strong>  <br />    
                                Grand Total: <strong data-bind = "text: 'Php '  + 'grand_total'"></strong>        
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Cost</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody data-bind = "foreach: items">
                                    <tr>
                                        <td data-bind = "text: code"></td>
                                        <td data-bind = "text: name"></td>
                                        <td>
                                            <div class="fg-line">
                                                <span data-bind = "text: quantity" class="text-center"></span>
                                            </div>
                                        </td>
                                        <td data-bind = "text: cost"></td>
                                        <td data-bind = "text: subTotal"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <!-- /ko -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add User Modal -->
<div data-bind = "with : userVM" class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : handleSubmit" action="" class="form-horizontal" novalidate>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-5">
                            <label for="user-role" class="control-label">Role</label>
                            <select data-bind="value: role" name="user-role" id="user-role" class="selectpicker">
                                <option value="2">Admin</option>
                                <option value="3">Office User</option>
                            </select required>
                        </div>
                        <div data-bind="style: {display: isOffice}" class="col-md-7">
                            <label for="user-office" class="control-label">Offices</label>
                            <select data-bind="selectPicker: office_id, 
                                 optionsText: 'name', optionsCaption: 'Select office',optionsValue:'id',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allOffices }" 
                                        name="user-office" id="user-office" class="selectpicker" data-live-search="true" required>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="user-name" class="control-label">Username</label>
                            <div class="fg-line">
                                <input data-bind = "textInput: username, event: {keyup: checkUsername}" type="text" class="form-control" placeholder="New username" required>    
                            </div>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="user-email" class="control-label">Email</label>
                            <div class="fg-line">
                                <input data-bind = "textInput:email, event: {keyup: checkEmail}" type="email" class="form-control" placeholder="New user email" required>    
                            </div>
                            
                        </div>
                    </div>

                    <div data-bind = "css: hasError " class="form-group">
                        <div class="col-md-10">
                            <div class="fg-line">
                                <label for="user-password" class="control-label">Password</label>
                                <input data-bind = "textInput: password,attr:{ type: pwdViewToggle }" id="user-password" 
                                    name="user-password" class="form-control" maxlength="13" placeholder="New user Pasword" required>      
                            </div>
                            <small data-bind = "text: errorMsg" class="help-block"></small>

                        </div>

                        <div class="col-md-2">
                            <br><br>
                            <div class="toggle-switch" data-ts-color="blue" data-toggle="tooltip" data-placement="top" 
                                title="Show password">

                               <label for="user-show-password" class="ts-label"></label>
                               <input data-bind = "checked: pwdView" id="user-show-password" type="checkbox"  hidden="hidden">
                               <label for="user-show-password" class="ts-helper"></label>
                           </div>
                        </div>
                    </div>
                    
                    <div data-bind="css: passwordMismatched,style: {display: hasPassword}" class="form-group">
                        <div class="col-md-12">
                            <div class="fg-line">
                                <label for="user-password-retype" class="control-label">Re-type Password</label>
                                <input data-bind="textInput: password_retype" name="user-password-retype" id="user-password-retype" type="password" class="form-control">
                            </div>
                            <small data-bind = "text: pwedCheckMsg" class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-bind="enable: validationPassed" type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- email -->
<div data-bind = "with : messageVM" class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" data-bind="submit : emailSending" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Send Message</h4>
                </div>
                <div class="modal-body">
				 <label for="user-name" class="control-label">To: <span data-bind="text : receiverName"></span></label>
				</br>
				</br>
                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="fg-line">
                                <input data-bind = "value : subject" id="email-subject" name="email-subject" type="text" class="form-control" placeholder="Subject *" required>
                            </div>
                        </div>
                    </div>
					
			      <div class="form-group">
				  <div class="col-md-12">
                                <div class="fg-line">
                                    <textarea class="form-control" data-bind="value : content" rows="5" placeholder="Type your Message *" id="email-content" name="email-content" required></textarea>
                                </div>
                                </div>
                            </div>
					
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Reply Email -->
<div data-bind = "with : messageVM" class="modal fade" id="replyEmailModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" data-bind="submit : replyEmailSending" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Reply Message</h4>
                </div>
                <div class="modal-body">
				 <label for="user-name" class="control-label">Reply To: <span data-bind="text : receiverName"></span></label>
				</br>
				</br>
                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="fg-line">
                               <input readonly="" data-bind = "value : subject" id="email-subject" name="email-subject" type="text" class="form-control" placeholder="Subject *" required>
                            </div>
                        </div>
                    </div>
					
			        <div class="form-group">
				        <div class="col-md-12">
                            <div class="fg-line">
                                <textarea class="form-control" data-bind="value : content" rows="15" placeholder="Type your Message *" id="email-content" name="email-content" required></textarea>
                            </div>
                        </div>
                    </div>
					
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Expiring Item -->
<div data-bind = "with : itemVM" class="modal fade" id="viewExpiringItemModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
	   <form action="" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">View Expiring Item Notification</h4>
                </div>
                <div class="modal-body">
				<table class="table">
                                <thead>
                                    <tr>
                                        <th>Item Image</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img data-bind="attr : {src : image_file_name}" height="50px" width="50px" alt="Item Image" /></td>
                                        <td data-bind="text : code"></td>
                                        <td data-bind="text : name"></td>
                                        <td data-bind="text : quantity"></td>
                                        <td data-bind="text : unit"></td>
                                    </tr>
                                 
                                </tbody>
                            </table>
       
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<!-- Change Password Modal 
<div data-bind = "with : userVM" class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form data-bind = "submit : changePassword" action="" class="form-horizontal" novalidate>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Change Password</h4>
                </div>
                <div class="modal-body">

                    <div data-bind = "css: hasError " class="form-group">
					             <div class="col-md-10">
                            <div class="fg-line">
                                <label for="user-password" class="control-label">Old Password</label>
                     <input data-bind = "textInput: typedPassword,attr:{ type: pwdViewToggle }" id="user-password" 
                                    name="user-password" class="form-control" maxlength="13" placeholder="New user Pasword" required>      
                            </div>
                            <small data-bind = "text: errorMsg" class="help-block"></small>

                        </div>
					
                        <div class="col-md-10">
                            <div class="fg-line">
                                <label for="user-password" class="control-label">New Password</label>
                          <input data-bind = "textInput: password,attr:{ type: pwdViewToggle }" id="user-password" 
                                    name="user-password" class="form-control" maxlength="13" placeholder="New user Pasword" required>      
                            </div>
                            <small data-bind = "text: errorMsg" class="help-block"></small>
                        </div>

                        <div class="col-md-2">
                            <br><br>
                            <div class="toggle-switch" data-ts-color="blue" data-toggle="tooltip" data-placement="top" 
                                title="Show password">

                               <label for="user-show-password" class="ts-label"></label>
                               <input data-bind = "checked: pwdView" id="user-show-password" type="checkbox"  hidden="hidden">
                               <label for="user-show-password" class="ts-helper"></label>
                           </div>
                        </div>
                    </div>
                    
                    <div data-bind="css: passwordMismatched,style: {display: hasPassword}" class="form-group">
					
			
					
					
                        <div class="col-md-12">
                            <div class="fg-line">
                                <label for="user-password-retype" class="control-label">Re-type Password</label>
                                <input data-bind="textInput: password_retype" name="user-password-retype" id="user-password-retype" type="password" class="form-control">
                            </div>
                            <small data-bind = "text: pwedCheckMsg" class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>-->


<!-- Change Role Modal -->
<div data-bind = "with : userVM" class="modal fade" id="changeRoleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  action="" data-bind="submit : changeRole" class="form-horizontal" novalidate>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Change Role</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="col-md-5">
                            <label for="user-role" class="control-label">Role</label>
                            <select data-bind="value: role" name="user-role" id="user-role" class="selectpicker">
                                <option value="2">Admin</option>
                                <option value="3">Office User</option>
                            </select required>
                        </div>
                        <div data-bind="style: {display: isOffice}" class="col-md-7">
                            <label for="user-office" class="control-label">Offices</label>
                            <select data-bind="selectPicker: office_id, 
                                 optionsText: 'name', optionsCaption: 'Select office',optionsValue:'id',
                                    selectPickerOptions: { optionsArray: $parent.dataObjects.allOffices }" 
                                        name="user-office" id="user-office" class="selectpicker" data-live-search="true" required>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
