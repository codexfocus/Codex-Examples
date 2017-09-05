### Join

A few join sql examples. First lets say we have a couple example tables in your db.

```
CREATE TABLE departments (
    dept_no     CHAR(4)         NOT NULL,
    dept_name   VARCHAR(40)     NOT NULL,
    PRIMARY KEY (dept_no),
    UNIQUE  KEY (dept_name)
);

CREATE TABLE dept_manager (
   emp_no       INT             NOT NULL,
   dept_no      CHAR(4)         NOT NULL,
   from_date    DATE            NOT NULL,
   to_date      DATE            NOT NULL,
   FOREIGN KEY (emp_no)  REFERENCES employees (emp_no)    ON DELETE CASCADE,
   FOREIGN KEY (dept_no) REFERENCES departments (dept_no) ON DELETE CASCADE,
   PRIMARY KEY (emp_no,dept_no)
);
```
Inner Join

```
SELECT departments.dept_no, dept_manager.emp_no, departments.dept_name
  FROM departments
  INNER JOIN dept_manager ON departments.dept_no=dept_manager.dept_no;
```

Other example(s):

`a variation on above but with more advanced functionality`

- Source(s)
  - [w3schools join](https://www.w3schools.com/sql/sql_join.asp)
  - [mysql example db](https://github.com/datacharmer/test_db)

