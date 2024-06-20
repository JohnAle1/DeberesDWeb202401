$(document).ready(function() {
    $('#servicesAccordion .collapse').on('show.bs.collapse', function() {
        $(this).prev('.card-header').addClass('active');
    }).on('hide.bs.collapse', function() {
        $(this).prev('.card-header').removeClass('active');
    });
});
