### php sessions notes

Starting the session

`session_start();`

Assigning a Session:

```
session_start();
$_SESSION['number'] = $number;
```

Assigning data to a variable from a session:

```
session_start();
$number = $_SESSION['number'];
```

Destorying or ending a session:

```
    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
```

- Source
  - [php session manual](http://php.net/manual/en/book.session.php)
