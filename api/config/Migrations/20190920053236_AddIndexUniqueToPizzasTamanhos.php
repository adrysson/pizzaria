<?php
use Migrations\AbstractMigration;

class AddIndexUniqueToPizzasTamanhos extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('pizzas_tamanhos');
        $table->addIndex(['nome'], ['unique' => true]);
        $table->update();
    }
}
