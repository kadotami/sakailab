(function() {
  var array, canvas, clear_color, context, delete_finish, e, i, random_lang, sample;

  array = {
    language: ['自然言語処理', 'テリーヌ', '情報検索', 'コトバのウチュウ', 'Reborn', '酒井研', '形態素解析', '照応解析', 'deep learning']
  };

  i = 0;

  e = document.getElementById('background');

  delete_finish = function() {
    return $(".finish").remove();
  };

  random_lang = function() {
    var lang_block, left, rand, top;
    rand = Math.floor(Math.random() * array.language.length);
    top = Math.floor(Math.random() * 500 + 20);
    left = Math.floor(Math.random() * 1000 + 20);
    lang_block = '<div class="random-sentence" style="position:absolute; top:' + top + 'px;left:' + left + 'px;"><i class="fa fa-star"></i>' + array.language[rand] + '</div>';
    $("#background").append(lang_block);
    setTimeout(random_lang, 2000);
    i++;
    if (i > 10) {
      $("#background").empty();
      return i = 0;
    }
  };

  canvas = document.getElementById('background');

  if (canvas.getContext) {
    canvas.setAttribute('width', 1200);
    canvas.setAttribute('height', 600);
    context = canvas.getContext('2d');
  }

  clear_color = function(i, first, r, g, b) {
    var clear_param, color;
    if ((first + i) <= 0) {
      clear_param = 0;
    } else if ((first + i) >= 1) {
      clear_param = 1;
    } else {
      clear_param = first + i;
    }
    return color = 'rgba(' + r + ',' + g + ',' + b + ',' + clear_param + ')';
  };

  sample = function(i) {
    context.font = "25px 'Monotype Corsiva'";
    context.fillStyle = clear_color(i, 0, 0, 255, 255);
    context.fillText(array.language[0], 60, 60);
    context.fillStyle = clear_color(i, -0.8, 0, 255, 255);
    context.fillText(array.language[0], 80, 80);
    context.fillStyle = clear_color(i, -1.6, 0, 255, 255);
    context.fillText(array.language[0], 1000, 100);
    context.fillStyle = clear_color(i, -2.4, 0, 255, 255);
    context.fillText(array.language[0], 130, 260);
    context.fillStyle = clear_color(i, -3.2, 0, 255, 255);
    context.fillText(array.language[0], 60, 300);
    i = i + 0.03;
    if (i < 5) {
      console.log(i);
      return setTimeout(sample, 80, i);
    }
  };

}).call(this);
