<?php
use Migrations\AbstractMigration;

class Goals extends AbstractMigration
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

        $table = $this->table('goals');
        $table->addColumn('goal', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('memo', 'text', [
            'default' => null,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('trial', 'boolean', [
            'default' => 0,
            'null' => false,
        ]);
        $table->addColumn('running', 'boolean', [
            'default' => 0,
            'null' => false,
        ]);

        $table->addColumn('order', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('cycle_time', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('cancell_penalty_money', 'integer', [
            'default' => 0,
            'null' => false,
        ]);
        $table->addColumn('failure_penalty_money', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('end_time', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('next_time', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('success_model_image_url', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();






    }
}
