<?php
use Migrations\AbstractMigration;

class InsertDataDefaultPizzasSabores extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $rows = [
            [
                'nome' => 'Calabresa',
            ],
            [
                'nome' => 'Frango',
            ],
            [
                'nome' => 'Marguerita',
            ],
            [
                'nome' => 'Carne de sol',
            ],
        ];

        $this->table('pizzas_sabores')->insert($rows)->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('DELETE FROM pizzas_sabores');
    }
}
