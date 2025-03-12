### Formating Decimals in views

Set two decimal places as well as formats for commas. Doesn't work with nullable types.
`@Model.Invoice.PaymentTotal.ToString("N2")`

Set decimal places, formats for commas, adds a dollar sign. Works on nullable types ie decimal?
`@String.Format("{0:C}", Model.PaymentTotal)`

For just formating the decimal place you can use the following.
Decorate with the DisplayFormat tag in the model.

```
[DisplayFormat(DataFormatString = "{0:0.00}")]
public decimal? ReceiptTotal { get; set; }
```
Then on the page use the DisplayFor html helper.
`@Html.DisplayFor(model => Model.ReceiptTotal)`

- Source(s)
  - [none](#)
