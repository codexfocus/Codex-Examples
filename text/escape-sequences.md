### Escape Sequences

Escape sequences are typically used to specify actions such as carriage returns and tab movements on terminals and printers. They are also used to provide literal representations of nonprinting characters and characters that usually have special meanings, such as the double quotation mark ("). The following table lists the ANSI escape sequences and what they represent.

Escape Sequence:

```

\a	Bell (alert)
\b	Backspace
\f	Form feed
\n	New line
\r	Carriage return
\t	Horizontal tab
\v	Vertical tab
\'	Single quotation mark
\"	Double quotation mark
\\	Backslash
\?	Literal question mark
\ ooo	ASCII character in octal notation
\x hh	ASCII character in hexadecimal notation
\x hhhh	Unicode character in hexadecimal notation if this escape sequence is used in a wide-character constant or a Unicode string literal.

For example, WCHAR f = L'\x4e00' or WCHAR b[] = L"The Chinese character for one is \x4e00".
```

- Source(s)
  - [Microsoft](https://docs.microsoft.com/en-us/cpp/c-language/escape-sequences?view=msvc-170)
