(function(w, j, ko) {
    "use strict";
    var x = w.INVENTO.XHR,
        dataObjects = {
            // allSuppliers: ko.observableArray([]),
            // allCategories: ko.observableArray([]),
            currentBudget: ko.observable(),
            allItems: ko.observableArray([]),
            // allDistricts: ko.observableArray([]),
            // allOffices: ko.observableArray([]),
            allReferenceNumbers: ko.observableArray([]),
            // settings: ko.observableArray([]),
        },
        DO = dataObjects;

    x.getJ("ajax_source/office").done(function(res) {
        // DO.allSuppliers(res.suppliers);
        // DO.allCategories(res.categories);
        DO.allItems(res.items);

        DO.currentBudget(res.budget_record);
        // DO.allDistricts(res.districts);
        // DO.allOffices(res.offices);
        DO.allReferenceNumbers(res.reference_numbers);
        // DO.settings(res.settings);
        //  var test = ko.toJS(res.settings[0].configs);
        // console.log(ko.toJS(res.settings[0].configs));
        //DO.settings(test);

    }).fail(function() {
        // alert('whoops, dataObjects!');
    });

    w.INVENTO.VM.dataObjects = dataObjects;

}(window, jQuery, ko));