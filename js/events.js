$(function () {
    var $eventLi = $('#event-list ul li');
    var $eventTitle = $('#event-preview h4');
    var $eventPreview = $('#event-preview p');
    var $link = $('#event-preview span a');

    $eventLi.on('mouseenter', function () {
        var index = $eventLi.index(this);
        var id = $eventLi.eq(index).attr('id');
        $.ajax({
            type: 'GET',
            url: 'events/' + id + '.xml',
            cache: false,
            dataType: "xml",
            success: function (xml) {
                $eventTitle.html($(xml).find('title').text());
                $eventPreview.html($(xml).find('body').find('p').first().text());
                $eventLi.eq(index).addClass('current');
                $link.attr('href', 'event.php?event='+$(xml).find('id').text());
                for (var i = 0; i < $eventLi.length; i++) {
                    if (i !== index && $eventLi.eq(i).hasClass('current')) {
                        $eventLi.eq(i).removeClass('current');
                    }
                }
            }
        });
    });
})