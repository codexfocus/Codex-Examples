### Display decimals to two digits in a view

Format Directly in the view

`@String.Format("{0:C}", Model.PaymentTotal)`

Decorate with the DisplayFormat tag in the model.

```
[DisplayFormat(DataFormatString = "{0:0.00}")]
public decimal? ReceiptTotal { get; set; }
```
On the page use the DisplayFor html helper.

`@Html.DisplayFor(model => Model.ReceiptTotal)`

- Source(s)
  - [#](#)
