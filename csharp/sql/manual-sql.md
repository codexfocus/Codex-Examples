### Manual Sql query

`ExecuteReader` - Executes commands that return rows. 

`ExecuteNonQuery` - Executes commands such as Transact-SQL INSERT, DELETE, UPDATE, and SET statements.

`ExecuteScalar` - Retrieves a single value (for example, an aggregate value) from a database.

Full Example of `ExecuteNonQuery`

```
public void UpdateExampleTable(int Id, string Application)
{
    SqlConnection conn = SqlServerConnection();

    string sql = @"UPDATE ExampleTable
                    SET Application = @Application 
                    WHERE ExampleTableId = @Id";

    SqlCommand cmd = new(sql, conn);

    cmd.CommandType = CommandType.Text;
    cmd.Parameters.AddWithValue("@Id", Id);
    cmd.Parameters.AddWithValue("@Application", Application);

    conn.Open();
    cmd.ExecuteNonQuery();
    conn.Close();
}
```

- Source(s)
  - [Microsoft Docs](https://docs.microsoft.com/en-us/dotnet/api/system.data.sqlclient.sqlcommand?view=dotnet-plat-ext-6.0)
