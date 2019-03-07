jQuery(document).ready(function ($) {

  // Blur on search
  $('.search-field').hide();

  $('.search-submit').on('click', function () {//TOGGLES THE FIELD ON AND OFF WHEN THE SEARCH BUTTON IS CLICKED. CHECKS IF THE FIELD HAS TEXT IN IT AND IF IT DOES IT DOES NOT TOGGLE IT OFF
    event.preventDefault();
    if (!$('.search-field').val()) {
      $('.search-field').animate({'width': 'toggle'});
      $('.search-field').focus();
    }
  });

  $('.search-field').on('focusout', function () {//TOGGLES OFF THE SEARCH FIELD WHEN FOCUSED AWAY. CHECKS AND DOES NOT DO ANYTHING IF THE CAUSE OF FOCUS AWAY IS CLICKING ON SEARCH SUBMIT BUTTON BECAUSE BOTH EVENT LISTERS DOES THE SAME THING. YOU DONT WANT BOTH TO HAPPEN AT THE SAME TIME BECAUSE ONE WOULD TOGGLE IT OFF AND OTHER WITH TOGGLE IT ON AGAIN.
      if (!$('.search-field').val()&&!$('.search-submit').is(':focus')) {
        $('.search-field').animate({'width': 'toggle'});
      }
  });
  $(document).on('keypress',function(event) {//DOES A SEARCH WHEN ENTER KEY IS PRESSED IF FOCUS IS ON THE FIELD AND IT HAS TEXT IN IT
    if(event.which == 13&&$('.search-field').is(':focus')&&$('.search-field').val()) {
      $('.search-submit').trigger('click');
    }
});

});