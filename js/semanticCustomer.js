      $(document).ready(function(){
       var
       $menuItem = $('.menu a.item'),
          $dropdown = $('.menu .dropdown'),
          // alias
          handler = {

              activate: function () {
                  if (!$(this).hasClass('dropdown')) {
                      $(this)
                          .addClass('active')
                          .closest('.ui.menu')
                          .find('.item')
                          .not($(this))
                          .removeClass('active');
                  }
              }

          };

      $dropdown.dropdown({
          on: 'hover'
      });

      $('.ui.selection.dropdown').dropdown();

      $menuItem.on('click', handler.activate);
    });