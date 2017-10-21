# learnhtml
## 知识点
*连接数据库

scottdeMacBook-Air:~ inter$ /usr/local/mysql/bin/mysql -u root -p
Enter password: 
ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: YES)
scottdeMacBook-Air:~ inter$ /usr/local/mysql/bin/mysql -u root -p
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 14
Server version: 5.7.19 MySQL Community Server (GPL)

Copyright (c) 2000, 2017, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> show databses;
* 执行SQL语句;
mysql> show databases;
mysql> create database test_mysql;
mysql> create table animal(name varchar(20), number int, place varchar(20), type enum('M','O'));
mysql> show tables;
mysql> insert animal value ;

* 关闭数据库


* 使用php 编程语言连接MySQL
* 连接数据库
连接 API: 'mysqli_connect()'






*执行SQL语句

API : 'mysqli_query()'
*关闭数据库

API: 'mysqli_close()'