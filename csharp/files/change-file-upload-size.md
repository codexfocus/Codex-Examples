### Changing the File upload size restrictions and limits

Using IIS the default limit is 30MB. To raise the limit two changes are needed.

In web.config add:
```
<system.webServer>
  <security>
    <requestFiltering>
      <requestLimits maxAllowedContentLength="100000000" />
    </requestFiltering>
  </security>
</system.webServer>
```

This would raise the limit up to 100MB.
  
Then on an asp.net controller action where your from posts too add the tag:
`[RequestSizeLimit(100000000)]`

These two steps would allow a file up to 100MB. To increase beyond that you would need to adjust the above to amounts as well as the following:
  
Then in asp.net mvc the upper limit is 134,217,728 Bytes.
In the Startup.cs add:
```
public void ConfigureServices(IServiceCollection services)
{
  services.Configure<FormOptions>(x =>
  {
    x.ValueLengthLimit = int.MaxValue;
    x.MultipartBodyLengthLimit = int.MaxValue; // In case of multipart
  });
}
```

Alternatively use the following attribute, I have not tested this one it might be better to more granular specifc the limit so not every form is allowed the large value.
`[RequestFormLimits(ValueLengthLimit = int.MaxValue, MultipartBodyLengthLimit = int.MaxValue)]`


- Source(s)
  - [1](https://www.inflectra.com/support/knowledgebase/kb306.aspx)
  - [2](https://stackoverflow.com/questions/40364226/multipart-body-length-limit-exceeded-exception)
