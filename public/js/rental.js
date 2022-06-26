$(document).ready(function () {
    //Mac
    $("#btn-mac").click(function () {
        $('#macbookpro').modal('show');
    });

    $("#btn-mac-close").on('click', function() {
        $('#macbookpro').modal('hide');
    });
    //Hp
    $("#btn-hp").click(function () {
        $('#hpmodal').modal('show');
    });

    $("#btn-hp-close").on('click', function() {
        $('#hpmodal').modal('hide');
    });
    //Dell
    $("#btn-dell").click(function () {
        $('#dellmodal').modal('show');
    });

    $("#btn-dell-close").on('click', function() {
        $('#dellmodal').modal('hide');
    });
    //Printer
    $("#btn-printer").click(function () {
        $('#canonmodal').modal('show');
    });

    $("#btn-canon-close").on('click', function() {
        $('#canonmodal').modal('hide');
    });
});