<div class="users liseusers">
    <h2><?php echo __('Liste des Users'); ?></h2>
    <table>
        <tr style="text-align: left">
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('username'); ?></th>
            <th><?php echo $this->Paginator->sort('role'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>

        <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher
        les informations des posts -->

        <?php foreach ($users as $user): ?>
            <tr>
                <!-- l'ID -->
                <td style="text-align: left"><?php echo $user['User']['id']; ?></td>
                <!--le Login -->
                <td style="text-align: left">
                    <?php echo $user['User']['username']; ?>
                </td>
                <!-- role -->
                <td style="text-align: left"><?php echo $user['User']['role']; ?></td>
                <!-- Créer le -->
                <td style="text-align: left"><?php echo $user['User']['created']; ?></td>
                <!-- modifé le -->
                <td style="text-align: left"><?php echo $user['User']['modified']; ?></td>
                <!--le Login -->
                <td class="actions"  style="text-align: left">
                    <?php echo $this->Html->Link('Voir', array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>

                    <?php echo $this->Html->link('modifier', array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?>

                    <?php echo $this->Html->link('Supprimer', "/users/delete/{$user['User']['id']}", null, 'Etes-vous sûr ?') ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} sur {:pages}, montrant {:current} enregistrements sur {:count} au total, à partir de l\'enregistrement {:start}, se terminant à {:end}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('Précédent'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('Suivant') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
        <div >
            <p style="text-align: right" >
                <?php
                    echo $this->Html->link('Retour Menu',array('controller'=>'users','action'=>'index'),array('class'=>'b'));
                ?>
            </p>
        </div>
    </div>