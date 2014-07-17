<?php
	$lang['header.title'] = "Tutoriales";
	$lang['header.costo'] = "El costo de inscripci&oacute;n a los tutoriales es de 150 pesos mexicanos por asistente.<br/>
	 Incluye: Constancia de Participaci&oacute;n, Coffe Breaks.<br />
	 Forma de pago: Efectivo. <br />
	 ** Importante: Las inscripciones se recibir&aacute;n en horarios de oficina a partir del lunes 29 de Agosto de 2011 <br />
	 en el Departamento de Recursos Financieros del Instituto Tecnol&oacute;gico de Colima. <br />";
	
	$lang['tutorial.1.title']="CONFIGURATION AND USAGE OF SLURM RESOURCE MANAGEMENT SYSTEM UPON HPC CLUSTERS";
	$lang['tutorial.1.autor']="por <a href='http://mescal.imag.fr/membres/yiannis.georgiou/'> Yiannis  Georgiou</a>";
	$lang['tutorial.1.empresa']="<a href='http://www.bull.com/'>BULL</a>";
	$lang['tutorial.1.description'] = "SLURM SLURM is an open-source, fault-tolerant and highly 
	scalable resource and job management system designed for Linux clusters of all sizes. It allows the exclusive
	and/or non-exclusive allocation of resources (computer nodes) by users for some duration of time 
	and it provides a framework for submitting, executing, and monitoring work (typically a parallel job) 
	on a set of allocated nodes. Finally, it arbitrates contention for resources by managing a queue
	of pending work. It is currently used upon some of the most powerfull supercomputers in 
	the world including Europe's no1 Tera-100 (CEA-BULL) cluster in France
	and world's no2 Tianhe-1A (NUDT) cluster in China. <br />

     This tutorial is designed for participants with basic knowledge 
	 of HPC clusters. <br />

     In more detail, we will start with a brief description of SLURM Resource Management system
	 and an overview of the new upcoming functionalities.  Then we will discuss some basic
	 details for installation and configuration of SLURM system upon Linux clusters.
     The main focus of this tutorial will be centered in the usage of SLURM. Participants
	 will have the opportunity to follow a series of hands-on exercises to be performed upon a BULL cluster.<br /><br />
     The tutorial will cover the following subjects: <br />
    <b>Basic Usage:</b> <br />
    * Simple use of commands (submission/monitoring/result collection)<br />
    * Partitions and QOS usage <br />
    * Advanced Reservations <br />
    * Use of accounting and reporting <br />
    * Scheduling techniques for smaller response time (setting of walltime for backfill , etc)
