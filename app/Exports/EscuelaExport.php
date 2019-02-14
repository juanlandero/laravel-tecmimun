<?php

namespace App\Exports;
use App\Alumno;
use App\Escuela;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class EscuelaExport implements FromQuery, WithHeadings, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(int $id_escuela)
    {
        $this->escuela = $id_escuela;
    }

    public function headings(): array
    {
        return [
            'ID',
            'ALUMNO',
            'EDAD',
            'E-MAIL',
            'CÓDIGO',
            'PAÍS',
            'COMITÉ',
            'ESCUELA',
        ];
    }

    public function query()
    {

        $query = Alumno::query()
                            ->join('escuelas', 'alumnos.pk_escuelas', '=', 'escuelas.id')
                            ->join('paiscomites', 'alumnos.pk_inscripcion', '=', 'paiscomites.id')
                            ->leftJoin('comites', 'paiscomites.pk_comite', '=', 'comites.id')
                            ->leftJoin('pais', 'paiscomites.pk_pais', '=', 'pais.id')
                            ->select(
                                    'alumnos.id',
                                    'alumnos.nombre as alumno',
                                    'alumnos.edad',
                                    'alumnos.mail',
                                    'alumnos.codigo',
                                    'pais.nombre as pais',
                                    'comites.nombre as comite',
                                    'escuelas.nombre as escuela'
                                )
                            ->where('alumnos.pk_escuelas', $this->escuela)
                            ->orderBy('comites.nombre', 'asc');

        return $query;
    }
}
