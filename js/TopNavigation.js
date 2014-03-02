$(function(){
     $("#topNavTemp").load("Header.html #topNav",function(){
        var template = document.getElementById('topNav').innerHTML;
        var output = Mustache.render(template);
        $("#displayTopNavTemp").html(output);
    });
})
