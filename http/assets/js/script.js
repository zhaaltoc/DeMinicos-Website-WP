// document ready {{{1
$(document).ready(function() {
  // nav-item on click {{{2
  $(".nav-item").on("click", function() {
    var element = $(this)
    $('html, body').animate({
      scrollTop: $("#section-" + element.attr('id')).offset().top
    }, 500);
  });

  function queryMenu() {
  }

  var page = new Vue({
    el: '#page',
    data: {
        title: 'De Minico\'s!',
        subtitle: 'Subtitle Test'
    },
    methods: {
      sub: function () {
        this.title = 'test';
      }
    }
  });
  
  $("#homepage").on("click", function() {
    page.title = "De Minico\'s"
  });

  $("#instoremenu").on("click", function() {
    page.title = "In Store Menu"
  });
  
  $("#heatandeat").on("click", function() {
    page.title = "Heat and Eat!"
  });
  
  $("#catering").on("click", function() {
    page.title = "Catering"
  });
  
  $("#ovenready").on("click", function() {
    page.title = "Oven Ready"
  });
  
  $("#buildyourown").on("click", function() {
    page.title = "Build Your Own"
  });
  
  $("#orderform").on("click", function() {
    page.title = "Order Form"
  });
});
