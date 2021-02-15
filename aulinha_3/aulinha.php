<?php

$alunos = [
	['idade' => 11, 'materia_preferida' => 'Portugues', 'pais' => false],
	['idade' => 12, 'materia_preferida' => 'Física', 'pais' => true],
	['idade' => 15, 'materia_preferida' => 'Ciencias', 'pais' => false],
	['idade' => 9, 'materia_preferida' => 'Inglês', 'pais' => true],
	['idade' => 12, 'materia_preferida' => 'Matematica', 'pais' => false],
	['idade' => 5, 'materia_preferida' => 'Artes', 'pais' => true]	
];

$alunosLiberados['exemplo_foreach'] = [];

foreach ($alunos as $banana) {
	if (!$banana['pais']) { 
		array_push($alunosLiberados, $banana['idade']);
	}
}

$alunosLiberados['exemplo_array_map'] = array_map(function($aluno) {
    if (!$aluno['pais']) {
        return $aluno['idade'];
    }
    return 0;
}, $alunos);

$alunosLiberados['exemplo_array_filter'] = array_filter($alunos, function($aluno) {
    if (!$aluno['pais']) {
        return $aluno;
    }
});

if ($a = $alunosLiberados['teste'] ?? null) {
    print_r($a);
} else {
    print_r('Não tem aluno liberado');
}

