# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.38)
# Database: organica
# Generation Time: 2014-12-05 08:35:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comida_humanos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comida_humanos`;

CREATE TABLE `comida_humanos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

LOCK TABLES `comida_humanos` WRITE;
/*!40000 ALTER TABLE `comida_humanos` DISABLE KEYS */;

INSERT INTO `comida_humanos` (`id`, `nombre`, `descripcion`, `imagen`)
VALUES
	(1,'Espinacas','Están cargadas de fibra vitaminas y minerales, atacan enfermedades cardiacas y cáncer.','espinacas.png'),
	(2,'Aceite de coco',' Es una grasa saturada estable, es antibacteriano, antiviral y antioxidante, alto en ácido laurico grasa saturada en la leche materna.','aceite.png'),
	(3,'Frijoles','Ofrecen proteina vitamina B, Calcio, Potasio y ácido fólico.','frijoles.png'),
	(4,'Leche de almendra','Aportan proteinas fibras minerales vitaminas de grupo B y E y ácidos grasos como omega 3 y ácido fólico.','almendra.png'),
	(5,'Leche de arroz','Es completamente digerible, se destaca por su valor energético que aporta contenido en carbohidratos así como la ausencia de colesterol y lactosa.\n','arroz.png'),
	(6,'Miel de abeja','Tiene propiedades antibacteriales, anti-inflamatorios, aticepticas y calmantes.','abeja.png'),
	(7,'Pescado','Aporta nutrientes de proteinas en alto valor biologico, vitaminas y minerales. ademas omega 3.','pescado.png'),
	(8,'Panqué de zanahoria','Ricos en fibra, vitaminas, minerales, antioxidantes y pobres en grasas.','panque.png'),
	(9,'Portobello','Menos de 30 calorías, cero colesterol y pocos carbohidratos, especialmente contiene potasio y fibra.','hongos.png'),
	(10,'Aguacate','Aporta grasa vegetal, minerales, vitamina E, fibra e hidratos de carbono, ayudando a reducir el colesterol.','aguacate.png');

/*!40000 ALTER TABLE `comida_humanos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comida_mascotas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comida_mascotas`;

CREATE TABLE `comida_mascotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

LOCK TABLES `comida_mascotas` WRITE;
/*!40000 ALTER TABLE `comida_mascotas` DISABLE KEYS */;

INSERT INTO `comida_mascotas` (`id`, `nombre`, `descripcion`, `imagen`)
VALUES
	(1,'Happybarks','Delicioso y nutritivo postre para su perro, happybarks es 100% natural y evita enfermedades relacionadas con el uso de conservadores, colorantes, saborizantes, harina y/o desperdicios','happy.png'),
	(2,'Hokamix-30 ','Bioregulador optimizador de la digestión rico en vitaminas y minerales para perros. Hokamix es un producto que administrado de forma continuada consigue efectos sorprendentes en tu mascota, que estará llena de vitalidad y energía. ','hokamix.png'),
	(3,'Fullolife aceite de pescado ','Este suplemento ayuda a mantener la piel sana y reduce la caída excesiva del pelaje para que tu perro luzca una piel sana y un pelaje brillante. Este alimento complementario está compuesto por una mezcla de aceites de pescado muy ricos en Omega 3 y 6, que ayuda a nutrir e hidratar la piel, evitando los picores y la sequedad.','fullo.png'),
	(4,'Snack líquido ','Se presenta en forma de novedoso roll-on de 45ml. del que tu perro lamerá un riquísimo líquido de recompensa tiene una baja ingesta de calorías frente a otros premios para mascotas y no contiene azucar','roller.png'),
	(5,'Snack para perros y gatos ','Los Snacks para perros y gatos Sushi envueltos por piel bovina, y con sabor a frutas, harán las delicias de todo tipo de perros y gatos, 100% saludable','sushi.png'),
	(6,'Nature\'s Harvest Snack ','Sabroso y saludable snack de excelente calidad fabricado a base de ingredientes naturales. Contiene piezas frescas de carne que han sido secadas al sol manteniendo todos los nutrientes y sabor.','nature.png'),
	(7,'Choco Drops ','Este chocolate está especialmente hecho para perros ya que se quita la teobromina que es dañina para nuestros perros. Además, estos bombones contienen muchas vitaminas proporcionando un aporte extra de energía y vitalidad que tu perro necesita.','chocodrops.png'),
	(8,'Croquetas para Perro Adulto ','Son croquetas secas  hipo alergénicas, preparado a partir de materias primas seleccionadas de primera calidad, formulado pensando en la salud del perro. Satisface las necesidades nutricionales de los perros de paladar más exquisito, animales con tendencia a padecer problemas digestivos o alergias alimentarias o bien aquellos que necesitan mejorar la salud de la piel y/o el pelo.','croquetas.png'),
	(9,'Friskies Buey Paté ','Este alimento con trocitos de carne es muy sabroso y muy bien aceptado por la mayoría de los perros. Su deliciosa receta con buey, pollo y verduras seleccionadas proporciona el equilibrio completo de nutrientes (proteínas, vitaminas y minerales) que necesita tu mascota para su bienestar.','friskies.png'),
	(10,'Platinum Puppy Pollo ','Alimento completo de excelente calidad con exquisito sabor adecuado para la alimentación diaria de cachorros de cualquier tamaño. Este alimento constituye una dieta natural y saludable que aporta todos los nutrientes que necesita tu mascota para tener un adecuado crecimiento.','poppy.png');

