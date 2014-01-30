audiojs.events.ready(function() {
    var as = audiojs.createAll();
});

/*jQuery(document).ready(function() {
    var clientId = '[498364485]';
    jQuery(".instagram.tag").instagram({
        hash: 'sport',
        show: 10,
        clientId: clientId
    });
});*/


function createPhotoElement(photo) {
    var innerHtml = jQuery('<img>')
        .addClass('instagram-image')
        .attr('src', photo.images.standard_resolution.url);

    innerHtml = jQuery('<a>')
        .attr('target', '_blank')
        .attr('href', photo.link)
        .append(innerHtml);

    return jQuery('<div>')
        .addClass('col-sm-2 instagram-placeholder')
        .attr('id', photo.id)
        .append(innerHtml);
}

function didLoadInstagram(event, response) {
    var that = this;

    jQuery.each(response.data, function(i, photo) {
        jQuery(that).append(createPhotoElement(photo));
    });
}

jQuery(document).ready(function() {
    var clientId = 'baee48560b984845974f6b85a07bf7d9';

    jQuery('.instagram.tag').on('didLoadInstagram', didLoadInstagram);
    jQuery('.instagram.tag').instagram({
        hash: 'sun',
        count: 13,
        clientId: clientId
    });

});
