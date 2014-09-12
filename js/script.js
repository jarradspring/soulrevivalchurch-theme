audiojs.events.ready(function() {
    var as = audiojs.createAll();
});

var feed = new Instafeed({
    get: 'user',
    userId:322924360,
    accessToken:'322924360.467ede5.4f597132b6874faaaf9f6d0862e5f762',
    clientId: '10a55c42a1fd4e4e8ede5263d4b06a6b',

//    template: '<div class="image"><a href="{{link}}"><img src="{{image}}" /></a></div>',
    success:instaResponse
});
feed.run();

function instaResponse(data)
{
    console.log(data.data);
    var instaData = data.data;
    jQuery.each(instaData, function(i, photo) {
        jQuery('#image' + i).html('<a href="'+instaData[i].link+'" target="_blank"><img src="'+instaData[i].images.standard_resolution.url+'"></a>');

    });
}

jQuery(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    jQuery(".video_area_responsive").fitVids();
});
