require('../sass/main.scss');

(function ($) {
  var homeHeadshot = $('#home-headshot');
  var points = Math.floor(Math.random() * 20) + 3;
  var string = 'polygon(';
  for (var i = 0; i < points; i++) {
    var percent = Math.floor(Math.random() * 100) + '% ';
    if (i % 2 !== 0) {
      percent += ', ';
    }
    string += percent;
  }
  string += ')';
  console.log(string);


  $(homeHeadshot).css('clip-path', string);
  console.log($(homeHeadshot));
})(jQuery);