import $ from 'jquery'

var app = angular.module('GoldenPhoenixApp');

app.controller('ContactController', function($scope,$http,$timeout){
	var ctrl = this;
	ctrl.inquirer = {};
	ctrl.contactSubmitted = false;

	ctrl.sendMail = function (isValid) {
        var inquirer = {};
        ctrl.contactSubmitted = true;
        if (isValid) {
            inquirer = ctrl.inquirer
            $("#SendMail > .ui.dimmer").addClass('active');

            $http.get("/mail/inquires",{
                params: {
                    fullname: inquirer.fullname,
                    email: inquirer.email,
                    subject: inquirer.subject,
                    message: inquirer.message,
                }
            })	
            .then(function (response) {
                $("#SendMail > .ui.dimmer .ui.text.loader").html('Message Sent!');
                $("#SendMail > .ui.dimmer").css({
                    'backgroundColor': 'rgba(22, 171, 57,0.85)'
                });

                $timeout(function () {
                    $("#SendMail > .ui.dimmer").removeClass('active').removeAttr('style');
                }, 5000);

                //Clear all fields in contact form
                for (var prop in ctrl.inquirer) {
                    ctrl.inquirer[prop] = "";
                }
                ctrl.contactSubmitted = false;
                console.log(response);
                
            }, function (response) {
                ctrl.contactSubmitted = false;
                $("#SendMail > .ui.dimmer .ui.text.loader").html('Error Sending. Try again');
                $timeout(function () {
                    $("#SendMail > .ui.dimmer").removeClass('active');
                }, 5000);
                console.log(response);
            });
        }
    }
});