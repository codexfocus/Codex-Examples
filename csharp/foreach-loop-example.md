### Foreach Loop Example

Define a list or array to loop through.
```
List<MyModel> MyModelList = new List<MyModel>();
```

Remember to populate it with data.
 
Then pass into the foreach loop
```
foreach (var item in MyModelList)
{
  //Do your work in the loop.

  //To leave the loop use break command.
  break;

  //The return also stops and forces exit of the loop.
  return item;
}
```

- Source(s)
  - [1 Explains how to exit a loop.](https://kodify.net/csharp/loop/exit-loop/)
