### Format money input.

Add the following js.

```
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script>
    $(document).ready(function () {
        $('#moneyInput').maskMoney({ prefix: '', allowNegative: true, thousands: ',', decimal: '.' });
    });
</script>
```

Add the id to the input. Be sure to test the input passes correctly.

`<input asp-for="ChargeAmount" id="moneyInput" class="form-control" />`

- Source(s)
  - [1](#)
