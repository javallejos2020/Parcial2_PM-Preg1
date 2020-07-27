create table persona(
ci varchar(10),
nombre varchar(20),
apellido varchar(20)
);
insert into persona values('1','tony','melis');
insert into persona values('3','alvaro','quelca');
insert into persona values('2','marco','juarez');
insert into persona values('5','abran','zapato');
insert into persona values('4','andres','torico');
insert into persona values('7','milenka','nuñez');
insert into persona values('6','carla','tellez');

create table estudiante(
ci varchar(10),
nroMatricula varchar(10),
nombre varchar(20),
apellido varchar(20),
carrera varchar(50)
);
insert into estudiante values('1','100','tony','melis','veterinario');
insert into estudiante values('2','130','marco','juarez','medicina');
insert into estudiante values('4','150','andres','torico','derecho');
insert into estudiante values('6','170','carla','tellez','comunicacion');

create table libro(
codlibro varchar(5),
nombre varchar(70),
autor varchar(30)
);
insert into libro values('L0001','calculo 1','george montesino');
insert into libro values('L0002','calculo 2','frederic tellez');
insert into libro values('L0003','algebra','leonardo torrez');
insert into libro values('L0004','derecho empresarial','elisa perez');
insert into libro values('L0005','arquitectura basica','marco torico');
insert into libro values('L0006','programacion','hector rodriguez');

create table carrera(
nombre varchar(50)
);
insert into carrera values('medicina');
insert into carrera values('veterinario');
insert into carrera values('comunicacion');
insert into carrera values('derecho');
insert into carrera values('informatica');
insert into carrera values('estadistica');

create table prestamo(
ci_e varchar(10),
nroMatricula varchar(10),
nombre varchar(20),
apellido varchar(50),
fecha_prestamo date,
codlibro varchar(5),
nombreLibro varchar(70),
autor varchar(30)
);
insert into prestamo values('1','100','tony','melis','2020-06-01','L0001','calculo 1','george montesino');
insert into prestamo values('4','150','andres','torico','2020-06-15','L0004','derecho empresarial','elisa perez');
insert into prestamo values('6','170','carla','tellez','2020-06-30','L0005','arquitectura basica','marco torico');


create table proceso (
codFlujo varchar(2),
codProceso varchar(3),
codProcesoSiguiente varchar(3),
tipo varchar(2),
codRol varchar(2),
pantalla varchar(40)
);

insert into proceso values('F2','P1','P2','I','E','listar.php');
insert into proceso values('F2','P2','P3','P','B','verificar.php');
insert into proceso values('F2','P3',null,'C','B','buscar.php');
insert into proceso values('F2','P4','P5','P','B','registrar.php');
insert into proceso values('F2','P5','P6','F','E','entregar.php');
insert into proceso values('F2','P7','P8','F','B','nopertenece.php');
					
create table procesocon (
codFlujo varchar(2),
codProceso varchar(3),
codProcesoSi varchar(3),
codProcesoNo varchar(3)
);
					
insert into procesocon values('F2','P3','P4','P7');
