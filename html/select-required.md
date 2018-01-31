### Making a select question use the required attribute.

Was having some trouble making the select attribute required. For the below example this was not making the question required.

```
<select name="state" required>
  <option selected>State</option>
  <option value="AL">Alabama</option>
</select>
```

Only when the `value=""` was put in the `selected` option did the `required` attribute work correctly.

```
<select name="state"required>
  <option value="" selected>State</option>
  <option value="AL">Alabama</option>
</select>
```

- Source(s)
  - [w3schools.com](https://www.w3schools.com/tags/att_select_required.asp)
