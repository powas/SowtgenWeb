-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sowtgen
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorias_mercados`
--

DROP TABLE IF EXISTS `categorias_mercados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias_mercados` (
  `id_categoria_mercado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_categoria_mercado` varchar(250) NOT NULL,
  PRIMARY KEY (`id_categoria_mercado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias_mercados`
--

LOCK TABLES `categorias_mercados` WRITE;
/*!40000 ALTER TABLE `categorias_mercados` DISABLE KEYS */;
INSERT INTO `categorias_mercados` VALUES (1,'Alimentos y Bebidas'),(2,'Personal & Home Care');
/*!40000 ALTER TABLE `categorias_mercados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industrias`
--

DROP TABLE IF EXISTS `industrias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industrias` (
  `id_industria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_industria` varchar(250) NOT NULL,
  `slug_industria` varchar(250) NOT NULL,
  `descripcion_corta_industria` varchar(500) NOT NULL,
  `foto_chica_industria` varchar(500) NOT NULL,
  `descripcion_industria` text NOT NULL,
  `foto_grande_industria` varchar(500) NOT NULL,
  `id_mercado` int(11) NOT NULL,
  `id_process_solution` int(11) NOT NULL,
  `icono_industria` varchar(500) NOT NULL,
  PRIMARY KEY (`id_industria`),
  KEY `fk_mercados_idx` (`id_mercado`),
  KEY `fk_process_solutions_idx` (`id_process_solution`),
  CONSTRAINT `fk_mercados` FOREIGN KEY (`id_mercado`) REFERENCES `mercados` (`id_mercado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_process_solutions` FOREIGN KEY (`id_process_solution`) REFERENCES `process_solutions` (`id_process_solution`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industrias`
--

