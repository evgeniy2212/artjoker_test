$(document).ready(function() {
    setTimeout(function(){
        $(".alert").attr("hidden",true);
    }, 5000);
});

// Switch on checkbox
$('#select').click(function(){
    $('.checkbox').prop('checked', true);
});

// Switch off checkbox
$('#unselect').click(function(){
    $('.checkbox').prop('checked', false);
});
