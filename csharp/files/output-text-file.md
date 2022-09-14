### Output a text file

Used to output a text file. Usefull for reciept printers or other simple reports.

```
public IActionResult ExampleTextFile()
{
    string fileName = "TestFile.txt";
    StringBuilder sb = new StringBuilder();

    sb.Append("-----------------------------------------\r\n");
    sb.Append("Example Text File\r\n");
    sb.Append("\tTabbed Indent\r\n");
    sb.Append("\r\n");
    sb.Append("Another Line of information.\r\n");
    
    return File(Encoding.ASCII.GetBytes(sb.ToString()), "text/plain", fileName);
}
```

- Source(s)
