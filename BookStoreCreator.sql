CREATE DATABASE book_store;
USE book_store;

CREATE TABLE BookInventory(
Book_ID int primary key auto_increment ,
Book_name varchar(80),
Stock int,
Price float,
Image_url varchar(100)
);


CREATE TABLE BookOrders(
order_id int auto_increment primary key,
custFirstName varchar(40),
custLastName varchar(40),
Phone_Number varchar(20),
Card_Type varchar(20),
Card_Number varchar(20),
Ordered_On datetime,
Book_ID int,
foreign key(Book_ID) references BookInventory(Book_ID)
);

create table cart(
cart_item_id int primary key auto_increment,
item_image varchar(100),
Book_name varchar(100),
item_price int 
);
