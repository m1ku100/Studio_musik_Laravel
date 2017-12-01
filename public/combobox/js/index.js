var $options = $(".option")
var $combobox = $("#combobox")
var $listbox = $("#listbox")
var selectedIndex = 0;

function open() {
  $listbox.show();
}

function close() {
  $listbox.hide();
  $combobox.removeAttr('aria-activedescendant');
  $options.removeClass('selected');
}

function highlightOption() {
  var $option = $($options[selectedIndex]);
  $options.removeClass('selected');
  $option.addClass('selected');
  $combobox.attr('aria-activedescendant', $option.attr('id'));
}

function selectOption() {
  $combobox.html($($options[selectedIndex]).html());
}

function handleKeyDown(event) {
  var keyCode = event.keyCode;
  switch(keyCode) {
    // tab, esc
    case 9:
    case 27:
      close();
      break;
    // enter
    case 13:
      if ($listbox.is(':visible')) {
        selectOption();
        close();
      } else {
        open();
      }
      break;
    // down
    case 40:
      open();
      if (selectedIndex < $options.length-1) {
        selectedIndex++;
        highlightOption();
      }
      break;
    // up
    case 38:
      open();
      if (selectedIndex > 0) {
        selectedIndex--;
        highlightOption();
      }
      break;
  } 
}

    
$("#combobox").on('keydown', handleKeyDown);
$("#combobox").on('click', function() { $listbox.toggle(); });
$(".option").on('click', function() { 
  selectedIndex = $options.index($(this));
  selectOption();
  close();
});
$("#toggleError").on('click', function() { $("#error").toggle(); });