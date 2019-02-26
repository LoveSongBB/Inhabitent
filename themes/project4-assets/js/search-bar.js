(function($) {
    $(function() {
      const $searchField = $('.header-bar input.search-field');
   
      $('.header-bar .search-submit').click(function() {
        $searchField.toggle('slow');
        $searchField.focus();
      });
   
      $searchField.on('blur', function() {
        $searchField.toggle();
      });
    })
});