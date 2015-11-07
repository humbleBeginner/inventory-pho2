(function(w, j, ko) {
	"use strict";
	var x = w.INVENTO.XHR,
		DO = w.INVENTO.VM.dataObjects,
		districtVM = {
			name: ko.observable(),
			updateID:ko.observable(),
		},
		dVM = districtVM;

	dVM.edit = function(_id) {
		dVM.updateID(_id);
		var district = ko.utils.arrayFilter(DO.allDistricts(), function(district) {
			return district.id == _id;
		});
		dVM.name(district[0].name);
		$("#editDistrictModal").modal("show");
	};

	dVM.deleteDistrict = function(_id) {
		swal({
			title: "Are you sure?",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "Cancel",
			closeOnConfirm: false,
			closeOnCancel: true
		}, function(isConfirm) {
			if (isConfirm) {
				x.post("districts/delete/"+_id).done(function(res){
				    if (res) {
				        swal("Deleted!", "", "success");
				    }
				}).fail(function(){
				    w.notif("Whoops! Something went wrong.", "error");
				});

				
			}
		});

	};
	dVM.handleSubmit = function() {
		x.post("districts/save", {
			name: dVM.name()
		}).done(function(res) {
			if (res) {
				var newDistrict = ko.utils.parseJson(res);

				DO.allDistricts.push(newDistrict[0]);
				dVM.name(undefined);

				w.notif("New District added!", "success");
			}
		}).fail(function() {
			w.notif("Whoops! Something went wrong.", "danger");
		});
	};
	dVM.handleUpdate = function(){
		x.post("districts/update/" + dVM.updateID(),{name: dVM.name()}).done(function(res){
		    if (res) {
		    	$("#editDistrictModal").modal("hide");
		        swal("Updated!","","success");
		    }
		    
		}).fail(function(){
		    w.notif("Whoops! Something went wrong.", "error");
		});
	};

	w.INVENTO.VM.districtVM = dVM;
}(window, jQuery, ko));