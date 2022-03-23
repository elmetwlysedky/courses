var notificationsWrapper = $('.dropdown-notifications');
var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = notificationsWrapper.find('li.scrollable-container');

// Subscribe to the channel we specified in our Laravel Event
var pusher = new Pusher('API_KEY_HERE', {
    encrypted: true
});
var channel = pusher.subscribe('add-course');

channel.bind('App\\Events\\AddCourse', function (data) {
    var existingNotifications = notifications.html();
    // var avatar = Math.floor(Math.random()*(71 - 20 + 1)) +20;
    var newNotificationHtml = `<a href="`+data.teacher +`">

 <div class="mr-3 position-relative">
    <img src="/Dashboard/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
</div>
<div class="media-body">
 <div className="media-title">
        <a href="#">
        <span className="font-weight-semibold media-heading text-right">` + data.title + `</span>
        <span className="text-muted float-right font-size-sm">` + data.teacher + `</span>
        <span className="text-muted float-right font-size-sm">` + data.date + data.time + `</span>
        </a>
  </small>
  </div>
  </div>
  </a>`;


    notifications.html(newNotificationHtml + existingNotifications);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();

});
