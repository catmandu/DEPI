<?php
	$lang['header.title'] = "Tutorials";
	$lang['header.costo'] = "The tutorial registration cost is 150 pesos.<br/>
Includes: Certificate of Participation, Coffee Breaks.<br/>
Payment: Cash.<br/>
** Important: Registrations will be accepted during office hours from Monday, August 29, 2011 <br/>
in the Departamento de Recursos Financieros del Instituto Tecnol&oacute;gico de Colima.<br/>";
	
	
	$lang['tutorial.1.title']="CONFIGURATION AND USAGE OF SLURM RESOURCE MANAGEMENT SYSTEM UPON HPC CLUSTERS";
	$lang['tutorial.1.autor']="by <a href='http://mescal.imag.fr/membres/yiannis.georgiou/'> Yiannis Georgiou</a>";
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


    $lang['tutorial.2.title']="BASIC CONCEPTS OF CLOUD COMPUTING";
	$lang['tutorial.2.autor']="by Rub&eacute;n Schaffer Levine";
	$lang['tutorial.2.empresa']="Research and Development Manager <a href='http://www.telmex.com/mx/empresa/'>INTTELMEX IT</a>, Mexico";
    $lang['tutorial.2.description'] ="Cloud computing is a model for enabling ubiquitous, convenient, on-demand network 
	access to a shared pool of configurable computing resources (e.g., networks, servers, storage, applications, and services) 
	that can be rapidly provisioned and released with minimal management effort or service provider interaction.
	Cloud computing differs from the classic client-server model by providing applications from a server 
	that are executed and managed by a client's web browser, with no installed client version of an 
	application required. Centralization gives cloud service providers complete control over the versions of the
	browser-based applications provided to clients, which removes the need for version upgrades or license management 
	on individual client computing devices. The phrase software as a service (SaaS) is sometimes 
	used to describe application programs offered through cloud computing. A common shorthand for a provided 
	cloud computing service (or even an aggregation of all existing cloud services) is The Cloud <br /><br />
	This tutorial explains the concept of cloud computing, discusses its importance and describes the differents 
	paradigms used in Programming in the cloud.  The next topics will be covered:
    <b>Day 1:</b> What is Cloud Computing?, Implications Advantages and Disadvantages, Trends.
    <b>Day 2:</b> Typical service in the Cloud vs. Cloud Service, The role of virtualization, Techniques 
	for Resilience, non-relational databases, rows and Dispatchers ";
	
	
	
	
	$lang['tutorial.3.title']="CUDA&#58; GPUs PROGRAMMING";
	$lang['tutorial.3.autor']="by <a href='https://sites.google.com/site/carlosjaimebh/'> Carlos Jaime Barrios Hern&aacute;ndez</a>
	 and <a href='http://www.cecalc.ula.ve/?page_id=14&wpapl_id=2'> Gilberto D&iacute;az</a>";
	$lang['tutorial.3.empresa']="Universidad de Santander, Bucaramanga, Colombia <br />Director del Centro Nacional de C&aacute;lculo 
	                      Cient&iacute;fico Universidad de los Andes, M&eacute;rida, Venezuela";
    $lang['tutorial.3.description'] ="CUDA or Compute Unified Device Architecture is a parallel computing architecture
	 developed by Nvidia. CUDA is the computing engine in nVidia graphics processing units (GPUs) that is accessible to 
	 software developers through variants of industry standard programming languages. Programmers use C for CUDA
	 (C with nVidia extensions and certain restrictions), compiled through a PathScale Open64 C compiler, to code 
	 algorithms for execution on the GPU. <br/> 
     CUDA gives developers access to the virtual instruction set and memory of the parallel computational elements 
	  in CUDA GPUs. Using CUDA, the latest nVidia GPUs become accessible for computation like CPUs. Unlike 
	  CPUs however, GPUs have a parallel throughput architecture that emphasizes executing many concurrent threads
	   slowly, rather than executing a single thread very quickly. This approach of solving general purpose problems 
	   on GPUs is known as GPGPU. In the computer game industry, in addition to graphics rendering, GPUs are 
	   used in game physics calculations (physical effects like debris, smoke, fire, fluids); examples 
	   include PhysX and Bullet. CUDA has also been used to accelerate non-graphical applications in
	    computational biology, cryptography and other fields by an order of magnitude or more.
		 An example of this is the BOINC distributed computing client. ";


    $lang['tutorial.4.title']="A BASIC PARALLEL PROGRAMMING WITH MPI AND OPENMP";
	$lang['tutorial.4.autor']="por <a href='http://ccpd.ciens.ucv.ve/~rrivas/'>Robinson Rivas Suarez</a> ";
	$lang['tutorial.4.empresa']="Director del Centro de Computaci&oacute;n, Facultad de Ciencias,Universidad Central de Venezuela";
    $lang['tutorial.4.description'] ="Parallel and Distributed Programming is based
	 on the existence of multiple processors connected via high-speed networks (Cluster Model with Distributed Memory)
	 or integrated into a specialized card (Model Multicore or Shared Memory). This tutorial discuss computer
	 architectures such as Distributed Memory and Shared Memory, exposed its advantages and disadvantages, and analyse
	 the two most widely used programming models for such architectures: MPI (Message Passing Interface) and OpenMP. <br/>
	 This tutorial include many programming examples  in C++ and  tested  in a small cluster. 
	 It is designed for a maximum of 20 students. The interested requires basic 
	 knowledge of the language C++, and basic knowledge of creating / editing files and running
	 applications on Linux. The tutorial lasts 16 hours and is aimed at advanced undergraduate
	 students or graduate with experience in programming and there is not need to have experience in 
	 parallel programming.";


     $lang['tutorial.5.title']="SCHEDULING ALGORITHMS";				
	$lang['tutorial.5.autor']="por <a href='http://usuario.cicese.mx/~chernykh/'>Andrei Tchernykh</a> y Juan Manuel Ram&iacute;rez Alcar&aacute;z";
	$lang['tutorial.5.empresa']="CICESE Research Center, Ensenada, Baja California, Mexico <br/>
	                             Universidad de Colima, Mexico";
	$lang['tutorial.5.description'] ="The workshop is to familiarize participants with the different methods of
	 optimization of resources, as well as providing the fundamental tools in the analysis and design techniques 
	 of algorithms for problems arising from computer and manufacturing. Students should learn the concepts of 
	 resource optimization problems in parallel systems, distributed and Grid computing that will serve to 
	 develop theses and independent research. It aims to teach students the parts of the theory of operations
	  research and combinatorial optimization applied to solve theoretical and practical problems, 
	  and familiar with application areas, basic notations, models, scheduling, scheduling 
	  in scheduling on processors, operating systems, production, parallel computers, parallelizable tasks, 
	  algorithms <i>BinPacking</i>, <i>StripPacking</i> and <i>Backfill</i> optimizing different criteria such as 
	  length of schedule, criteria for real-time systems, etc.";

    $lang['tutorial.6.title']="CLUSTER INSTALLATION"; 
	$lang['tutorial.6.autor']="por <a href='http://www.democritos.it/~baro/'>Moreno Baricevic</a>";
	$lang['tutorial.6.empresa']="HPC System Administrator and Software Developer at DEMOCRITOS National Simulation
	 Center of the Italian Istituto Officina dei Materiali (IOM) of the Italian National Research
	 Council (CNR) <br/> Trieste, Italy";
	$lang['tutorial.6.description'] ="EPICO, eLab Procedure for Installation and COnfiguration,
     is a framework based on open-source software and installation and automatic configuration optimized.
     Thanks to many years of experience in deployment of cluster computing for HPC, GRID and workstation systems
      LINUX.";


    $lang['tutorial.7.title']="RUBY ON RAILS"; 
	$lang['tutorial.7.autor']="por <a href='http://www.tangosource.com/'>Daniel Gayt&aacute;n</a>";
	$lang['tutorial.7.empresa']="Software Developer at TANGO SOURCE, Colima, M&eacute;xico";
	$lang['tutorial.7.description'] ="Web applications are complex systems which are increasingly 
	used in the Internet. Therefore, many developers have begun work on creating interactive Web
	sites where languages such as PHP and Java have taken place as the main used to implement such systems. <br /> 
    Ruby on Rails (RoR) is a set of code libraries relatively young (2004), providing the developer tools for 
	production of high-level Web applications quickly implemented on the Ruby programming language. RoR
	has become a standard in many parts of the United States and Europe for its ease of implementation and rapid
	learning curve. <br /> 
	In this workshop will be show the basic elements of language both Ruby and Ruby on Rails,
	 and other tools for developing agile systems online that will help to the programmer to create a basic application
	using this framework.";


?>
