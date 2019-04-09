jQuery(document).ready(function($) {
    $(".jquery-word-export").click(function(event) {
        $(".to-word").wordExport();
    });
});

$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


