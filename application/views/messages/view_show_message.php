<!-- Вывод сообщения -->
<div class="thumbnail">
    <!-- <img data-src="holder.js/300x200" alt="аватар"> -->
    <div class="caption">
        <div class="user">
            <span class="leftstr"><strong><?php echo Model::get_username($id_auth); ?></strong></span>
            <span class="rightstr"><?php echo $timestamp ?></span>
        </div>
        <div class="message">
            <?php echo $data1[$i]['message']; ?>
        </div>
        <div class="btncomment">
            <a href="#" class="btn btn-primary invisible2" role="button">Комментировать</a>
        </div>
    </div>
</div>