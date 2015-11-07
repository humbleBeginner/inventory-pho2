(function(w, j, ko) {
	"use strict";
	var x = w.INVENTO.XHR,
		dataObjects = {
			allSuppliers: ko.observableArray([]),
			allCategories: ko.observableArray([]),
			allItems: ko.observableArray([]),
			allDistricts: ko.observableArray([]),
			allOffices: ko.observableArray([]),
			settings:ko.observableArray([]),
		},
		DO = dataObjects;

	x.getJ("ajax_source").done(function(res) {
		DO.allSuppliers(res.suppliers);
		DO.allCategories(res.categories);
		DO.allItems(res.items);
		DO.allDistricts(res.districts);
		DO.allOffices(res.offices);
		var test = ko.toJS(res.settings[0].configs);
		// console.log(ko.toJS(res.settings[0].configs));
		DO.settings(test);

	}).fail(function() {
		// alert('whoops, dataObjects!');
	});

	w.INVENTO.VM.dataObjects = dataObjects;

}(window, jQuery, ko));