<?php
use Migrations\AbstractMigration;

class InsertDataDefaultEstados extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $estados = [
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AP' => utf8_decode('Amapá'),
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => utf8_decode('Ceará'),
            'DF' => 'Distrito Federal',
            'ES' => utf8_decode('Espírito Santo'),
            'GO' => utf8_decode('Goiás'),
            'MA' => utf8_decode('Maranhão'),
            'MT' => 'Mato Grosso',
            'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais',
            'PA' => utf8_decode('Pará'),
            'PB' => utf8_decode('Paraíba'),
            'PR' => utf8_decode('Paraná'),
            'PE' => 'Pernambuco',
            'PI' => utf8_decode('Piauí'),
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => utf8_decode('Rondônia'),
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => utf8_decode('São Paulo'),
            'SE' => 'Sergipe',
            'TO' => 'Tocantins'
        ];

        foreach ($estados as $uf => $estado) {
            $rows[] = [
                'nome' => $estado,
                'uf' => $uf,
            ];
        }

        $this->table('estados')->insert($rows)->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('DELETE FROM estados');
    }
}
