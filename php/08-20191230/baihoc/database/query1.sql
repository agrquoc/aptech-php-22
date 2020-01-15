create database aptech_php_22_03;
create table aptech_php_22_03.users (
id int,
name varchar(300),
age int
);
insert aptech_php_22_03.users (id , name , age)
value (1, "Trịnh Việt Quốc",36) , (2, "Trịnh tài",35);
create table aptech_php_22_03.articles (
title nchar(80),
suggetion nvarchar(300),
timeup date,
url_img text,
content nvarchar(4000),
views int,
author nchar(100)
);
alter table aptech_php_22_03.articles modify column title nchar(80);
alter table aptech_php_22_03.articles modify column suggetion nvarchar(300);
alter table aptech_php_22_03.articles modify column content nvarchar(4000);
alter table aptech_php_22_03.articles modify column author nchar(100);
alter table aptech_php_22_03.users add dob date;
alter table aptech_php_22_03.users drop id;
alter table aptech_php_22_03.users add id int;
alter table aptech_php_22_03.articles add keytable char(15);
alter table aptech_php_22_03.articles add primary key (keytable);
insert aptech_php_22_03.articles (title,suggetion,content,author,keytable)
value ("Con bò đi bằng ","con bò nó đi như đã thông tin","fakjfka ad à ajflkajflkajflkajflkajfkjalfkj","Trịnh Việt Quốc","AAAA"),
("Con chó đi bằng","con bò nó đi như đã thông tin","fakjfkajflkajflkajflkajflkajfkjalfkj","Trịnh Việt Quốc","BBBB"),
("Con tám chân","con bò nó đi như đã thông tin","fakjfkajflkajflkajflkajflkajfkjalfkj","Trịnh Việt Quốc","CCC");
alter table aptech_php_22_03.users add (id int,last_name nchar, first_name nchar, email char, created_at int,uState int,uCreatedDate date);
alter table aptech_php_22_03.users drop	name;
alter table aptech_php_22_03.users drop	age;
alter table aptech_php_22_03.users drop	dob;
insert aptech_php_22_03.users (id,last_name, first_name, email, created_at,uState,uCreatedDate)
value
(1,"quoc","viet","hcvquoc@gmail.com",1,1,now()),
(2,"tran","nam","hsfasfoc@gmail.com",1,1,now()),
(3,"vien","hai","hcvfaffaafquoc@gmail.com",1,1,now());
alter table aptech_php_22_03.users modify column last_name nchar(20);
alter table aptech_php_22_03.users modify column first_name nchar(20);
alter table aptech_php_22_03.users modify column email nchar(60);
alter table aptech_php_22_03.users modify column last_name nchar(20) not null;
delete from aptech_php_22_03.users WHERE 1=1;
alter table	aptech_php_22_03.users drop id;
alter table aptech_php_22_03.users add id int auto_increment;
delete from aptech_php_22_03.articles;
 alter table aptech_php_22_03.users add id int;
 truncate aptech_php_22_03.users;
 alter table aptech_php_22_03.users add primary key(id);
 create table aptech_php_22_03.aprole(
 rid int not null auto_increment primary key,
 rtitle varchar(225),
 rstate int default 1
 );
 alter table mydb.users add primary key(email);
SELECT * From webnganhang.quanlyuser WHERE USER ='quoctrinhviet' AND PASS = 'quoc.1111';
 
 INSERT INTO webnganhang.quanlyuser(USER,PASS,EMAIL,SODT) VALUE ('lynguyenthibich','111','agrquoc@gmail.com','0905830817');
 create database aptech_php_22_05;
 create table aptech_php_22_05.users (
 id int auto_increment primary key,
 name varchar(255),
 email varchar(255));
 insert into aptech_php_22_05.users (name, email)
 value ('quoc','hcquoc@gmail.com'),('hoang','hoang@gmail.com'),('tho','htho@gmail.com'),
 ('mai','mai@gmail.com'),('nhan','nhan@gmail.com');
 create table aptech_php_22_05.passports (
 id int auto_increment primary key,
 sopassport varchar(255),
 noicap varchar(255),
 ngaycap date,
 diachi varchar(255),
 userid int
 );
 insert into aptech_php_22_05.passports (sopassport, noicap,ngaycap,diachi,userid)
 value ('H333333','Tỉnh Quảng Nam',11/11/2017,'Hội An',2),
 ('Q111111','TP Đà Nẵng',22/11/2019,'Hòa Xuân, Cẩm Lệ',1),
 ('C222222','TP Đà Nẵng',12/10/2016,'Thanh Khê',3),
 ('D111111','TP Đà Nẵng',22/11/2019,'Hòa Xuân, Cẩm Lệ',4),
 ('E221111','TP Đà Nẵng',2/11/2019,'Cẩm Lệ',5);
 select * from aptech_php_22_05.passports;
  truncate aptech_php_22_05.passports;
 insert into aptech_php_22_05.passports (sopassport, noicap,ngaycap,diachi,userid)
 value ('H333333','Tỉnh Quảng Nam','2017-11-12','Hội An',2),
 ('Q111111','TP Đà Nẵng','2019-10-02','Hòa Xuân, Cẩm Lệ',1),
 ('C222222','TP Đà Nẵng','2016-08-19','Thanh Khê',3),
 ('D111111','TP Đà Nẵng','2019-11-23','Hòa Xuân, Cẩm Lệ',4),
 ('E221111','TP Đà Nẵng','2019-01-10','Cẩm Lệ',5);
   select * from aptech_php_22_05.passports;
   select * from aptech_php_22_05.users 
   inner join aptech_php_22_05.passports
   on users.id = passports.userid
   where passports.userid=1 ;
   select users.id, users.name, users.email, passports.sopassport, passports.noicap,passports.ngaycap,passports.diachi from aptech_php_22_05.users inner join aptech_php_22_05.passports on users.id = passports.userid;
   select * from webnganhang.quanlyuser;
   
create database aptech_php_22_08;
create table aptech_php_22_08.users (
id int auto_increment primary key,
name varchar(300),
email varchar (300) unique
);
insert aptech_php_22_08.users (name, email)
value 
('quoc', 'hcquoc@gmail.com'),
('huy', 'huy@gmail.com'),
('vinh', 'vinh@gmail.com'),
('quang', 'quang@gmail.com');
create database User_crud_laravel;