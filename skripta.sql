drop database if exists projekt1;

create database projekt1 default character set utf8;

#c:\xampp\mysql\bin\mysql -uedunova -pedunova --default_character_set=utf8 < C:\xampp\htdocs\projekt1\skripta.sql

use projekt1;

create table operater(
sifra int not null primary key auto_increment,
email varchar(100) not null,
lozinka varchar(255) not null,
ime varchar(50) not null,
prezime varchar(50) not null,
uloga varchar(50) not null
);

insert into operater (email,lozinka,uloga,ime,prezime)  
values ('tokiclorna31@gmail.com','0cc175b9c0f1b6a831c399e269772661',
'admin','Tokić','Lorna');
insert into operater (email,lozinka,uloga,ime,prezime)  
values ('bonny.tokic@gmail.com','8ce4b16b22b58894aa86c421e8759df3',
'user','Tokić','Bonny');


create table dogadaj(
sifra int not null primary key auto_increment,
naziv varchar(50) not null
);

create table utrka(
sifra int not null primary key auto_increment,
naziv varchar(50) not null,
datum datetime,
brojsudionika int not null,
dogadaj int not null,
cijena decimal(18,2)
);

create table osoba(
sifra int not null primary key auto_increment,
ime varchar(50) not null,
prezime varchar(50) not null,
email varchar(100) not null
);

create table sudionik(
sifra int not null primary key auto_increment,
osoba int not null,
brojprijave char(4)
);

create table clan(
utrka int  not null,
sudionik int not null
);

alter table utrka add foreign key (dogadaj) references dogadaj(sifra);

alter table sudionik add foreign key (osoba) references osoba(sifra);

alter table clan add foreign key (utrka) references utrka(sifra);
alter table clan add foreign key (sudionik) references sudionik(sifra);


insert into dogadaj(sifra, naziv) values
(null, 'Osječki Ferivi polumaraton'),
(null, 'Liga za djecu superjunake'),
(null, 'Jankovački polumaraton');

insert into utrka(sifra, naziv, datum, brojsudionika, dogadaj, cijena) values
(null, '10k', null, 100, 1, null),
(null, '5k', null, 100, 1, null),
(null, 'Štafeta Ž', null, 100, 1, null),
(null, '2.kolo', null, 100, 2, null),
(null, '10k', null, 100, 3, null),
(null, '17.kolo', null, 100, 2, null);

insert into osoba (sifra, ime, prezime, email) values
(null,'Tomislav','Jakopec','tjakopec@gmail.com'),
(null,'Franko','Kulešević','fkulesevic@gmail.com'),
(null,'Matko','Pejić','mpejic@gmaio.com'),
(null,'Igor','Takalić','itakalic@gmail.com'),
(null,'Filip','Pavlović','fpavlovic1995@gmail.com'),
(null,'Danijel','Šugar','danijel.sugar@outlook.com'),
(null,'Andrej','Hofšuster','a.hofsuster88@gmail.com'),
(null,'Ivan','Vinković','vinkovic.ivan86@gmail.com'),
(null,'Jure Lucian','Boban','jlboban17@gmail.com'),
(null,'Nikola','Šarić','saricnikola27@gmail.com');

insert into sudionik (sifra,osoba,brojprijave) values
(null,1,null),(null,2,null),(null,3,null),(null,4,null),(null,5,null),
(null,6,null),(null,7,null),(null,8,null),(null,9,null);

insert into clan(utrka,sudionik) values (2,2),
(6,3),(4,4),(2,5),(2,9);


select 'OK' as poruka;