/*!40000 ALTER TABLE `comida_mascotas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table higiene_humano
# ------------------------------------------------------------

DROP TABLE IF EXISTS `higiene_humano`;

CREATE TABLE `higiene_humano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

LOCK TABLES `higiene_humano` WRITE;
/*!40000 ALTER TABLE `higiene_humano` DISABLE KEYS */;

INSERT INTO `higiene_humano` (`id`, `nombre`, `descripcion`, `imagen`)
VALUES
	(1,'Crema jalea real','Revitalizadora natural. El contenido de la Jalea real es altamente nutritivo, rico en proteínas y aminoácidos.\rRetardando el envejecimiento de la piel, mejorando su hidratación y elasticidad, manteniendo una apariencia joven.','jaleareal.png'),
	(2,'Hidratante para el día',' Nuestra crema hidratante ligera, sedosa durante el día se absorbe rápidamente y tiene una duración de horas porque está imbuido de fito-activos potentes encontrados en semillas Chardonnay, aceitunas mediterráneas y soja.','hidratadora.png'),
	(3,'Cleansing Mix','Esta limpiadora sin formación de espuma barre la suciedad y las impurezas para revelar una piel mas saludable y juvenil. La piel se siente limpia, suave e hidratada','mix.png'),
	(4,'Loción de hamamelis','Remueve el exceso de grasa ayudando a cerrar los poros dejando el cutis limpio y fresco. Utilizar como complemento en el tratamiento de limpieza facial.','locion.png'),
	(5,'Tea tree desodorante','Nuestros desodorantes  neutraliza las bacterias que causan el olor, directamente en su origen. Fortificado con ingredientes botánicos orgánicos certificados ricos en nutrientes, calmante para nutrir y proteger la piel de las axilas sensibles.','tea.png'),
	(6,'Crema de Menta Natural','Cepillarse los dientes con nuestra gran sabor fluoruro libre Crème de menta pasta de dientes ayuda a reducir la acumulación de placa dental y abrillanta los dientes mientras que refresca el aliento y la promoción de la salud oral.','pasta.png'),
	(7,'Aloe Vera Jabón','Barra de jabón a base de verduras calmante Aloe Vera y extractos de manzanilla y nuestra exclusiva mezcla de 7 Naturales Boosters humedad para hidratar y suavizar la piel seca con su rica, cremosa espuma.','aloe.png'),
	(8,'Lavanda y Aloe Shampoo','Nutre tu cabello y satisfacer sus sentidos con el aroma relajante de lavanda orgánica. Aloe orgánica y la cola de caballo extracto nutren el cabello mientras pantenol(Vitamina B5) y Orgánica raíz de bardana para ayudar a hidratar cabello luzca sano y brillante','shampoo.png'),
	(9,'Acondicionador','Ayuda a acondicionar el cabello débil y suave. Este acondicionador ayuda a revitalizar y fortalecer el adelgazamiento del cabello. Mira pelo y se siente más fuerte, vibrante y lleno de vida.','acondicionador.png'),
	(10,'Bloqueador','Ayuda a proteger contra el daño solar y los signos de envejecimiento al tiempo que suaviza la piel. Guayaba, extractos de almendra y tomate contienen vitaminas antioxidantes C y E.','bloqueador.png');

/*!40000 ALTER TABLE `higiene_humano` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table higiene_mascotas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `higiene_mascotas`;

CREATE TABLE `higiene_mascotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

LOCK TABLES `higiene_mascotas` WRITE;
/*!40000 ALTER TABLE `higiene_mascotas` DISABLE KEYS */;

INSERT INTO `higiene_mascotas` (`id`, `nombre`, `descripcion`, `imagen`)
VALUES
	(1,'Shampoó anti pulgas','El shampoó se despliega durante la aplicación, afectando a piojos y pulgas, los cuales mueren al contacto con el producto, ya que está formulado con base de carbamato, que además ayuda a dar brillo y textura especial al pelaje de tu perro.','antipulgas.png'),
	(2,'Pasta de dientes','Ayuda a mantener los dientes y encías saludables y Reduce el mal aliento y ayuda a combatir la acumulación de placa.','pasta.png'),
	(3,'Tapete sanitario','Es perfecto para entrenar a los cachorritos, ideal para departamentos y también sensacional para patios. La superficie de se mantiene seca y además evita que la mugre y los olores de sus patitas mojadas se impregnen por toda la casa.\r','tapete.png'),
	(4,'Premios orgánicos','Son recompensas 100% naturales y bajos en calorías. Son hechos a base de calabaza, fibra de avena, papa y fruta natural. Libres de conservadores, trigo, maíz o soya y sin ingredientes artificiales, colorantes ni conservantes.','premios.png'),
	(5,'Porta bolsa higiénica','Un proactivo portador de bolsas para recoger las heces de tu mascota cuando lo sacas a un paseo, encierra el olor  y  las bolsas son 100% biodegradables.','porta _bolsas.png'),
	(6,'Cortauñas','Es fácil de usar, rápido en corte y no causa dolor.','cortaunas.png'),
	(7,'Cepillo premium','Viene con un Set de 2 Cepillos con Botón con botón extractor integrado, Facilidad al retirar el pelo que se queda en el cepillo, es Ideal para Perro, Gato y otras mascotas además Proporcionan un suave y placentero masaje.','cepillo.png'),
	(8,'Shampoo y acondicionador','Está especialmente formulado con suaves ingredientes, para eliminar nudos, dejando un pelaje sano, fuerte y brillante. Especialmente para perros con pelaje oscuro.','acondicionador.png'),
	(9,'Perfume','Un olor a fresco que no daña el olfato de su perro.','perfume.png'),
	(10,'Repelente','Desprende un olor desagradable para que el perro evite el lugar donde se aplica, no es dañino para su mascota.','repelente.png');

