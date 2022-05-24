create database sisdat;

create table pasien 
(id_pasien int not null primary key auto_increment,
nama_pasien varchar(30),
alamat_pasien varchar(40),
jenis_kelamin char(1),
tanggal_lahir date,
penyakit varchar(50),
id_dokter char(3),
id_obat char(3),
id_kamar char(3)
);

create table dokter(
id_dokter char(3) not null primary key,
nama_dokter varchar(20),
spesialis varchar(30)
);

create table obat(
    id_obat char(3) primary key,
    dosis char(5),
    nama_obat varchar(30)
);

create table kamar(
    id_kamar char(3) primary key, 
    golongan char(1)
);
