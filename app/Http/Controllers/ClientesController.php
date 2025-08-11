<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function create(Request $request)
    {
        return view('clientescreate');
    }

    public function store(Request $request)
    {
         // Verifica se o arquivo foi enviado
        if (!$request->hasFile('excel_file')) {
            return back()->with('error', 'Nenhum arquivo enviado.');
        }

        $file = $request->file('excel_file');

        // Abre o arquivo CSV
        if (($handle = fopen($file, 'r')) !== false) {
            $header = fgetcsv($handle, 1000, ',');

            while (($row = fgetcsv($handle, 1000, ',')) !== false) {

                $data = array_combine($header, $row);

                $dtOriginal = $data['dtAtualiza'] ?? null;
                $dtFormatada = null;

                if (!blank($dtOriginal)) {
                    try {
                        $dt = \DateTime::createFromFormat('d/m/Y', $dtOriginal)
                            ?: \DateTime::createFromFormat('Y-m-d H:i:s', $dtOriginal);

                        if ($dt) {
                            $dtFormatada = $dt->format('Y-m-d');
                        }
                    } catch (\Exception $e) {
                        $dtFormatada = null;
                    }
                }
                
                Cliente::create([
                    'nome' => $data['nome'] ?? '',
                    'telefone' => $data['telefone'] ?? null,
                    'municipio' => $data['municipio'] ?? null,
                    'email' => $data['email'] ?? null,
                    'cargo' => $data['cargo'] ?? null,
                    'dtAtualiza' => $dtFormatada ?? null,
                    'obs' => $data['obs'] ?? null,
                ]);

            }

            fclose($handle);
        }

        return back()->with('success', 'Importação concluída com sucesso!');
    }

}