/*!40000 ALTER TABLE `higiene_mascotas` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table medicina_natural
# ------------------------------------------------------------

DROP TABLE IF EXISTS `medicina_natural`;

CREATE TABLE `medicina_natural` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

LOCK TABLES `medicina_natural` WRITE;
/*!40000 ALTER TABLE `medicina_natural` DISABLE KEYS */;

INSERT INTO `medicina_natural` (`id`, `nombre`, `descripcion`, `imagen`)
VALUES
	(1,'Espárragos','Ideales para los riñones por que los estimula, ademas de aumentar la producción de orina, favorece la expulsión natural de desechos.','esparragos.png'),
	(2,'Hongo maitake','Es conocido por sus propiedades anti-cancerigenas, posee la capacidad de prevenir tumores.','maitake.png'),
	(3,'Mateína','alcaloide con propiedades estimulantes para el sistema nervioso. ayudante para bajar de peso.','mate.png'),
	(4,'Maca','Ying seng Favorece la energia sexual, vitalidad, fuerza energía.','maca.png'),
	(5,'Estracto de sinomenine','Sedante, antiinflamatorio, trabajar la presión arterial.','sinomenine.png'),
	(6,'Gordolobo','Inflamación de garganta constipados y resfriados.','gordolobo.png'),
	(7,'Eucalipto','Para todas las infecciones de vías respiratorias.','eucalipto.png'),
	(8,'Achicoria','Depuración en lo riñones problemas estomacales y aperitivo.','achicoria.png'),
	(9,'Arándano','En caso de reducción de la visión o cualquier trastorno de las arterias de los ojos, permite que los ojos se recuperen.','arandano.png'),
	(10,'Apio','Elimina toxinas, depurar aquellos desechos que nuestro cuerpo no necesita.','apio.png');

/*!40000 ALTER TABLE `medicina_natural` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tiendas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tiendas`;

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

LOCK TABLES `tiendas` WRITE;
/*!40000 ALTER TABLE `tiendas` DISABLE KEYS */;

INSERT INTO `tiendas` (`id`, `nombre`, `descripcion`, `ubicacion`, `imagen`)
VALUES
	(1,'Piskani','Un espacio para producción hidropónica, venta de productos orgánicos, artesanales, alimentos orgánicos; una alternativa para difundir cursos de siembra hidropónica y desarrollar un concepto responsable.','A. López Mateos 3120C, Del Rosario, 37125 León, Gto.','piscani.jpg'),
	(2,'Bové','Bové es la marca de productos lácteos orgánicos que produce Grupo Industrial Cuadritos Biotek desde 1998 que ofrece productos lácteos orgánicos al consumidor.','Blvd. Manuel J. Clouthier 402, León, Gto.\rLocal 5, Plaza los Arcos (Frente al Sport City)','bove.jpg'),
	(3,'Vía orgánica','Es una organización mexicana sin fines de lucro, cuya misión es promover la buena alimentación mediante una agricultura orgánica, el comercio justo, un estilo de vida saludable y la protección del planeta.','Calle Margarito Ledesma # 2, Colonia Guadalupe, San Miguel de Allende, Gto.','via_organica.jpg'),
	(4,'Súper soya','Productos y restaurante vegetariano y vegano','Josefa Ortiz de Dominguez #202, Colonia Centro, León Gto.','supersoya.jpg'),
	(5,'El Mercado de Granjeros de la Ciudad','Alimentos frescos, locales y orgánicos, naturales y artesanales. ','Prolongacion Adolfo López Mateos #3402, Hacienda del Campestre 37170 León, Gto.','mercado.jpg'),
	(6,'Tierra','Restaurante de comida %100 orgánica, cuentan con una gran variedad de platillos, aquí podrás encontrar el perfecto equilibrio entre salud y sabor.','Calle Atlixco 94,Colonia Condesa , Delegacion Cuauhtemoc, 06140 Ciudad de México, D.F.','tierra.jpg');

/*!40000 ALTER TABLE `tiendas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