Advanced Usage: <br />
    * MPI jobs execution <br />
    * Checkpoint/Restart (BLCR or application level) <br />
    * Preemption and Fairsharing <br />
    * Dynamic allocations (growing/shrinking)<br />
    * CPU allocation and tasks binding <br />
    * Generic Resources and GPUs advanced usage";
	
	$lang['tutorial.2.title']="CONCEPTOS B&Aacute;SICOS DE CLOUD COMPUTING";
	$lang['tutorial.2.autor']="por Rub&eacute;n Schaffer Levine";
	$lang['tutorial.2.empresa']="Gerente de Investigaci&oacute;n y Desarrollo <a href='http://www.telmex.com/mx/empresa/'>INTTELMEX IT</a>, M&eacute;xico";
    $lang['tutorial.2.description'] ="La computaci&oacute;n en la nube o inform&aacute;tica en la nube o nube de conceptos, 
	del ingl&eacute;s <i>Cloud Computing</i>, es un paradigma que permite ofrecer servicios de computaci&oacute;n a trav&eacute;s de Internet.
	Cloud computing es un nuevo modelo de prestaci&oacute;n de servicios de negocio y tecnolog&iacute;a, que permite al usuario
	acceder a un cat&aacute;logo de servicios estandarizados y responder a las necesidades de su negocio, de forma flexible
	 y adaptativa, en caso de demandas no previsibles o de picos de trabajo, pagando &uacute;nicamente por el consumo efectuado.
     El cambio paradigm&aacute;tico que ofrece computaci&oacute;n en nube es que permite aumentar el n&uacute;mero de servicios basados
	 en la red. Esto genera beneficios tanto para los proveedores, que pueden ofrecer, de forma m&aacute;s r&aacute;pida y eficiente,
	 un mayor n&uacute;mero de servicios, como para los usuarios que tienen la posibilidad de acceder a ellos, disfrutando de 
	 la transparencia e inmediatez del sistema y de un modelo de pago por consumo.<br />
	 La computaci&oacute;n en nube consigue aportar estas ventajas, apoy&aacute;ndose sobre una infraestructura tecnol&oacute;gica 
	 din&aacute;mica que se caracteriza, entre otros factores, por un alto grado de automatizaci&oacute;n, una r&aacute;pida
	 movilizaci&oacute;n de los recursos, una elevada capacidad de adaptaci&oacute;n para atender a una demanda variable, 
	 as&iacute; como virtualizaci&oacute;n avanzada y un precio flexible en funci&oacute;n del consumo realizado evitando adem&aacute;s el
     uso fraudulento del software y la pirater&iacute;a.<br /><br />
	 Este tutorial explica el concepto de Cloud Computing, analiza su importancia y describe que paradigmas de programaci&oacute;n se utilizan 
	 para programar en la nube. La siguiente tem&aacute;tica ser&aacute; desarrollada: <b>D&iacute;a 1:</b> &iquest;Qu&eacute; es Cloud Computing?, Implicaciones
     Ventajas y Desventajas, Tendencias.
     <b>D&iacute;a 2:</b>
     Servicio t&iacute;pico en la Nube vs Servicio para la nube, El rol de la virtualizaci&oacute;n, T&eacute;cnicas para la Elasticidad,
     Bases de datos no relacionales, Filas y Despachadores";
	
	
	$lang['tutorial.3.title']="CUDA&#58; PROGRAMACI&Oacute;N DE GPUs";
	$lang['tutorial.3.autor']="por <a href='https://sites.google.com/site/carlosjaimebh/'> Carlos Jaime Barrios Hern&aacute;ndez</a> 
	y <a href='http://www.cecalc.ula.ve/?page_id=14&wpapl_id=2'> Gilberto D&iacute;az</a>";
	$lang['tutorial.3.empresa']="Universidad de Santander, Bucaramanga, Colombia<br />
	Director del Centro Nacional de C&aacute;lculo Cient&iacute;fico, Universidad de los Andes, M&eacute;rida, Venezuela";
    $lang['tutorial.3.description'] ="<b>CUDA</b> son las siglas de <i>Compute Unified Device Architecture</i> que hace referencia 
	tanto a un compilador como a un conjunto de herramientas de desarrollo creadas por <i>nVidia</i> que permiten a los 
	programadores usar una variaci&oacute;n del lenguaje de programaci&oacute;n C para codificar algoritmos en GPUs de <i>nVidia</i>.<br/>
	CUDA intenta explotar las ventajas de las GPUs frente a las CPUs de prop&oacute;sito general utilizando el paralelismo que
	ofrecen sus m&uacute;ltiples n&uacute;cleos, que permiten el lanzamiento de un alt&iacute;simo n&uacute;mero de hilos simult&aacute;neos. Por ello,
	si una aplicaci&oacute;n est&aacute; dise&ntilde;ada utilizando numerosos hilos que realizan tareas independientes (que es lo que
	hacen las GPUs al procesar gr&aacute;ficos, su tarea natural), una GPU podr&aacute; ofrecer un gran rendimiento en campos 
	que podr&iacute;an ir desde la Biolog&iacute;a computacional a la Criptograf&iacute;a por ejemplo.";		
		
		
		
		
	$lang['tutorial.4.title']="INTRODUCCI&Oacute;N A LA PROGRAMACI&Oacute;N PARALELA CON MPI Y OPENMP";
	$lang['tutorial.4.autor']="por <a href='http://ccpd.ciens.ucv.ve/~rrivas/'>Robinson Rivas Suarez</a> ";
	$lang['tutorial.4.empresa']="Director del Centro de Computaci&oacute;n, Facultad de Ciencias, Universidad Central de Venezuela";
	$lang['tutorial.4.description'] ="La Programaci&oacute;n Paralela y Distribuida se basa en la existencia de m&uacute;ltiples procesadores, 
	                      conectados a trav&eacute;s de Redes de Alta Velocidad (Modelo de Cluster con Memoria Distribuida) o 
						  integrados en una tarjeta especializada (Modelo Multicore o de Memoria Compartida). En este 
						  tutorial se analizar&aacute;n las arquitecturas de C&oacute;mputo de Memoria Distribu&iacute;da y Memoria Compartida,
						  sus ventajas y desventajas, y los dos modelos de programaci&oacute;n m&aacute;s extendidos para este tipo de 
						  arquitecturas: MPI (Message Passing Interface) y OpenMP. <br/>
						  El tutorial es te&oacute;rico/pr&aacute;ctico incluyendo programaci&oacute;n de ejemplos en un cluster de prueba. Est&aacute; dise&ntilde;ado 
						  para un m&aacute;ximo de 20 estudiantes, uno por m&aacute;quina. Ser&aacute; realizado en C++, por lo que se requiere
						  conocimientos de este lenguaje, y conocimientos b&aacute;sicos de creaci&oacute;n/edici&oacute;n de archivos y ejecuci&oacute;n de 
						  aplicaciones en Linux. El tutorial tiene una duraci&oacute;n de 16 horas y est&aacute; dirigido a estudiantes avanzados
						  de licenciatura o de postgrado, con experiencia en programaci&oacute;n, aunque no es necesario tener 
						  experiencia en programaci&oacute;n paralela.";
					
					
	$lang['tutorial.5.title']="ALGORITMOS Y M&Eacute;TODOS DE CALENDARIZACI&Oacute;N";				
	$lang['tutorial.5.autor']="por <a href='http://usuario.cicese.mx/~chernykh/'>Andrei Tchernykh</a> y Juan Manuel Ram&iacute;rez Alcar&aacute;z";
	$lang['tutorial.5.empresa']="CICESE Research Center, Ensenada, Baja California, M&eacute;xico <br/>
	                             Universidad de Colima, M&eacute;xico";
	$lang['tutorial.5.description'] ="El objetivo de este taller es familiarizar al participante con los distintos
	m&eacute;todos para optimizaci&oacute;n de los recursos, as&iacute; como proporcionarle las herramientas fundamentales en el 
	an&aacute;lisis y t&eacute;cnicas de dise&ntilde;o de algoritmos para problemas provenientes de computaci&oacute;n y manufactura. 
	Los participantes aprender&aacute;n los conceptos de problemas de optimizaci&oacute;n de recursos en sistemas 
    paralelos, distribuidos y GRID computacional que servir&aacute;n para el desarrollo de tesis e investigaciones
	independientes. Se pretende mostrar a los participantes aquellas partes de la teor&iacute;a de investigaci&oacute;n de
	operaciones y optimizaci&oacute;n combinatoria que se aplican para la resoluci&oacute;n de problemas te&oacute;ricos y pr&aacute;cticos,
    y familiarizar con &aacute;reas de aplicaci&oacute;n, notaciones b&aacute;sicas, modelos de calendarizaci&oacute;n, calendarizaci&oacute;n 
    en procesadores, sistemas operativos, producci&oacute;n, computadoras paralelas, tareas
    paralelizables, algoritmos de <i>BinPacking</i>, <i>StripPacking</i>, y <i>Backfill</i> optimizando diferentes criterios,
	como longitud de calendario, criterios de sistemas de tiempo real, etc. ";
	 
	 
	$lang['tutorial.6.title']="INSTALACI&Oacute;N DE CLUSTER"; 
	$lang['tutorial.6.autor']="por <a href='http://www.democritos.it/~baro/'>Moreno Baricevic</a>";
	$lang['tutorial.6.empresa']="HPC System Administrator and Software Developer at DEMOCRITOS National Simulation Center of the Italian Istituto Officina
	 dei Materiali (IOM) of the Italian National Research Council (CNR) <br/>
	                             Trieste, Italia";
	$lang['tutorial.6.description'] ="EPICO, eLab Procedure for Installation and COnfiguration,
 es un framework basado en software de c&oacute;digo abierto para la instalaci&oacute;n y configuraci&oacute;n 
 autom&aacute;tica  de cluster  de c&aacute;lculo HPC, GRID y estaciones de trabajo basadas en  LINUX.";
 
 
 
    $lang['tutorial.7.title']="RUBY y RAILS B&Aacute;SICO"; 
	$lang['tutorial.7.autor']="por <a href='http://www.tangosource.com/'>Daniel Gayt&aacute;n</a>";
	$lang['tutorial.7.empresa']="Software Developer at TANGO SOURCE, Colima, M&eacute;xico";
	$lang['tutorial.7.description'] ="Las aplicaciones Web son sistemas complejos en Internet que son
	 cada ves m&aacute;s utlizados en el mundo. Por ende, muchos desarrolladores han comenzado a trabajar en la 
	 creaci&oacute;n de sitios interactivos donde lenguajes como PHP y Java han tomado lugar como los mayormente
	 empleados para la implementaci&oacute;n de dichos sistemas. <br />
    Ruby on Rails (RoR) es un conjunto de librer&iacute;as de c&oacute;digo relativamente joven (2004), que proveen
	al desarrollador herramientas para la producci&oacute;n de aplicaciones Web de alto nivel en poco tiempo, 
	implementado sobre el lenguaje de programaci&oacute;n Ruby. RoR se ha convertido en un estandar en 
	muchas partes de Estados Unidos y Europa, por su gran facilidad de implementaci&oacute;n y su r&aacute;pida
	curva de aprendizaje. <br />
    En este curso-taller, se dar&aacute;n a conocer los elementos b&aacute;sicos tanto del lenguaje Ruby y 
	de Ruby on Rails, as&iacute; como de otras herramientas &aacute;giles para el desarrollo de sistemas 
	en Internet que ayudar&aacute;n al asistente a crear una aplicaci&oacute;n b&aacute;sica utilizando dicho framework.";
 
 
 
								 
?>
