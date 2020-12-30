### Model Attributes

Required length, Display Name and Prompt, add Required to make required on form. If build your tables it set it to not null.

```
[StringLength(98), Display(Name = "Business Name", Prompt = "Business Name")]
public string BusinessName { get; set; }
```

- Source(s)
  - [#](#)
