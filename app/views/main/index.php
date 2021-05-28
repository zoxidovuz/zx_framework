<code><?= __FILE__ ?></code>

<ul>
    <?php foreach ($response as $value) : ?>
    <li><?= $value['title'] ?></li>
    <?php endforeach ?>
</ul>