<div id="result"></div>
<div class="full-story">
    <div class="c-video">
        <div class="right-block inline-block right">
            <div class="poh">
                <div class="recom">Рекомендованные</div>
                <?php
                for ($i = $row_num; $i > $row_num - 18; $i--) {
                    $info_array_p = $posts[$i];
                    $search = $info_array_p['title'];
                    $search = mb_strtolower($search);
                    $arrayNews = explode(" ", $search);

                    if (array_intersect($arraySearch, $arrayNews)) {
                        require "short-story.php";
                        $n++;
                    }
                }
                ?>
            </div>
        </div>
        <div class="left-block inline-block">
            <div id="video" class="z-depth-4">
                <div class="video">
                    <video src="<?php echo $info_array['video'] ?>" controls
                           poster="<?php echo $info_array['pre'] ?>"></video>
                </div>
                <div class="rightAD">

                </div>
            </div>
            <div class="finfo radius z-depth-4">
                <div class="ftitle"><h1 class="font-h1"><?php echo $info_array['title'] ?></h1></div>
                <div class="infol inline-block">
                    <div class="f-views"><?php echo $info_array['views'] ?> просмотров</div>
                </div>
                <div class="infor inline-block right">
                    <div class="flikes inline-block"><i class="material-icons">favorite_border</i>
                        <div class="f-itext inline-block"><?php echo $info_array['likes'] ?></div>
                        <button class="share inline-block waves-effect waves-light btn pink "><i class="material-icons">cloud_download</i><span class="inline-block f-itext">Скачать</span></button>
                        <button class="share inline-block btn-flat waves-effect waves-light"><i class="material-icons">share</i><span class="inline-block f-itext">Поделиться</span></button>
                        <button class="share inline-block btn-flat waves-effect waves-light"><i class="material-icons">playlist_add</i></button>
                        <button class="share inline-block btn-flat waves-effect waves-light"><i class="material-icons">more_horiz</i></button>
                    </div>
                </div>
            </div>
            <div class="finfo radius z-depth-4">
                <?php
                if (!empty($info_array['studio'])) {
                    $info_studio = $studios_array[$info_array['studio']];
                    echo '
                <div class="studio inline-block">
                    <div class="img-studio"><img src="'.$info_studio['avatar'].'" alt="" class="circle"></div>
                </div>
                <div class="name-studio inline-block">
                    <div class="name-s">'.$info_studio['name'].'</div>
                    <div class="date-o">Опубликовано: 14 июля 2017</div>
                </div>
                <div class="follow inline-block right">';
                    $idUsers_array = explode(', ', $info_studio['idUsers']);
                    if (!in_array($id, $idUsers_array)) {
                        echo '<button class="z-depth-2 follow-btn inline-block waves-effect waves-light btn pink" id="f-btn"><a class="inline-block following" id="follow">Подписаться</a><span id="c-follows" class="count-follow"> 1.1 МЛН</span></button>';
                    } else {
                        echo '<button class="z-depth-2 follow-btn inline-block waves-effect waves-light btn f-btn" id="f-btn"><a class="inline-block following f-color" id="follow">Подписка оформленна</a><span id="c-follows" class="count-follow f-color"> 1.1 МЛН</span></button>';
                    }
                }
                    ?>
                </div>
                <div class="descr-video">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><div class="more">Ещё</div><div class="pre-descr">Страстный минет и глубокий анальный секс замечательной, сексуальной, грудастой детки. Парень решил поиграться со своей девушкой шлюхой в ролевые игры как будто они брат с сестрой и трахаются пока родителей нет дома и снять домашнее топ порно на будущие...</div>
                            </div>
                            <div class="collapsible-body">Красивая молоденькая девушка была не против такого действия и быстро согласилась на жестокий, анальный, но интересный секс и трах с игрушками, самотыками, резиновыми членами. Она делает минуть и сосёт, а парень - куни и кунилингус в попу. Парень оператор - друг хахаля, не против поснимать порнуху первый раз для товарища.
                            <div class="f-cat">Категории: Анал, БДСМ</div>
                                <div>Теги: большая попа, минет</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>