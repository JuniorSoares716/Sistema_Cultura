<?php

use Illuminate\Database\Seeder;
use App\Model\Agente;
class AgentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Agente::create([
            'nome' => 'GABRIELA NAYARA DAMÁSIO',
            'sexo' => 'F',
            'serie' => '6° ANO DO ENSINO FUNDAMENTAL II',
            'turno' => 'M',
            'nascimento' => '1986-06-24',
            'rg' => '20142117360',
            'cpf' => '23147862316',
            'telefone' => '88994815532',
            'celular' => '88994815532',
            'email'=> 'gabriela@hotmail.com',
            'atividade' => 'Artesanto',
            'tempo' => '30',
            'instituicao' => 'IFCE - CAMPUS CEDRO',
            'movimento' => 'Fabricação',
            'categoria_id' => 1
        ]);
            Agente::create([
            'nome' => 'FRANCISO SOARES JÚNIOR',
            'sexo' => 'M',
            'serie' => '8° ANO DO ENSINO FUNDAMENTAL II',
            'turno' => 'T',
            'nascimento' => '1970-08-21',
            'rg' => '21172045365',
            'cpf' => '0456265265',
            'telefone' => '8897412434',
            'celular' => '8897412434',
            'email'=> 'junior@hotmail.com',
            'atividade' => 'Crime',
            'tempo' => '60',
            'instituicao' => 'FEBEM',
            'movimento' => 'Criminal',
            'categoria_id' => 3
        ]);

         Agente::create([
            'nome' => 'DANIEL SANTOS',
            'sexo' => 'M',
            'serie' => '4° ANO DO ENSINO FUNDAMENTAL I',
            'turno' => 'T',
            'nascimento' => '1995-08-21',
            'rg' => '21172045365',
            'cpf' => '04589765265',
            'telefone' => '8897412434',
            'celular' => '8897412434',
            'email'=> 'daniel@hotmail.com',
            'atividade' => 'Crime',
            'tempo' => '60',
            'instituicao' => 'FEBEM',
            'movimento' => 'Criminal',
            'categoria_id' => 3
        ]);

         Agente::create([
            'nome' => 'DENILSON FLORENTINO LÓPEZ',
            'sexo' => 'M',
            'serie' => '7° ANO DO ENSINO FUNDAMENTAL I',
            'turno' => 'T',
            'nascimento' => '1993-08-21',
            'rg' => '21172045365',
            'cpf' => '04629765265',
            'telefone' => '8897412434',
            'celular' => '8897412434',
            'email'=> 'denilson@hotmail.com',
            'atividade' => 'Dança do ventre',
            'tempo' => '50',
            'instituicao' => 'Dançarinos de ULA',
            'movimento' => 'Arábico',
            'categoria_id' => 1
        ]);

         Agente::create([
            'nome' => 'EXPEDITO ALVES DE LIMA',
            'sexo' => 'M',
            'serie' => '8° ANO DO ENSINO FUNDAMENTAL I',
            'turno' => 'N',
            'nascimento' => '1994-07-23',
            'rg' => '21172045365',
            'cpf' => '0634765265',
            'telefone' => '8897412434',
            'celular' => '8897412434',
            'email'=> 'expedito@hotmail.com',
            'atividade' => 'Besteira',
            'tempo' => '60',
            'instituicao' => 'Academia de Besteira',
            'movimento' => 'Bestas unidos jamais serão vencidos',
            'categoria_id' => 2
        ]);
    }
}