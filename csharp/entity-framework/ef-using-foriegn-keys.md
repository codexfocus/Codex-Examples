### Using Foriegn Keys with Entity Framework Code first

Tag the Id that will be the foriegn key

```
[ForeignKey("Project")]
public int ProjectId { get; set; }
```

Add the model of where the foreign key originates
`public Project Project { get; set; }`


In the Primary Key model so in our care Project add a ICollection
`public ICollection<ProjectComment> ProjectComments { get; set; }`

- Source(s)
  - [#](#)
