  var img_show_time  = 10000; 
  var transition_speed = 200;
  var images = $("#banners"),
    listItems = images.children('div'),
    listLen = listItems.length,
    i = 0,
    changeList = function () {
      listItems.eq(i).fadeOut(transition_speed, function () {
        i += 1;
        if (i === listLen) {
          i = 0;
        }
        listItems.eq(i).fadeIn(transition_speed);
      });
    };
  listItems.not(':first').hide();
  setInterval(changeList, img_show_time);
