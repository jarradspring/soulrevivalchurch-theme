audiojs.events.ready(function() {
    var as = audiojs.createAll();
});

var feed = new Instafeed({
    get: 'user',
    userId:498364485,
    accessToken:'498364485.467ede5.17525d9871614dc3ab75d0e907f8562b',
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