LOCK TABLES `industrias` WRITE;
/*!40000 ALTER TABLE `industrias` DISABLE KEYS */;
INSERT INTO `industrias` VALUES (1,'Gaseosas','gaseosas','Description','gaseosas-1200x400.jpg','<p>SOWTGEN ofrece soluciones de procesamiento para bebidas gaseosas sin alcohol, haciendo hincapié en llevar a cabo las mejores prácticas para así obtener una mezcla con gran precisión y exactitud.</p><p>De este modo, se logra un óptimo aprovechamiento de las materias primas y los concentrados. Dichas soluciones abarcan toda la cadena del proceso, desde el manejo inicial del jarabe hasta la disolución, la combinación y gasificación del mismo.</p>','-',2,1,'icono-gaseosas.svg'),(2,'Jugos y Aguas Saborizadas','jugos-y-aguas-saborizadas','Description','jugos-y-aguas-saborizadas-1200x400.jpg','<p>Las soluciones de SOWTGEN para el procesamiento de jugos se basan en obtener como resultado un producto de altísima calidad.</p><p>El equipo de especialistas cuenta con una amplia experiencia en la creación de jugos que mantienen el sabor y el aroma de la fruta en su estado natural, entendiendo que todo buen producto de mercado necesita llegar al máximo en estos indicadores.</p>','-',2,1,'icono-jugos-y-aguas-saborizadas.svg'),(3,'Cervezas','cervezas','Description','cervezas-1200x400.jpg','SOWTGEN ofrece soluciones completas para todo el proceso de producción de cervezas. Desde la recepción de las materias primas, la cocción, los tanques de fermentación, los tanques de guarda y el embotellado hasta el empaque para su traslado.</p><p>La combinación de materias primas de calidad con la mejor tecnología de producción de cerveza y máquinas de última generación, aseguran una cerveza de color dorado y una justa medida de espuma.</p>','-',2,1,'icono-cervezas.svg'),(4,'Bebidas Espirituosas','bebidas-espirituosas','Description','bebidas-espirituosas-1200x400.jpg','<p>El equipamiento ofrecido por SOWTGEN en las soluciones de procesamiento de aperitivos, contempla los requerimientos para obtener como resultado un producto con la mayor calidad posible y que ésta se mantenga inalterable hasta el momento de su degustación.</p><p>Tanques de fermentación, filtración y mezclado, enfriadores y limpieza de tanques son parte del abanico de opciones que PROCESS SOLUTIONS ofrece para aquellos clientes interesados en producir un aperitivo competitivo en el mercado.</p>','-',2,1,'icono-bebidas-espirituosas.svg'),(5,'Leche','leche','Description','leche-1200x400.jpg','<p>Entendiendo la importancia que tiene un producto como la leche para cualquier usuario de ella, PROCESS SOLUTIONS ofrece una gama de soluciones que se focalizan en lograr un proceso estéril de contaminantes y que a su vez logre prolongar la vida útil del producto terminado.</p><p>La unidad presenta distintos sistemas para homogeneización, dosificadores, pasteurizadores y centrales CIP desarrollados con las últimas tecnologías del segmento.</p>','-',6,1,'icono-leche.svg'),(6,'Yogurt','yogurt','Description','yogurt-1200x400.jpg','<p>En la constante búsqueda de la obtención de un yogurt de excelente calidad, SOWTGEN desarrolla soluciones y tecnologías para procesar productos de textura alta o media, productos que llevan frutas sólidas u otros ingredientes.</p><p>Dichas soluciones comprenden la utilización de equipos modulares para mezclar, pasteurizar, centrales CIP y homogenizadores, entre otros. ','-',6,1,'icono-yogurt.svg'),(7,'Cremas','cremas','Description','cremas-1200x400.jpg','<p>La producción de crema demanda un trabajo meticuloso y sin errores. Obtener una crema de alta calidad para sus clientes es la prioridad de la unidad PROCESS SOLUTIONS al momento de planificar una solución.</p><p>Para ello pone a disposición su equipo de profesionales especializados en el procesamiento de crema, para lograr los mejores resultados optimizando al máximo las materias primas.</p>','-',6,1,'icono-cremas.svg'),(8,'Postres','postres','Description','postres-1200x400.jpg','<p>SOWTGEN ofrece a sus clientes una amplia variedad de soluciones para elaboración de postres.</p><p>Ante la creciente demanda actual del mercado, se desarrollaron distintas soluciones y equipos modulares que permiten producir postres saludables y con bajo contenido de calorías, postres para niños, postres con sabor natural y casero, postres a base de arroz y rellenos, entre otros.</p>','-',6,1,'icono-postres.svg'),(9,'Aderezos','aderezos','Description','aderezos-1200x400.jpg','<p>La mayonesa es uno de los aderezos más solicitados por los consumidores de distinta índole.</p><p>El producto puede producirse en diferentes tamaños con el objetivo de satisfacer la demanda de comercios de comidas rápidas, consumidores finales o grandes cantidades a nivel industrial. SOWTGEN ofrece una amplia variedad de opciones para el procesamiento de mayonesa de la mejor calidad y con un sabor único.</p>','-',3,1,'icono-aderezos.svg'),(10,'Salsas','salsas','Description','salsas-1200x400.jpg','<p>Acompañando la creciente demanda del mercado actual en el consumo de salsa para pastas, SOWTGEN desarrolla nuevos procesos que den como resultado productos de calidad y sabores inigualables, preservando el sabor natural hasta el momento de su consumo. El equipo de especialistas en procesos de producción de salsa de tomate cuenta con una amplia experiencia en el sector.</p>','-',3,1,'icono-salsas.svg'),(11,'Dulces','dulces','Description','dulces-1200x400.jpg','<p>Cada dulce frutado tiene propiedades únicas y específicas para su preparación, para ello es necesario tener como aliado una empresa con experiencia en el desarrollo de procesos y tecnologías para la producción de calidad. SOWTGEN desarrolla líneas de producción para abastecer la demanda actual de aquellos clientes que buscan satisfacer las necesidades de un público cada vez más exigente con la calidad y naturalidad de lo que consume.</p>','-',3,1,'icono-dulces.svg'),(12,'Detergentes y Productos de Limpieza','detergentes-y-productos-de-limpieza','Description','detergentes-y-productos-de-limpieza-1200x400.jpg','<p>Las exigencias en cuanto al rendimiento y calidad de un detergente se han vuelto más rigurosas en las últimas décadas. Los procesos de fabricación de dichos productos exigen ser comprobados y validados en su eficiencia día a día.</p><p>Es por ello que SOWTGEN pone a disposición de sus clientes años de experiencia con resultados positivos asegurando el aprovechamiento al máximo de su inversión.</p>','-',8,1,'icono-detergentes-y-productos-de-limpieza.svg'),(13,'Shampoo','shampoo','Description','shampoo-1200x400.jpg','<p>Las soluciones que desarrolla SOWTGEN le permiten elaborar una amplia variedad de shampoos y cremas de enjuague capilar para satisfacer las demandas actuales de un mercado en creciente desarrollo en los últimos años.</p><p>El equipo de ingenieros de SOWTGEN planifica soluciones que priorizan flexibilidad y continuidad de producto a sus clientes pero a la vez buscan obtener como resultado un producto de calidad. Se procesa pensando en cumplir con la demanda actual, de las distintas variedades para el cuidado del cabello, en el mercado.</p>','-',7,1,'icono-shampoo.svg'),(14,'Cremas Corporales','cremas-corporales','Description','cremas-corporales-1200x400.jpg','<p>PROCESS SOLUTIONS desarrolla soluciones para la elaboración de cremas corporales considerando que año tras año se incrementan los volúmenes de producción.</p><p>Es importante considerar que éste es uno de los productos de mayor demanda, tanto por el uso de mujeres como así también por hombres. Cremas hidratantes, protectoras y regeneradoras son parte del mix que demandan los consumidores actuales. Satisfacer esas necesidades con un producto de altísima calidad asegurará un lugar entre los mejores del mercado.</p>','-',7,1,'icono-cremas-corporales.svg'),(15,'Jabones','jabones','Description','jabones-1200x400.jpg','<p>El interés mundial por el cuidado personal se ha ido acrecentando en los últimos años. Es por ello que es una condición importante estar al tanto de la últimas tecnologías aplicadas a la producción de jabones.</p><p>SOWTGEN cuenta con años de experiencia desarrollando soluciones a medida del cliente haciendo hincapié en la optimización de los costos invertidos y minimizando los riesgos. Esto se logra desarrollando líneas de producción automatizadas y flexibles.</p>','-',7,1,'icono-jabones.svg'),(16,'Papas Fritas Congeladas','papas-fritas-congeladas','Description','papas-fritas-congeladas-1200x400.jpg','<p>En SOWTGEN diseñamos, fabricamos y entregamos soluciones completas para la elaboración de papas prefritas para su posterior proceso de congelado.</p><p>El diseño abarca desde los silos de almacenamiento de papa, transportes mediante cintas y/o hidráulicos, elevador separador de piedras, tolvas de recepción, cepilladoras, mesas de inspección, blancher adaptables a los distintos equipos como ser peladoras por vacío, freidoras, etc.</p>','-',4,2,'icono-papas-fritas-congeladas.svg'),(17,'Pure de Papa en Escamas','pure-de-papa-en-escamas','Description','pure-de-papa-en-escamas-1200x400.jpg','<p>En SOWTGEN contamos con la experiencia en el diseño de líneas de elaboración de pure en escamas, dado que diseñamos, fabricamos y entregamos soluciones completas para la elaboración de pure en escamas para su posterior proceso de envasado.</p><p>El diseño abarca desde los silos de almacenamiento de papa, transportes mediante cintas y/o hidráulicos, elevador separador de piedras, tolvas de recepción, cepilladoras, mesas de inspección, blancher, cooker adaptables a los distintos equipos como ser peladoras por vacío, freidoras, etc.</p>','-',4,2,'icono-pure-de-papa-en-escamas.svg'),(18,'Ingredientes','ingredientes','Description','ingredientes-1200x400.jpg','<p>Mediante la utilización de nuestros equipos disolutores, mezcladores, reactores, diseñamos y entregamos soluciones llave en mano para los procesos de elaboración de ingredientes, colorantes o productos codificados.</p><p>Desde Process Automation integramos los sistema de elaboración con equipos como ser homogeneizadores, centrífugas, etc para desarrollar los distintos productos que requiere el mercado.</p>','-',5,1,'icono-ingredientes.svg'),(19,'Frutas y Verduras','frutas-y-verduras','Description','frutas-y-verduras-1200x400.jpg','<p>En SOWTGEN contamos con la experiencia para el desarrollo de equipos y líneas para acondicionamiento de frutas y verduras. Diseñamos y fabricamos líneas de transportes, silos de almacenamiento, transportes hidráulicos, separadores de piedras, lavadoras.</p><p>Implementamos líneas completas automatizadas mediante control por Scada.</p><p>Contamos con equipos sedimentadores de barros automatizados para la optimización de las plantas de efluentes.</p>','-',1,3,'icono-frutas-y-verduras.svg');
/*!40000 ALTER TABLE `industrias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingenierias`
--

DROP TABLE IF EXISTS `ingenierias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ingenierias` (
  `id_ingenieria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_ingenieria` varchar(250) NOT NULL,
  `slug_ingenieria` varchar(250) NOT NULL,
  `descripcion_corta_ingenieria` varchar(500) NOT NULL,
  `foto_principal_chica_ingenieria` varchar(500) NOT NULL,
  `descripcion_ingenieria` text NOT NULL,
  `foto_principal_grande_ingenieria` varchar(500) NOT NULL,
  `descripcion_secundaria_ingenieria` text DEFAULT NULL,
  `foto_secundaria_ingenieria` varchar(500) DEFAULT NULL,
  `foto_principal_intereses_ingenieria` varchar(500) NOT NULL,
  PRIMARY KEY (`id_ingenieria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingenierias`
--

LOCK TABLES `ingenierias` WRITE;
/*!40000 ALTER TABLE `ingenierias` DISABLE KEYS */;
INSERT INTO `ingenierias` VALUES (1,'Ingeniería','ingenieria','SOWTGEN ofrece servicios de ingeniería que abarcan desde estudios de viabilidad hasta desarrollo de arquitectura, incluyendo simulación y automatizaciones.','ingenieria-600x600.jpg','<p>SOWTGEN cuenta con un sólido equipo de ingenieros capacitados para ofrecer servicios de ingeniería que incluyen estudios de viabilidad, planificación de desarrollo, evaluación de tecnologías y recomendaciones para la realización de proyectos, así como también, para evaluar posibles riesgos, ciclos de vida de las instalaciones y probables locaciones.</p><p>Este servicio, no sólo abarca la ingeniería conceptual, sino que la empresa ofrece el desarrollo de la arquitectura civil, estructural, eléctrica y mecánica, entre otros. También brinda la simulación de procesos, maquetados 3D interactivos y automatizaciones integradas.</p>','ingenieria-1200x800.jpg',NULL,NULL,'ingenieria-600x400.jpg'),(2,'Management','management','Profesionales de Project & Program Management gestionan proyectos, supervisando documentación, presupuesto y cronogramas establecidos en la etapa de ingeniería conceptual.','management-600x600.jpg','<p>Los profesionales de Project & Program Management llevan a cabo la gestión del proyecto contemplando la organización, la supervisión de la documentación, el control presupuestario y el cumplimiento de los cronogramas previamente estipulados en la etapa de ingeniería conceptual.</p>','management-1200x800.jpg',NULL,NULL,'management-600x400.jpg'),(3,'Fabricación','fabricacion','SOWTGEN tiene una planta propia con tecnología avanzada para fabricar estructuras y sistemas modulares de alta tecnificación.','fabricacion-600x600.jpg','<p>SOWTGEN nos orientamos en la fabricación de módulos de proceso, calderería, tanques y reactores, como también fabricación de partes de máquinas y/o máquinas especiales, como ser separadores de sólidos, equipos de transportes, silos para almacenamiento de materias primas.</p>','fabricacion-1200x800.jpg',NULL,NULL,'fabricacion-600x400.jpg'),(4,'Montajes Electromecánicos','montajes-electromecanicos','Su equipo especializado se enfoca en proyectos de construcción mecánica, eléctrica y automatización, con amplia experiencia en diversas industrias.','montajes-electromecanicos-600x600.jpg','<p>El equipo especializado de SOWTGEN se enfoca en la gestión de los trabajos de fabricación y construcción electromecánica en base a la calidad y los cronogramas estipulados en la planificación de cada proyecto.</p><p>La división de montaje industrial ejecuta proyectos de construcción mecánica, eléctrica y automatización y control.</p>','montajes-electromecanicos-1200x800.jpg','<p>SOWTGEN cuenta con una amplia experiencia en la ejecución de montajes en industrias alimenticias, químicas y petroquímicas.</p><p>La ejecución de cada proyecto es llevada a cabo por un equipo de profesionales formado por un project manager, su equipo de ingenieros, supervisores y personal de montaje.</p>','montajes-electromecanicos-secundaria.jpg','montajes-electomecanicos-600x400.jpg'),(5,'Automatización y Control','automatizacion-y-control','Ingenieria La división de montaje industrial se enfoca en construcción mecánica, eléctrica y automatización.','automatizacion-y-control-600x600.jpg','<p>Desarrollamos automatismos para procesos, los mismos se definen de acuerdo al diagrama de proceso y abarca todo el espectro, desde el diseño hasta la implementación y puesta en marcha.</p><p>Desarrollamos monitoreo y control mediante Scada para los procesos como también sistema de control para líneas de producción.</p>','automatizacion-y-control-1200x800.jpg',NULL,NULL,'automatizacion-y-control-600x400.jpg'),(6,'Mantenimiento','mantenimiento','Ingenieria SOWTGEN ofrece servicios de mantenimiento de plantas, además de capacitación y diversas metodologías de gestión para reducir costos en áreas de mantenimiento.','mantenimiento-600x600.jpg','<p>SOWTGEN ofrece servicios de mantenimiento de plantas productivas e instalaciones generales, nuevas o existentes, brindando continuidad de calidad y servicio, garantizando así los estándares de producción. Además, capacita a los profesionales de las áreas de mantenimiento y utilities de planta.</p><p>Gracias a la experiencia adquirida en la gestión integral de proyectos, SOWTGEN puede ofrecer diferentes metodologías de gestión. Estas modalidades se adecúan según la necesidad de cada cliente, dando como ventaja la reducción de costos fijos en áreas de mantenimiento.</p>','mantenimiento-1200x800.jpg',NULL,NULL,'mantenimiento-600x400.jpg');
/*!40000 ALTER TABLE `ingenierias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maquinas`
--

DROP TABLE IF EXISTS `maquinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maquinas` (
  `id_maquina` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_maquina` varchar(250) NOT NULL,
  `slug_maquina` varchar(250) NOT NULL,
  `descripcion_corta_maquina` varchar(250) NOT NULL,
  `descripcion_maquina` text NOT NULL,
  `foto_chica_maquina` varchar(500) NOT NULL,
  `foto_grande_maquina` varchar(500) NOT NULL,
  `titulo_columna1_maquina` varchar(250) DEFAULT NULL,
  `descripcion_columna1_maquina` text DEFAULT NULL,
  `titulo_columna2_maquina` varchar(45) DEFAULT NULL,
  `descripcion_columna2_maquina` text DEFAULT NULL,
  `brochure_maquina` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_maquina`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maquinas`
--

LOCK TABLES `maquinas` WRITE;
/*!40000 ALTER TABLE `maquinas` DISABLE KEYS */;
INSERT INTO `maquinas` VALUES (1,'Mezcladores sólido-líquido','mezcladores-solido-liquido','Description','<p>SOWT-Mix™ pertenece a la gama de equipos disolutores aptos para la industria química y alimenticia. Estos equipos abarcan desde los sistemas de mezcla continuos hasta los procesos batch.</p><p>Los disolutores en continuo SOWT-Mix™-C mezcla sólido-líquido, se encuentran preparados para disolver sólidos como azúcar, sal, entre otras materias primas. La configuración interna depende de la aplicación y el producto a diluir.</p><p>La eficiencia de los sistemas por batch SOWT-Mix™-B, permite una recirculación y reinyección del producto diluido. Su caudal y punto de inyección están sujeto a los productos a disolver.</p><p>Todos los equipos son modulares, se adaptan a la capacidad requerida por el proceso. Al igual que todos los equipos que ofrece la unidad, cuenta con el sistema de control SOWT-Sup™ con la aplicación que regula los mezcladores sólido-líquido.</p>','','',NULL,NULL,NULL,NULL,''),(2,'Mezcladores líquido-líquido','mezcladores-liquido-liquido','Description','<p>La tendencia de la industria de bebidas está impulsada por la elaboración de bases aromáticas mezcladas con bases acuosas, estos procesos pueden obtenerse por medio de sistemas batch o en línea. La ventaja de trabajar en línea está asociada a la reducción de los tiempos de producción, a la reducción de los espacios físicos derivados de tanques de almacenamiento y a la posibilidad de ampliar las líneas de mezclado, pudiendo combinar en un mismo equipo diferentes fluidos que permiten ampliar la variedad de productos ofrecidos.</p><p>Los mixer (blender) SOWT-Liq en línea ofrecidos por la unidad, regulan las vías por medio de válvulas proporcionales controladas mediante caudalímetros másicos o electromagnéticos los cuales posibilitan obtener mezclas precisas.</p>','','','','','','',NULL),(3,'Reactores','reactores','Description','<p>Los reactores son equipos fundamentales para los procesos de la industria química, alimenticia, farmacéutica y biotecnológica. Aseguran un alto rendimiento, maximizan el uso de materias primas y minimizan la formación de subproductos contaminantes.</p><p>Los procesos como el cultivo de bacterias y levaduras, requieren sistemas adecuados a cada necesidad. Los procesos químicos como la elaboración de bases para detergentes, aromatizantes o perfumes requieren de sistemas donde se generen reacciones controladas. La elaboración de salsas y bases de quesos, demandan reacciones que resulten de la mezcla y aplicación de energía.</p><p>PROCESS SOLUTIONS, ofrece tanques de almacenamiento atmosféricos o sometidos a presión con un sistema apropiado para controlar las temperaturas (calentamiento/enfriamiento) mediante serpentines externos. Su construcción se adapta a los requerimientos sanitarios de proceso. SOWTGEN está capacitado para proyectar su diseño o desarrollarlo de acuerdo con los requerimientos y diseño del cliente.</p>','','','','','','',NULL),(4,'Pasteurizadores','pasteurizadores','Description','<p>Los equipos pasteurizadores SOWT-Paster™ están diseñados para aplicaciones que requieran una gran producción con un bajo costo inicial y operativo. Poseen elementos con las más altas tecnologías que les permiten combinar diseño y fabricación controlada que garantice un producto que cumpla con los requerimientos asépticos.</p><p>Los años de experiencia en el diseño y fabricación de pasteurizadores, han perfeccionado su técnica logrando reducir al máximo las pérdidas de producto, otorgándole al cliente una notable reducción de sus costos operativos.</p><p>SOWTGEN cuenta con módulos de aplicación simple controlados bajo el sistema denominado SOWT-Sup™ el cual tiene la capacidad de integrarse a los sistemas de control de planta. También, está diseñado para trabajar con todas las variables de proceso estándares y las solicitadas por cada aplicación particular y cuenta con un registro de históricos para lograr trazabilidad.</p>','','','','',NULL,NULL,NULL),(5,'Clusters de válvulas','clusters-de-valvulas','Description','<p>Los diseños de matrices de válvulas están pensados para reducir espacios, mejorar los procesos relacionados a la reducción de mermas y acortar los tiempos de operación. Por otra parte, cuentan con la facilidad de implementar líneas múltiples para procesos en paralelo.</p><p>El accionamiento de los clusters de válvulas puede ser manual y neumático con control a distancia.Los modelos de cabezales de control cuentan con la opción de tener feedback de estado de válvula como: abierta, cerrada o falla. Para la comunicación / control puede optarse por cableado lógico o bus AS-i.</p>','','',NULL,NULL,NULL,NULL,NULL),(6,'Disolutores de azúcar','disolutores-de-azucar','Description','<p>El azúcar es uno de los componentes más necesario para la elaboración de productos tales como bebidas. El sistema SOWT-Zuc de disolución de azúcar, está preparado para combinar un sistema de disolución de polvo adecuado a la disolución de cristales de azúcar. Asimismo, se combina con un sistema de pasteurización logrando un proceso en línea de disolución en continuo con un proceso de reducción de energía, entregando jarabe de azúcar con control de ° brix.</p><p>El sistema puede tomar el azúcar desde el descargador o directamente de la tolva de descarga y la recircula a través del filtro y, de esta manera, se logra la recirculación del azúcar no disuelta y el pasaje a la etapa siguiente del azúcar diluida.</p><p>El SOWT-Zuc cuenta con un control de ° Brix que regula la dosificación que permite mantener el nivel continuo y, de esta manera, reducir el gasto de energía. La capacidad de trabajo obtenida es de 65°Brix.</p>','','','','',NULL,NULL,NULL),(7,'Carbonatadores','carbonatadores','Description','<p>El proceso de carbonatación en forma continua permite la reducción de tiempos de producción y aumenta la calidad del producto a ofrecer. La carbonatación de bebidas utiliza un sistema de dosificación en continuo monitoreado mediante un cabezal de control de CO2 dispuesto al final del recorrido del serpentín. El lazo de control permite regular la dosificación.</p><p>La puesta en marcha del sistema requiere de pocos litros de bebida, la cual se homogeniza en el tanque buffer posterior. Contar con un tanque buffer independiza al sistema del correspondiente a la llenadora de bebidas.</p><p>El diseño específico del mezclador estático le permite una disolución particular para cada producto logrando una solución homogénea.</p>','','','','','','',NULL),(8,'Desaireadores','desaireadores','Description','<p>La producción de agua o bebidas gasificadas, requiere de una mayor precisión de dosificación y, para lograr las calidades que demanda el mercado actual, es necesario tener un excelente control de la cantidad de oxígeno que contiene el agua.</p><p>Las plantas desaireadoras utilizan el principio de bomba de vacío y filtros que permiten la separación del aire o compuestos volátiles que pudiesen entrar en contacto con la superficie del producto.</p><p>El sistema logra una producción continua de agua pudiendo estar en línea con un sistema de mezcla líquido-líquido y un sistema de carbonatación.</p>','','','','','','',NULL),(9,'Central CIP','central-cip','Description','<p>La limpieza CIP (Cleaning In-Place – limpieza in situ) es el método tradicional de limpieza de plantas alimenticias y farmacéuticas. Contribuye con las condiciones sanitarias evitando los riesgos y costos de contaminación y son mandatarias y supremas.</p><p>La diversidad de productos y procesos demandan soluciones diferenciadas. Es por ello que, la línea de centrales automáticas SOWT-Clean™, ofrece varias configuraciones. PROCESS SOLUTIONS se esfuerza en encontrar el óptimo balance de los parámetros de agentes químicos, temperatura, velocidad y tiempos de residencia que aseguren la limpieza, sin perder de foco la protección del medioambiente y en la eficiencia de los procesos.</p><p>Las dimensiones de los tanques / sistemas se ajustan de acuerdo a los requisitos de los ciclos de limpieza. El diseño del sistema de limpieza se encuentra determinado por la frecuencia de lavados, ejecuciones simultáneas de operación y parámetros de proceso. Los sistemas están equipados y configurados para alcanzar los objetivos definidos.</p><p>En el sistema de automatización de las unidades SOWT-Clean™, los objetivos de limpieza son traducidos en recetas.</p>','','','','','','',NULL),(10,'Tornillos Dosificadores','tornillos-dosificadores','Description','<p>Los tornillos utilizados para transportar materias primas ya sea polvos o sólidos de grandes volúmenes se diseñan para tener alto rendimiento energético y se adaptan a cualquier instalación ya sea verticales, horizontales u oblicuos.</p><p>Se pueden diseñar y construir en segmentos acoplables que proporcionarán caudales constantes para productos con polvos y gránulos. Los materiales de construcción pueden ser acero inoxidable o acero al carbono. Su construcción puede requerir recubrimientos antiabrasivos que mejoran la durabilidad.</p>','','','','','','',NULL),(11,'Tolvas de Pesaje','tolvas-de-pesaje','Description','<p>Diseñamos y fabricamos tolvas de pesaje ya sea para Batch o de uso continuo.</p><p>Las tolvas pueden ser diseñadas para ser limpiables y controladas mediante celdas de carga.</p><p>Los materiales de construcción pueden ser acero inoxidable como también acero al carbono.</p><p>Pueden tener recubrimiento antiabrasivo para mejorar su durabilidad.</p><p>Los rangos de diseño y fabricación son desde 20kg hasta 5Tn.</p><p>Pueden adaptase a distintos equipos como ser tornillos dosificadores o cintas transportadoras.</p>','','',NULL,NULL,NULL,NULL,NULL),(12,'Toma Muestras','toma-muestras','Description','<h2>Muestreo Higiénico Para Alimentos En Polvo</h2><p>El nuevo SWT1020 Muestreador De Polvos es una solución higiénica para procesos de alimentos en polvo donde se requiera ejecutar la toma de muestras de manera segura y reproducible directamente de la línea de producción.  Es un dispositivo simple, de diseño sanitario, y no requiere energía eléctrica ni un sistema de control externo, para su funcionamiento. Puede ser fácilmente instalado en diferentes puntos del proceso, como, tubos en caída libre, tolvas de almacenamiento, elementos utilizados en todas las plantas de procesamiento.</p><h2>Una herramienta de calidad</h2><p>Es esencial el muestreo de productos durante el proceso de producción, para el monitoreo de los parámetros claves en relación a la composición, y para la realización de análisis microbiológicos. Este hecho apoya al sistema de control de calidad permitiendo una detección temprana de cualquier desvió, o contaminación, y la consecuente toma de acciones correctivas. Este equipo toma muestras precisas de las corrientes de polvo, con solo apretar un botón. La muestra es descargada automáticamente en el recipiente-bolsa de muestreo, evitando riesgos de contaminación</p>','','',NULL,NULL,NULL,NULL,NULL),(13,'Sistemas de Calentamiento en Línea','sistemas-de-calentamiento-en-linea','Description','<p>Los sistemas de calentamiento en línea son equipos diseñados de acuerdo a los requerimientos de procesos, los mismos son totalmente automáticos y se utilizan para cualquier tipo de fluido. Los intercambiadores utilizados pueden ser del tipo placas o casco y tubos.</p><p>Diseñados de manera tal que puedan ser modulares ya sea para instalarse en serie y lograr saltos de temperatura o también en paralelo, para aumentar las capacidades dentro de los rangos de caudales que mejoran el proceso de intercambio.</p><p>Sus aplicaciones pueden estar destinadas para la industria láctea, bebidas, química, home & personal care.</p>','','',NULL,NULL,NULL,NULL,NULL),(14,'Destoner a Tornillo','destoner-a-tornillo','Description','<p>Los destoner a tornillo se aplican al sector de procesamiento de alimentos y en la industria de la molienda, pero también se utilizan en el sector de las verduras, más que nada aquellas que crecen cerca de los suelos.</p><p>Son utilizados para separar material granular seco según el peso específico en dos fracciones. El objetivo es la eliminación de impurezas pesadas, como piedras, partículas metálicas y otros objetos, por ejemplo del café, los cereales, las legumbres o las hortalizas.</p><p>La integración de los destoner´s en una línea de procesamiento reduce de manera significativa el potencial de desgaste de los equipos asociados a la instalación. El destoner de tornillo está construido con una tolva de recepción en forma de cuña con un tornillo de transporte vertical. El tornillo es accionado por un motorreductor.</p>','','',NULL,NULL,NULL,NULL,NULL),(15,'Cintas Transportadoras','cintas-transportadoras','Description','<p>Diseñamos y fabricamos una gama variada de cintas trasportadoras, ya sea construidas en acero inoxidable como también en acero al carbono.</p><p>Pueden ser horizontales e inclinadas. Las bandas utilizadas pueden ser con cangilones o lisas.</p><p>Las construcciones de los bastidores y rodillos se fabrican a pedido y adaptables a cada proceso en particular. Accionamiento mediante motorreductores.</p>','','',NULL,NULL,NULL,NULL,NULL),(16,'Transportes Hidráulicos','transportes-hidraulicos','Description','<p>Los transportes hidráulicos, son diseñados para transportar papas, verduras, pescados, mariscos, etc. Son construidos bajo diseños específicos de cada proceso, al igual que la selección de los sistemas de impulsión. Las dimensiones y capacidades serán definidas de acuerdo al producto a transportar.</p><p>Cuentan con un sistema de impulsión, tubería de transmisión, tolva de recepción y sistema de recirculación de agua.</p><p>Los sistemas son totalmente limpiables, y se construyen por secciones para su desarme y mantenimiento.</p>','','',NULL,NULL,NULL,NULL,NULL),(17,'Silos de Almacenamiento','silos-de-almacenamiento','Description','<p>Diseñamos y fabricamos silos para almacenamiento de materias primas, como ser verduras, hortalizas. Los diseños se realizan de acuerdo a las disposiciones de capacidad y espacio.</p><p>Pueden estar construidos en acero inoxidable o acero al carbono con recubrimiento.</p><p>Construidos de forma modular permite el crecimiento del almacenamiento secuencial con aprovechamiento de los espacios.</p><p>Capacidades de 5Tn a 30Tn.</p><p>Adicionalmente se pueden equipar con cintas transportadoras para canalizar la descarga.</p><p>Los silos vienen equipados con amortiguadores de llenado, lo que permite un mayor aprovechamiento del volumen, mejora la eficiencia de carga y reduce la necesidad de reacomodamiento de la carga.</p>','','',NULL,NULL,NULL,NULL,NULL),(18,'Lavadoras','lavadoras','Description','<p>Las lavadoras SOWTGEN son equipos a tambor rotativo construidos en acero inoxidable en diseño de varillas separadas lo que genera un desgaste muy bajo y mantiene la calidad de los productos a lavar. Utilizadas para lavar hortalizas donde retira piedras, tierra adherida, palos, etc. estando sumergidas de acuerdo a la regulación del canal de salida.</p><p>Las lavadoras cuentan con una tolva de entrada, sistema de salida regulada para mantener el flujo de proceso, aspersores para mejorar el lavado.</p><p>En el colector de barros se encuentran picos que direccionan el agua de limpieza para facilitar la salida de barros hacia el drenaje de salida.</p><p>Laterales totalmente desmontables que permiten una limpieza más profunda y fácil  mantenimiento.</p><p>Equipadas con tablero de control, reguladores de velocidad y sensores de nivel para control de alarmas.</p>','','',NULL,NULL,NULL,NULL,NULL),(19,'Cepilladora','cepilladora','Description','<p>Las Cepilladora / Peladora es una máquina pensada para estar aguas abajo en el flujo del proceso, diseñada bajo el concepto de cepillos giratorios, estos permitirán retirar los restos de cáscara que no fueron removidos en el proceso de pelado manteniendo intacta la superficie del producto.</p><p>El sistema puede ser acondicionado con una bomba a tornillo la cual retirará los restos de desechos que se acumulen en el cono de salida.</p><p>El material de los cepillos es de aleación los cuales reducen el desgaste y aumentan la vida útil de la máquina.</p><p>La transmisión es mediante correas para facilitar el mantenimiento.</p><p>Equipadas con tablero de control, reguladores de velocidad y sensores de nivel para control de alarmas.</p>','','',NULL,NULL,NULL,NULL,NULL),(20,'Slicer / Líneas de Corte ','slicer-lineas-de-corte','Description','<p>Los equipos de corte SOWTGEN son sistemas pensados para optimizar las líneas de procesamiento, el dado de corte (bloque de cuchillas) esta diseñado para facilitar el desmontaje, limpieza y cambio de formato.</p><p>Los sistemas de bombeo utilizados se seleccionan en función a la capacidad de producción definida por el proceso.</p><p>Equipadas con tablero de control, reguladores de velocidad y sensores de nivel para control de alarmas.</p>','','',NULL,NULL,NULL,NULL,NULL),(21,'Blancher','blancher','Description','<p>El blancher, o sistema de calentamiento, es un sistema a tambor construido mediante varillas de acero inoxidable, lo que le permite al producto no dañar su superficie. El sistema mantiene bajo el efecto de la temperatura al producto sin que esta se acumule, logrando una transferencia de calor de manera uniforme. El tambor tiene un sistema de clapetas de entrada y salida que sumado al sistema de control de temperatura y la variación de velocidad del tambor, lograr el punto de calentamiento / blancheado justo.</p><p>El sistema de tambor se encuentra soportado por rodillos de Teflon y sistema de transmisión por correas.</p><p>El sistema de calentamiento se puede seleccionar al momento del diseño si el mismo es calentamiento eléctrico, intercambio de vapor o quemadores de gas.</p><p>Equipadas con tablero de control, reguladores de velocidad y sensores de nivel para control de alarmas.</p>','','',NULL,NULL,NULL,NULL,NULL),(22,'Cooler','cooler','Description','','','',NULL,NULL,NULL,NULL,NULL),(23,'Cooker – Sistemas de Cocción Industrial','cooker','Description','<p>Sistema de coccion en línea, diseñados para cocción mediante agua caliente, horneado, o cocinador de pared rascada, cada uno de los sistemas se diseñan de acuerdo al proceso definido.</p><p>Los sistemas de cocción mediante agua caliente pueden ser en línea o por batch.</p><p>Los sistemas en línea consisten en bateas donde la materia prima (generalmente pensados para la cocción de tuberculos) ingresan por un lado de la batea llena de agua caliente y mediante un helicoidal se desplaza dutante un tiempo definido hasta el final de la batea, la temperatura del agua y el tiempo de residencia se regulan para buscar la cocción deseada.</p><p>Los sistemas en Batch se componen de recipientes, atmosféricos o sometidos a presión los cuales se agregan ingredientes y dentro de estos se generan los productos deseados.  Estas cocinas pueden tener calentamiento mediante camisa y agitación para optimizar los procesos de cocinado.</p><p>La carga de las materias primas puede ser regulada por celdas de carga o mediante caudalímetros. El vaciado puede ser generado mediante el volcado del producto a través de un sistema hidráulico o neumáticos.</p>Los sistemas de control se diseñan para que el operador pueda seleccionar la receta o la definición de los parámetros para cada paso.</p><p>Los sistemas de cocción mediante pared rascada son muy utilizados para la elaboración de salsas o aderezos. Los sistemas cuentan con recipientes que pueden ser atmosféricos o sometidos a presión y en su interior cuentan con un sistema de raspaje que permite evitar la adherencia en las paredes del reactor.</p><p>Las capacidades de cocción tienen un rango de 500 litros a 2.500 litros.</p>','','',NULL,NULL,NULL,NULL,NULL),(24,'Sedimentadores ','sedimentadores ','Description','<p>Los equipos sedimentadores son sistemas rotativos de separación primaria que permite reducir los costos de tratamiento dado que separa barros / lodos de agua, permitiendo enviar a tratamiento el agua con menor contenido de sedimentos.</p><p>Gracias a su malla calibrada, velocidad de rotación y sistema de control, los Sedimentadores Sowtgen son una muy buena solución para reducir la necesidad de espacio y capacidad de la planta de tratamientos.</p><p>Utilizados para reducir acumulación de residuos en cañerías, los sistemas decanters se instalan en pozos de acumulación previo a las cañerías de salida hacia la planta de tratamientos de efluentes y evitan los excesivos costos de mantenimiento.</p><p>El sistema de control permite la autoregulación de salida de barros y la autolimpieza.</p><p>El material de construcción puede ser totalmente de acero inoxidable o con el tambor de acero inoxidable y la estructura en acero al carbono.</p>','','',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `maquinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maquinas_industrias`
--

DROP TABLE IF EXISTS `maquinas_industrias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maquinas_industrias` (
  `id_maquina_industria` int(11) NOT NULL AUTO_INCREMENT,
  `id_maquina` int(11) NOT NULL,
  `id_industria` int(11) NOT NULL,
  PRIMARY KEY (`id_maquina_industria`),
  KEY `maquina_idx` (`id_maquina`),
  KEY `industria_idx` (`id_industria`),
  CONSTRAINT `industria` FOREIGN KEY (`id_industria`) REFERENCES `industrias` (`id_industria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `maquina` FOREIGN KEY (`id_maquina`) REFERENCES `maquinas` (`id_maquina`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maquinas_industrias`
--

LOCK TABLES `maquinas_industrias` WRITE;
/*!40000 ALTER TABLE `maquinas_industrias` DISABLE KEYS */;
INSERT INTO `maquinas_industrias` VALUES (1,4,1),(2,4,2),(3,4,3),(4,4,4),(5,4,5),(6,4,6),(7,4,7),(8,4,8),(9,4,9),(10,4,10),(11,4,11),(12,1,1),(13,1,2),(14,1,3),(15,1,4),(16,1,5),(17,1,6),(18,1,7),(19,1,8),(20,1,9),(21,1,10),(22,1,11),(23,1,12),(24,1,13),(25,1,14),(26,1,15),(27,1,18),(28,6,1),(29,6,2),(30,6,4),(31,6,8),(32,6,9),(33,6,10),(34,6,11),(35,2,1),(36,2,2),(37,2,3),(38,2,4),(39,2,5),(40,2,6),(41,2,7),(42,2,8),(43,2,9),(44,2,10),(45,2,11),(46,2,18),(47,7,1),(48,7,2),(49,7,3),(50,7,4),(51,7,5),(52,7,6),(53,7,7),(54,7,8),(55,7,9),(56,7,10),(57,7,11),(58,8,1),(59,8,2),(60,8,3),(61,8,4),(62,3,1),(63,3,2),(64,3,3),(65,3,4),(66,3,5),(67,3,6),(68,3,7),(69,3,8),(70,3,9),(71,3,10),(72,3,11),(73,3,12),(74,3,13),(75,3,14),(76,3,15),(77,3,16),(78,3,17),(79,3,18),(80,5,1),(81,5,2),(82,5,3),(83,5,4),(84,5,5),(85,5,6),(86,5,7),(87,5,8),(88,5,9),(89,5,10),(90,5,11),(91,5,18),(92,9,1),(93,9,2),(94,9,3),(95,9,4),(96,9,5),(97,9,6),(98,9,7),(99,9,8),(100,9,9),(101,9,10),(102,9,11),(103,9,14),(104,9,18),(105,13,1),(106,13,2),(107,13,3),(108,13,4),(109,13,5),(110,13,6),(111,13,7),(112,13,8),(113,13,9),(114,13,10),(115,13,11),(116,13,12),(117,13,13),(118,13,14),(119,13,15),(120,13,18),(121,10,16),(122,10,17),(123,10,19),(124,11,16),(125,11,17),(126,11,19),(127,14,16),(128,14,17),(129,14,19),(130,15,16),(131,15,17),(132,15,19),(133,16,16),(134,16,17),(135,16,19),(136,17,16),(137,17,17),(138,17,19),(139,18,19),(140,19,19),(141,20,19),(142,21,19),(143,22,19),(144,23,19),(145,24,19);
/*!40000 ALTER TABLE `maquinas_industrias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mercados`
--

DROP TABLE IF EXISTS `mercados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mercados` (
  `id_mercado` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_mercado` varchar(250) NOT NULL,
  `slug_mercado` varchar(250) NOT NULL,
  `descripcion_corta_mercado` varchar(250) NOT NULL,
  `foto_mercado` varchar(250) NOT NULL,
  `id_categoria_mercado` int(11) NOT NULL,
  PRIMARY KEY (`id_mercado`),
  KEY `fk_categoria_mercado_idx` (`id_categoria_mercado`),
  CONSTRAINT `fk_categoria_mercado` FOREIGN KEY (`id_categoria_mercado`) REFERENCES `categorias_mercados` (`id_categoria_mercado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mercados`
--

LOCK TABLES `mercados` WRITE;
/*!40000 ALTER TABLE `mercados` DISABLE KEYS */;
INSERT INTO `mercados` VALUES (1,'Frutas y Verduras','frutas-y-verduras','Description','frutas-y-verduras-1200x400.jpg',1),(2,'Bebidas','bebidas','Description','bebidas-1200x400.jpg',1),(3,'Salsas y Dulces','salsas-y-dulces','Description','salsas-y-dulces-1200x400.jpg',1),(4,'Alimentos Sólidos y Polvos','alimentos-solidos-y-polvos','Description','alimentos-solidos-y-polvos-1200x400.jpg',1),(5,'Ingredientes','ingredientes','Description','ingredientes-1200x400.jpg',1),(6,'Lácteos','lacteos','Description','lacteos-1200x400.jpg',1),(7,'Personal Care','personal-care','Description','personal-care-1200x400.jpg',2),(8,'Home Care','home-care','Description','home-care-1200x400.jpg',2);
/*!40000 ALTER TABLE `mercados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paginas`
--

DROP TABLE IF EXISTS `paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paginas` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_pagina` varchar(250) NOT NULL,
  `slug_pagina` varchar(250) NOT NULL,
  `descripcion_pagina` varchar(500) NOT NULL,
  PRIMARY KEY (`id_pagina`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paginas`
--

LOCK TABLES `paginas` WRITE;
/*!40000 ALTER TABLE `paginas` DISABLE KEYS */;
INSERT INTO `paginas` VALUES (1,'Home','','Description'),(2,'Ingeriería y Obras','ingenieria-y-obras','Description'),(3,'Process Solutions','process-solutions','Description'),(4,'Mercados','mercados','Description'),(5,'Industrias','industrias','Description'),(6,'Equipos','equipos','Description');
/*!40000 ALTER TABLE `paginas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `process_solutions`
--

DROP TABLE IF EXISTS `process_solutions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `process_solutions` (
  `id_process_solution` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_process_solution` varchar(250) NOT NULL,
  `slug_process_solution` varchar(250) NOT NULL,
  `descripcion_corta_process_solution` varchar(500) NOT NULL,
  `foto_process_solution` varchar(500) NOT NULL,
  PRIMARY KEY (`id_process_solution`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `process_solutions`
--

LOCK TABLES `process_solutions` WRITE;
/*!40000 ALTER TABLE `process_solutions` DISABLE KEYS */;
INSERT INTO `process_solutions` VALUES (1,'Líquidos','liquidos','Description','process-solutions-liquidos.jpg'),(2,'Sólidos','solidos','Description','process-solutions-solidos.jpg'),(3,'Frutas y Verduras','frutas-y-verduras','Description','process-solutions-frutas-y-verduras.jpg');
/*!40000 ALTER TABLE `process_solutions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `vista_maquinas_industrias`
--

DROP TABLE IF EXISTS `vista_maquinas_industrias`;
/*!50001 DROP VIEW IF EXISTS `vista_maquinas_industrias`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vista_maquinas_industrias` AS SELECT 
 1 AS `id_maquina`,
 1 AS `id_industria`,
 1 AS `titulo_maquina`,
 1 AS `slug_maquina`,
 1 AS `descripcion_corta_maquina`,
 1 AS `descripcion_maquina`,
 1 AS `foto_chica_maquina`,
 1 AS `foto_grande_maquina`,
 1 AS `titulo_columna1_maquina`,
 1 AS `descripcion_columna1_maquina`,
 1 AS `titulo_columna2_maquina`,
 1 AS `descripcion_columna2_maquina`,
 1 AS `brochure_maquina`,
 1 AS `titulo_industria`,
 1 AS `slug_industria`,
 1 AS `descripcion_corta_industria`,
 1 AS `foto_chica_industria`,
 1 AS `descripcion_industria`,
 1 AS `id_mercado`,
 1 AS `id_process_solution`,
 1 AS `icono_industria`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vista_mercados`
--

DROP TABLE IF EXISTS `vista_mercados`;
/*!50001 DROP VIEW IF EXISTS `vista_mercados`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vista_mercados` AS SELECT 
 1 AS `id_mercado`,
 1 AS `titulo_mercado`,
 1 AS `slug_mercado`,
 1 AS `descripcion_corta_mercado`,
 1 AS `foto_mercado`,
 1 AS `id_categoria_mercado`,
 1 AS `titulo_categoria_mercado`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'sowtgen'
--

--
-- Dumping routines for database 'sowtgen'
--

--
-- Final view structure for view `vista_maquinas_industrias`
--

/*!50001 DROP VIEW IF EXISTS `vista_maquinas_industrias`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50001 VIEW `vista_maquinas_industrias` AS select `maquinas_industrias`.`id_maquina` AS `id_maquina`,`maquinas_industrias`.`id_industria` AS `id_industria`,`maquinas`.`titulo_maquina` AS `titulo_maquina`,`maquinas`.`slug_maquina` AS `slug_maquina`,`maquinas`.`descripcion_corta_maquina` AS `descripcion_corta_maquina`,`maquinas`.`descripcion_maquina` AS `descripcion_maquina`,`maquinas`.`foto_chica_maquina` AS `foto_chica_maquina`,`maquinas`.`foto_grande_maquina` AS `foto_grande_maquina`,`maquinas`.`titulo_columna1_maquina` AS `titulo_columna1_maquina`,`maquinas`.`descripcion_columna1_maquina` AS `descripcion_columna1_maquina`,`maquinas`.`titulo_columna2_maquina` AS `titulo_columna2_maquina`,`maquinas`.`descripcion_columna2_maquina` AS `descripcion_columna2_maquina`,`maquinas`.`brochure_maquina` AS `brochure_maquina`,`industrias`.`titulo_industria` AS `titulo_industria`,`industrias`.`slug_industria` AS `slug_industria`,`industrias`.`descripcion_corta_industria` AS `descripcion_corta_industria`,`industrias`.`foto_chica_industria` AS `foto_chica_industria`,`industrias`.`descripcion_industria` AS `descripcion_industria`,`industrias`.`id_mercado` AS `id_mercado`,`industrias`.`id_process_solution` AS `id_process_solution`,`industrias`.`icono_industria` AS `icono_industria` from ((`maquinas_industrias` join `maquinas` on(`maquinas_industrias`.`id_maquina` = `maquinas`.`id_maquina`)) join `industrias` on(`maquinas_industrias`.`id_industria` = `industrias`.`id_industria`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vista_mercados`
--

/*!50001 DROP VIEW IF EXISTS `vista_mercados`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50001 VIEW `vista_mercados` AS select `mercados`.`id_mercado` AS `id_mercado`,`mercados`.`titulo_mercado` AS `titulo_mercado`,`mercados`.`slug_mercado` AS `slug_mercado`,`mercados`.`descripcion_corta_mercado` AS `descripcion_corta_mercado`,`mercados`.`foto_mercado` AS `foto_mercado`,`mercados`.`id_categoria_mercado` AS `id_categoria_mercado`,`categorias_mercados`.`titulo_categoria_mercado` AS `titulo_categoria_mercado` from (`mercados` join `categorias_mercados` on(`mercados`.`id_categoria_mercado` = `categorias_mercados`.`id_categoria_mercado`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-16 12:53:06
