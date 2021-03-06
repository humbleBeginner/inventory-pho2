(function(w, j, ko) {
	"use strict";

	var x = w.INVENTO.XHR, settingVM = {
		name : ko.observable(),
		address : ko.observable(),
		currency : ko.observable(),
		image_file_name : ko.observable(),
	}, seVM = settingVM;

	seVM.handleSubmit = function() {

		var data = ko.toJS(seVM);
		data.image_file_name = data.image_file_name.replace(/C:\\fakepath\\/i, '');
		delete data.handleSubmit;
		console.log(data);

		x.post("settings/save", data).done(function(res) {
			w.notif("System Settings have been Updated!", "success");

		}).fail(function() {
			w.notif("Whoops! Something went wrong.", "danger");
		});
	};

	w.INVENTO.VM.settingVM = seVM;

}(window, jQuery, ko));