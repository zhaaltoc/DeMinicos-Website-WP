// document ready {{{1
$(document).ready(function() {
  // nav-item on click {{{2
  $(".nav-item").on("click", function() {
    var element = $(this)
    $('html, body').animate({
      scrollTop: $("#section-" + element.attr('id')).offset().top
    }, 500);
  });

  var company = 'De Minico\'s';
  var title = company;
  var count = 0;

  var page = new Vue({
    el:'#page',
    data: {
      test: true,
      name: 'page',
      title: title,
      subtitle: 'Subtitle Test',
      count: 0
    },
    methods: {
      sub: function() {
        if (this.test){
          this.title = 'Click';
        } else {
          this.title = title;
        }
        this.test = !this.test;
      }
    }
  });
  
  var nav = new Vue({
    el: '#nav',
    data: function() {
      return {
        name: title
      }
    },
    methods: {
      nav: function (newname) {
        if (newname == 'Home') {
          newname = company;
        }
        title = newname;
        page.title = newname;
        page.test = true;
      }
    }
  });
});
