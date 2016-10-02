<?php
use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder {

    public function run()
    {
        DB::table('menu')->delete();
		$statement = "ALTER TABLE menu AUTO_INCREMENT = 1;";
		DB::unprepared($statement);

        Menu::create(array(
	    	'id_padre'=>null,
	        'titulo'=>'Robótica',
	        'descripcion'=> 'Robótica',
	        'esHoja'=>0,
	        'activo'=>1
    	));

    	Menu::create(array(#2
	    	'id_padre'=>1,
	        'titulo'=>'Introducción EV3',
	        'descripcion'=> 'Introducción EV3',
	        'esHoja'=>0,
	        'activo'=>1
    	));
    	Menu::create(array(#3
	    	'id_padre'=>1,
	        'titulo'=>'Tutoria',
	        'descripcion'=> 'Tutoria',
	        'esHoja'=>0,
	        'activo'=>1
    	));

    	Menu::create(array(#4
	    	'id_padre'=>2,
	        'titulo'=>'Bloque de Acción',
	        'descripcion'=> 'Bloque de Acción',
	        'esHoja'=>0,
	        'activo'=>1
    	));

    	Menu::create(array(#5
	    	'id_padre'=>2,
	        'titulo'=>'Bloque de Sensores',
	        'descripcion'=> 'Bloque de Sensores',
	        'esHoja'=>0,
	        'activo'=>1
    	));
    	Menu::create(array(#6
	    	'id_padre'=>2,
	        'titulo'=>'Bloque de Flujo',
	        'descripcion'=> 'Bloque de Flujo',
	        'esHoja'=>0,
	        'activo'=>1
    	));
    	Menu::create(array(#7
	    	'id_padre'=>2,
	        'titulo'=>'Bloque de Datos',
	        'descripcion'=> 'Bloque de Datos',
	        'esHoja'=>0,
	        'activo'=>1
    	));
    	Menu::create(array(#8
	    	'id_padre'=>2,
	        'titulo'=>'Bloque Avanzados',
	        'descripcion'=> 'Bloque Avanzados',
	        'esHoja'=>0,
	        'activo'=>1
    	));

    	Menu::create(array(#9
	    	'id_padre'=>4,
	        'titulo'=>'Motor Mediano',
	        'descripcion'=> 'Motor Mediano',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#10
	    	'id_padre'=>4,
	        'titulo'=>'Motor Grande',
	        'descripcion'=> 'Motor Grande',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#11
	    	'id_padre'=>4,
	        'titulo'=>'Mover Dirección',
	        'descripcion'=> 'Mover Dirección',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#12
	    	'id_padre'=>4,
	        'titulo'=>'Mover Tanque',
	        'descripcion'=> 'Mover Tanque',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#13
	    	'id_padre'=>4,
	        'titulo'=>'Pantalla',
	        'descripcion'=> 'Pantalla',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#14
	    	'id_padre'=>4,
	        'titulo'=>'Sonido',
	        'descripcion'=> 'Sonido',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#15
	    	'id_padre'=>4,
	        'titulo'=>'Luz de Estado Bloque',
	        'descripcion'=> 'Luz de Estado Bloque',
	        'esHoja'=>1,
	        'activo'=>1
    	));

    	Menu::create(array(#16
	    	'id_padre'=>5,
	        'titulo'=>'Inicio',
	        'descripcion'=> 'Inicio',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#17
	    	'id_padre'=>5,
	        'titulo'=>'Espera',
	        'descripcion'=> 'Espera',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#18
	    	'id_padre'=>5,
	        'titulo'=>'Bucle',
	        'descripcion'=> 'Bucle',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#19
	    	'id_padre'=>5,
	        'titulo'=>'Interruptor',
	        'descripcion'=> 'Interruptor',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#20
	    	'id_padre'=>5,
	        'titulo'=>'Bucle Interruptor',
	        'descripcion'=> 'Bucle Interruptor',
	        'esHoja'=>1,
	        'activo'=>1
    	));

    	Menu::create(array(#21
	    	'id_padre'=>6,
	        'titulo'=>'Ultrasonido',
	        'descripcion'=> 'Ultrasonido',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#22
	    	'id_padre'=>6,
	        'titulo'=>'Infrarojo',
	        'descripcion'=> 'Infrarojo',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#23
	    	'id_padre'=>6,
	        'titulo'=>'Gyro',
	        'descripcion'=> 'Gyro',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#24
	    	'id_padre'=>6,
	        'titulo'=>'Color',
	        'descripcion'=> 'Color',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#25
	    	'id_padre'=>6,
	        'titulo'=>'Motor Rotación',
	        'descripcion'=> 'Motor Rotación',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#26
	    	'id_padre'=>6,
	        'titulo'=>'Touch',
	        'descripcion'=> 'Touch',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#27
	    	'id_padre'=>6,
	        'titulo'=>'Timer',
	        'descripcion'=> 'Timer',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#28
	    	'id_padre'=>6,
	        'titulo'=>'Botones Brick',
	        'descripcion'=> 'Botones Brick',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#29
	    	'id_padre'=>6,
	        'titulo'=>'Sonido NXT',
	        'descripcion'=> 'Sonido NXT',
	        'esHoja'=>1,
	        'activo'=>1
    	));

    	Menu::create(array(#30
	    	'id_padre'=>7,
	        'titulo'=>'Constante',
	        'descripcion'=> 'Constante',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#31
	    	'id_padre'=>7,
	        'titulo'=>'Variable',
	        'descripcion'=> 'Variable',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#32
	    	'id_padre'=>7,
	        'titulo'=>'Lista',
	        'descripcion'=> 'Lista',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#33
	    	'id_padre'=>7,
	        'titulo'=>'Lógico',
	        'descripcion'=> 'Lógico',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#34
	    	'id_padre'=>7,
	        'titulo'=>'Matemático',
	        'descripcion'=> 'Matemático',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#35
	    	'id_padre'=>7,
	        'titulo'=>'Redondear',
	        'descripcion'=> 'Redondear',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#36
	    	'id_padre'=>7,
	        'titulo'=>'Comparar',
	        'descripcion'=> 'Comparar',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#37
	    	'id_padre'=>7,
	        'titulo'=>'Rango',
	        'descripcion'=> 'Rango',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#38
	    	'id_padre'=>7,
	        'titulo'=>'Texto',
	        'descripcion'=> 'Texto',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#39
	    	'id_padre'=>7,
	        'titulo'=>'Aleatorio',
	        'descripcion'=> 'Aleatorio',
	        'esHoja'=>1,
	        'activo'=>1
    	));

    	Menu::create(array(#40
	    	'id_padre'=>8,
	        'titulo'=>'Acceso Archivos',
	        'descripcion'=> 'Acceso Archivos',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#41
	    	'id_padre'=>8,
	        'titulo'=>'Mensajería',
	        'descripcion'=> 'Mensajería',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#42
	    	'id_padre'=>8,
	        'titulo'=>'Conexión Bluetooth',
	        'descripcion'=> 'Conexión Bluetooth',
	        'esHoja'=>1,
	        'activo'=>1
    	));

    	Menu::create(array( #43
	    	'id_padre'=>null,
	        'titulo'=>'Mantenimiento',
	        'descripcion'=> 'Mantenimiento',
	        'esHoja'=>0,
	        'activo'=>1
    	));
    	Menu::create(array(#44
	    	'id_padre'=>43,
	        'titulo'=>'Tutorías',
	        'descripcion'=> 'Tutorías',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#45
	    	'id_padre'=>43,
	        'titulo'=>'Evaluaciones',
	        'descripcion'=> 'Evaluaciones',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#46
	    	'id_padre'=>43,
	        'titulo'=>'Cursos',
	        'descripcion'=> 'Cursos',
	        'esHoja'=>1,
	        'activo'=>1
    	));
    	Menu::create(array(#47
	    	'id_padre'=>43,
	        'titulo'=>'Introducción EV3',
	        'descripcion'=> 'Introducción EV3',
	        'esHoja'=>1,
	        'activo'=>1
    	));

    }
}