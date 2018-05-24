<?php
use Migrations\AbstractMigration;

class GoalLogs extends AbstractMigration
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
        $table = $this->table('goal_logs');
        $table->addColumn('result', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('goal_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('money', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('image_url', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->create();
    }
}
