$(document).ready(function () {
  console.log("I am in a new file");
  // ur jquery code is ready

  console.log("we r using jquery");
  // jquery syntax looks like this!
  // $('selector').action()
  // $('p').click();
  $("p").click(function () {
    console.log("u clicked on p", this);
    // $(this).hide();
  });
  //   $('p').dblclick(function () {
  //     console.log('u  double clicked on p', this);
  //     // $(this).hide();

  //   });
  // //   $('p').mouseenter(function () {
  // //     console.log('u   enter on p', this);
  // //     // $(this).hide();

  // //   });
  //   $('p').mousedown(function () {
  //     console.log('u   down on p', this);
  //     // $(this).hide();

  //   });
  //   $('p').hover(function () {
  //     console.log('u   hovered on p', this);
  //     // $(this).hide();

  //   },
  //   function(){
  //     console.log('thnx for coming')
  //   });

  // demoing on function
  $("p").on({
    click: function () {
      console.log("thannks for clicking", this);
    },
    mouseleave: function () {
      console.log("mouseleave");
    },
  });
  // $('#wiki').hide(1000, function(){
  //   console.log("hidden")
  // } )
  // $('#wiki').show(1000, function(){
  //   console.log("shown")
  // } )

  // $('#but').click(function(){
  //   $('#wiki').fadeIn(5000);
  // })

  // $('#but').click(function(){
  //   $('#wiki').fadeOut(1000);
  // })
  $("#but").click(function () {
    $("#wiki").fadeToggle(3000);
  });
  // $('#but').click(function(){
  //   $('#wiki').fadeTo(1000);
  // })
  // $("#wiki").slideUp(3000)
  // slideDown
  // slideToggle
  $("#wiki").slideToggle(1000)

});

// there are 3 main types of jquery
// 1.element selector
// 2. id selector
// 3. class selector

//  1 .Element Selector: example of element selector
// $('p').click();

//  2. id Selector: this is an example
// $('#second').click();

//  3. class selector: this is example
// $('.odd').click();

// other selectors
// $ ('*').click();
// $('p.odd').click();
// $("p:first").click();

// events in jquery
// MouseEvent, mouseclick , dblclick

// $('#wiki').css('background-color','red')
