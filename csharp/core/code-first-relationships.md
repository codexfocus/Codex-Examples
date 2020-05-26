### Code First setting up relationships

In this example we will use two tables Employee and Salary.

#### One to One
In the Parent Table Model we add a reference to the Child Model.
```
public SalaryModel Salary { get; set; }
```

In the Child Model we add the Foreign Key and a reference to the Parent Model.
```
[ForeignKey("Employee")]
public int EmployeeId { get; set; }

public EmployeeModel Employee { get; set; }
```

#### One to Many
In the Parent Table Model we add a ICollection reference to the Child Model.
```
public ICollection<SalaryModel> Salary { get; set; }
```

In the Child Model we add the Foreign Key and a reference to the Parent Model.
```
[ForeignKey("Employee")]
public int EmployeeId { get; set; }

public EmployeeModel Employee { get; set; }
```

#### Many to Many

#### Cascading Delete

- Source(s)
  - [1](link1)
  - [2](link2)
