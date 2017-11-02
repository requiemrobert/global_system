$(function(){




});//end main function

function changeValueL(dropdown) {
        var option = dropdown.options[dropdown.selectedIndex].value,
            field = document.getElementById('txtLicense');

        if (option == 'J' || option == 'G' ) {
          field.maxLength = 9;
        } else if (option == 'V' || option == 'E') {
          field.value = field.value.substr(0, 8); // before reducing the maxlength, make sure it contains at most 8 characters; you could also reset the value altogether
          field.maxLength = 8;
        }
}

function alpha(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k == 209 ) || (k == 241 ) || (k >= 48 && k <= 57));
}