<!--ПОСЛЕДНИЕ НОВОСТИ-->
@section('last_news')
<section id="news" class="container news">
    <div class="row">
        <div class="col-12">
            <h2 class="h2_news">ПОСЛЕДНИЕ НОВОСТИ
            </h2>
        </div>
        <?php
        /*через * вытаскиваем все данные из моей таблицы news со следующей
        сортировкой id по убыванию ORDER BY id DESC с лимитом в 3 строки
        LEFT-слева вырезаем 500 символов и CONCAT-вставляем в конце ...
        */
        $sql = "SELECT id, title, CONCAT(LEFT (content, 500), '...') as content, id_author, pub_date, link_content FROM news WHERE id>0 ORDER BY id DESC LIMIT 3";
        //передаем 2 параметра: подключение из db.php и $sql
        $result = mysqli_query($con, $sql);
        //проверка на наличие ошибок
        if (!$result) {
            echo mysqli_error($con);
        }
        //проверка на наличие данных
        if($result->num_rows>0) {
        while ($last_news = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-4">
            <div class="card-body text-center">
                <!--делаем ссылку по id новости-->
                <a href="../news.php?id=<?= $last_news['id'] ?>">
                    <h3 class="card-title"> <?= $last_news['title'] ?> </h3>
                </a>
                <p class="card-text"><?= $last_news['content'] ?></p>
                <div class="card-link">Источник:
                    <a href="<?= $last_news['link_content'] ?>"
                       target="_blank"><?= $last_news['id_author'] ?></a>
                </div>
                <span><?= $last_news['pub_date'] ?></span>
            </div>
        </div>
        <?php
        }
        } else{
            echo "Данных нет";
        }
        ?>
    </div>
</section>
    @endsection
