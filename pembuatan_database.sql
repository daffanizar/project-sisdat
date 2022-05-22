create database sisdat;

create table pasien 
(id_pasien int not null primary key auto_increment,
nama_pasien varchar(30),
alamat_pasien varchar(40),
jenis_kelamin char(1),
tanggal_lahir date,
penyakit varchar(50)
);