
Pace.on("start", function(){
    $('.loadingContainer').fadeIn();
});
Pace.start()

Pace.on("done", function(){
    $('.loadingContainer').fadeOut()
});