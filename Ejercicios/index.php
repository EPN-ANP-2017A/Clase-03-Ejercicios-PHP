<?php
$nombre = "Chalo";
$nombre .= " Salvador";


echo '<html>';
echo '<head>';

echo '</head>';
echo '<body>';
?>
<?php
/*
 * Variables
 */
?>
<strong>
	<?php echo $nombre; ?>
</strong>

<div>
	<?php echo 'Hola $nombre'; ?>
    <br>
	<?php echo "Hola $nombre"; ?>

    <br>
	<?php echo 'Hola ' . $nombre; ?>

    <br>

	<?php
	/*
	 * Arreglos
	 */
	$estudiantes = ['Jose', 'Carlos', 1, 2, 'Juan'];
	print_r($estudiantes);


	echo '<pre>';
	print_r($estudiantes);
	echo '</pre>';

	echo $estudiantes[1];
	echo '<br>';
	echo $estudiantes[2];

	$estudiantes[] = 'nuevo estudiante';
	$estudiantes[] = 'otro estudainte';

	echo '<pre>';
	print_r($estudiantes);
	echo '</pre>';


	$estudiantes_carrera = [
		'Jose' => 'ASI',
		'Carlos' => 'ASA',
		'Juan' => 'EM'
	];

	echo '<pre>';
	print_r($estudiantes_carrera);
	echo '</pre>';

	echo $estudiantes_carrera['Jose'];

	$estudiantes_carrera['Juana'] = 'ET';
	$estudiantes_carrera['Maria'] = 'ASI';

	echo '<pre>';
	print_r($estudiantes_carrera);
	echo '</pre>';


	/*
	 * Arreglos Multidimensionales
	 */

	$carreras_estudiantes = [
        'ASI' => ['e1', 'e2', 'e3'],
        'ASA' => ['e4', 'e5', 'e6', 'e7'],
        'EM' => ['e8', 'e9', 'e10', 'e11', 'e12'],
        'ET' => ['e13', 'e14', 'e15']
    ];

	echo '<pre>';
	print_r($carreras_estudiantes);
	echo '</pre>';
	?>
</div>
</body>
</html>
