<?php

namespace App\Exports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PersonasExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Selecciona los campos que deseas exportar
        return Persona::select('id', 'nombre', 'apellido', 'correo', 'telefono')->get();
    }

    public function headings(): array
    {
        // Define los encabezados de las columnas
        return [
            'ID',
            'Nombre',
            'Apellido',
            'Correo',
            'Teléfono'
        ];
    }
}
