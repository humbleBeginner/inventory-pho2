;(function ( w, j , ko ) {
	"use strict";
	var x = w.INVENTO.XHR, 
		officeVM = {
			district_id : ko.observable(),
			name : ko.observable(),

			officeRecord: ko.observableArray([]),
		}, oVM = officeVM;

	oVM.edit = function(_id){
		var office = ko.utils.arrayFilter( w.INVENTO.VM.dataObjects.allOffices(), function ( office ) {
		    return _id == office.id; 
		});

		oVM.officeRecord(office);
		$("#editOfficeModal").modal("show");
		
	};
	oVM.handleSubmit = function() {
		var data = ko.toJS( oVM );
		delete data.edit;
		delete data.handleSubmit;
		x.post( "offices/save", data ).done( function ( res ) {
			oVM.name( undefined );
			
			w.notif("New Office added!", "success");
		}).fail( function() {
			w.notif("Whoops! Something went wrong.", "danger");
		});
	};

	oVM.handleUpdate = function(){
		return;
	};
	w.INVENTO.VM.officeVM = oVM;
}( window, jQuery, ko ));