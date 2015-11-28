(function(w, j, ko) {
	"use strict";

	function computeSubTotal(o) {
		console.log(o);
	}

	function Item(data) {
		var obj = {
			item_id: data.id,
			code: ko.observable(data.code),
			name: ko.observable(data.item_name),
			expiration_date: ko.observable(),
			quantity: ko.observable(1),
			cost: ko.observable(data.cost),
		};
		obj.sub_total = ko.pureComputed(function() {
			return (parseFloat(obj.quantity()) * parseFloat(obj.cost())).toFixed(2);
		});
		return obj;
	}

	var x = w.INVENTO.XHR,
		purchaseVM = {
			datetime: ko.observable(),
			reference_no: ko.observable(),
			supplier_id: ko.observable(),
			selected_item: ko.observable(),
			items: ko.observableArray([]),
			status: ko.observable(),

			fullDetails:ko.observableArray([]),
		},
		pVM = purchaseVM;

	pVM.selected_item.subscribe(function() {
		if (pVM.selected_item()) {
			pVM.items.push(new Item(pVM.selected_item()));
		}
	});

	pVM.grandTotal = ko.pureComputed(function() {
		var total = 0;
		$.each(pVM.items(), function() {
			total = parseFloat(this.sub_total()) + total;
		});

		return total.toFixed(2);
	});

	pVM.handleSubmit = function() {
		var _items = ko.toJS(pVM.items());
		$.each(_items, function(){
			this.expiration_date = moment(this.expiration_date).format('YYYY-MM-DD');
			delete this.code;
			delete this.name;
			delete this.cost;
		});
		var data = {
			reference_no: pVM.reference_no(),
			datetime: moment(pVM.datetime()).format('YYYY-MM-DD hh:mm'),
			year: moment(pVM.datetime()).format('YYYY'),
			month: moment(pVM.datetime()).format('MM'),
			supplier_id: pVM.supplier_id(),
			items: _items,
			grand_total: pVM.grandTotal(),
			status: pVM.status()
		}

		x.post("purchases/save", data).done(function(res) {
			swal("New Purchase added!","","success");
		}).fail(function() {
			swal("Whoops! Something went wrong.","","errror");
		});
	};


	pVM.getFullDetails = function(_id){
		x.getJ("purchases/getPurchaseDetails/" + _id).done(function(res){
		    if (res) {
		    	// var data = res;
		    	// data.items = JSON.parse(res.items);

		    	pVM.fullDetails(res);
		    	$("#viewPurchaseDetailsModal").modal("show");
		    }
		    
		}).fail(function(){
		    swal("Whoops! Something went wrong.","","errror");
		});
	};
	w.INVENTO.VM.purchaseVM = pVM;
}(window, jQuery, ko));