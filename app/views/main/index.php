<ul>
    <?php foreach ($response as $value) : ?>
        <li><?= $value['title'] ?></li>
        <div><?= $value['text']?></div>
    <?php endforeach ?>

</ul>
<button class="btn btn-primary" id="click_me">Click me</button>

<script>
    $('#click_me').on('click', function() {
        $.ajax({
            url: '/main/test',
            type: 'post',
            data: {
                'id': 2
            },
            success: function(data) {
                console.log(data);
            },
            error: function(error) {
                alert(error)
            }
        });
    });
</script>