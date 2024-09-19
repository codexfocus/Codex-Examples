### html helpers for strongly typed views

`Html.TextBoxFor`
`Html.TextAreaFor`
`Html.PasswordFor`
`Html.HiddenFor`
`Html.CheckBoxFor`
`Html.RadioButtonFor`
`Html.DropDownListFor`
`Html.ListBoxFor`
  
Other example(s):

```
<div class="form-group">
    @Html.LabelFor(model => model.data_variable, htmlAttributes: new { @class = "control-label col-md-2" })
    <div class="col-md-10">
        @Html.TextBoxFor(model => model.data_variable, new { htmlAttributes = new { @class = "form-control" } })
        @Html.ValidationMessageFor(model => model.data_variable, "", new { @class = "text-danger" })
    </div>
</div>
```

- Source(s)
  - [1](https://www.codeproject.com/Articles/787320/An-Absolute-Beginners-Tutorial-on-HTML-Helpers-and)
  - [2](link2)
