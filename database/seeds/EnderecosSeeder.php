<?php

use Illuminate\Database\Seeder;
use App\Model\Endereco;
class EnderecosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Endereco::create([
            'logradouro' => 'Cicero Pomepu de Toledo',
            'bairro' => 'Morumbi',
            'cidade' => 'São Paulo',
            'cep' => '65412-000',
            'numero' => '123',
            'agente_id' => 1
        ]);
            Endereco::create([
            'logradouro' => 'Toledo Carvalho Pinto',
            'bairro' => 'Ragatanga',
            'cidade' => 'Rio de Janeiro',
            'cep' => '67845-000',
            'numero' => '320',
            'agente_id' => 2
        ]);

         Endereco::create([
            'logradouro' => 'Cicero Lemos de Oliveira',
            'bairro' => 'Centro',
            'cidade' => 'Lavras da Mangabeira',
            'cep' => '63300-000',
            'numero' => '100',
            'agente_id' => 3
        ]);

         Endereco::create([
            'logradouro' => 'José Paulino de Oliveira',
            'bairro' => 'Jardim',
            'cidade' => 'Cedro',
            'cep' => '64100-000',
            'numero' => '100',
            'agente_id' => 4
        ]);

         Endereco::create([
            'logradouro' => 'Coronel Manoel Duarte',
            'bairro' => 'Centro',
            'cidade' => 'Lavras da Mangabeira',
            'cep' => '63300-000',
            'numero' => '100',
            'agente_id' => 5
        ]);
    }
}