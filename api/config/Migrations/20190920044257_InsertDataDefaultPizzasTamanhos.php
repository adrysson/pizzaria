<?php
use Migrations\AbstractMigration;

class InsertDataDefaultPizzasTamanhos extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $rows = [
            [
                'nome' => 'Individual',
            ],
            [
                'nome' => utf8_decode('Média'),
            ],
            [
                'nome' => 'Grande',
            ],
            [
                'nome' => 'Gigante',
            ],
        ];

        $this->table('pizzas_tamanhos')->insert($rows)->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('DELETE FROM pizzas_tamanhos');
    }
}
