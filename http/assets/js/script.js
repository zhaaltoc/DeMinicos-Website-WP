// document ready {{{1
$(document).ready(function() {
  // nav-item on click {{{2
  $(".nav-item").on("click", function() {
    var element = $(this)
    $('html, body').animate({
      scrollTop: $("#section-" + element.attr('id')).offset().top - 65
    }, 'slow');
  });

  // if($(window).width() < 960) {
    // // $('#menu-offset').style.display = 'none';
    // document.getElementsByClassName('menu-offset').classList.add('col-md-1');
    // document.getElementsByClassName('menu-width').classList.add('col-md-11');
  // }
  // else {
    // // $('#menu-offset').style.display = 'block';
    // document.getElementsByClassName('menu-offset').classList.add('col-1');
    // document.getElementsByClassName('menu-width').classList.add('col-5');
  // }

  var menuItems = document.getElementsByClassName('menu-width');
  var result = "document.getElementsByClassName('menu-width')";
  for (var i=0, len=menuItems.length|0; i<len; i=i+1|0) {
    if($(window).width() < 1080) {
      menuItems[i].classList.add('col-11');
    }
    else {
      menuItems[i].classList.add('col-5');
    }
  }
  
  var menuItems = document.getElementsByClassName('menu-offset');
  var result = "document.getElementsByClassName('menu-offset')";
  for (var i=0, len=menuItems.length|0; i<len; i=i+1|0) {
    if($(window).width() < 960) {
      menuItems[i].classList.add('col-1');
    }
  }
  
  var company = 'De Minico\'s';
  var title = company;
  var subtitle = company;
  var count = 0;
  
  Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>Foo: {{ todo.text }}</li>'
  });
  
  Vue.component('todo-item2', {
    props: ['todo'],
    template: '<li>Bar: {{ todo.text }}</li>'
  });

  Vue.component('async-example', function (resolve, reject) {
    setTimeout(function () {
      resolve({
        template: '<h1>{{ title }}</h1>'
      })
    }, 10000)
  });
  
  // Vue.component('async-example', function (resolve, reject) {
    // setTimeout(function () {
      // resolve({
        // template: page
      // })
    // }, 10000)
  // });

  var page = new Vue({
    el:'#page',
    data: {
      test: true,
      name: 'page',
      title: title,
      subtitle: subtitle.split('').reverse().join(''),
      count: 0,
      mylist: [
        { id: 0, text: 'Vegetables' },
        { id: 1, text: 'Cheese' },
        { id: 2, text: 'Whatever else humans are supposed to eat' }
      ]
    },
    methods: {
      sub: function() {
        if (this.test){
          this.title = 'Click';
        } else {
          this.title = title;
          this.mylist = [
            { id: 0, text: 'bob' },
            { id: 1, text: 'foo' },
            { id: 2, text: 'bar' }
          ]
        }
        bob.title = page.title;
        // subtitle = title;
        // this.subtitle = subtitle;
        this.test = !this.test;
      }
    },
  });
  
  var bob = new Vue({
    el:'#bob',
    data: {
      title: page.title,
      subtitle: subtitle.split('').reverse().join(''),
    },
    methods: {
      sub: function() {
        page.sub();
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
        subtitle = newname;
        subtitle = subtitle.split('').reverse().join('');
        page.subtitle = subtitle;
        page.title = newname;
        page.test = true;
        bob.title = page.title;
        bob.subtitle = page.subtitle;
      }
    }
  });
});
