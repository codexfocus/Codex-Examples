### Format a phone number to automatically set the dashes

On the input class to phone. Sets 000-000-0000.

```
// Used to format phone number set input class to phone
function phoneFormatter() {
    $('.phone').on('input', function () {
        var number = $(this).val().replace(/[^\d]/g, '')
        if (number.length == 7) {
            number = number.replace(/(\d{3})(\d{4})/, "$1-$2");
        } else if (number.length == 10) {
            number = number.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
        }
        $(this).val(number)
    });
};

$(phoneFormatter);
```

- Source(s)
  - [stackoverflow](https://stackoverflow.com/questions/8760070/how-to-format-a-phone-number-with-jquery/8760108)
